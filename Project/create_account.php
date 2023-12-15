<?php
require_once(__DIR__ . "/partials/nav.php");
is_logged_in(true);
?>
<h1>Create a new account</h1>
<div id="accountCreateContainer">
    <form id="bankAccountForm" onsubmit="return validate(this)" method="POST">
        <label for="accountType">Account Type:</label>
        <select id="accountType" name="accountType">
            <option value="checking">Checking Account</option>
        </select>
        <br>

        <label for="depositAmount">Deposit Amount ($5 minimum):</label>
        <input type="number" id="depositAmount" name="depositAmount" min="1" step="1">
        <br>

        <input type="submit" value="Create Account" />
    </form>
</div>
<script>
    function validate(form) {
        const depositAmount = parseInt(form.depositAmount.value);
        let isValid = true;
        if (!depositAmount || depositAmount < 5) {
            flash("Deposit amount must be greater than $5 or not empty", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>
<style>
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    #accountCreateContainer {
        max-width: 400px;
        margin: 0 auto;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    form {
        margin-bottom: 5px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    select,
    input[type="number"],
    input[type="text"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }


    input[type="submit"] {
        background-color: #54ace3;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #8ac6eb;
    }
</style>

<?php
if (isset($_POST["accountType"]) && isset($_POST["depositAmount"])) {
    $depositAmount = se($_POST, "depositAmount", "", false);

    // validate
    $hasError = false;
    if (empty($depositAmount) ) {
        flash("Deposit amount must not be empty", "danger");
        $hasError = true;
    }
    if ($depositAmount < 5) {
        flash("Deposit amount must not be smaller than 5", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $random_account_num = get_new_account_number();

        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id, balance, account_type) VALUES(:account_number, :user_id, :balance, :account_type)");
        $params = [":account_number" => $random_account_num, ":user_id" => get_user_id(), ":balance" => 0, ":account_type" => "checking"];

        try {
            $stmt->execute($params);

            // Retrieve account ID
            $stmt = $db->prepare("SELECT id FROM Accounts WHERE account_number = :random_account_num");
            $stmt->execute([":random_account_num" => $random_account_num]);
            $account = $stmt->fetch(PDO::FETCH_ASSOC);
            $account_id = $account["id"];

            // Fetch the current balance of world account
            $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = :account_id");
            $stmt->execute([":account_id" => -1]);
            $world_acc = $stmt->fetch(PDO::FETCH_ASSOC);
            $world_acc_balance = $world_acc["balance"];

            $world_expected_total = $world_acc_balance - $depositAmount;
            $user_expected_total = $depositAmount;

            // Create transaction pair
            $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
                                VALUES(:account_src, :account_dest, :balance_change, :transaction_type, :memo, :expected_total)");
            
            $stmt->execute([":account_src" => -1, ":account_dest" => $account_id, ":balance_change" => -$depositAmount, ":transaction_type" => "deposit", ":memo" => "create account", ":expected_total" => $world_expected_total]);
            $stmt->execute([":account_src" => $account_id, ":account_dest" => -1, ":balance_change" => $depositAmount, ":transaction_type" => "deposit", ":memo" => "create account", ":expected_total" => $user_expected_total]);

            // Update account balances
            $stmt = $db->prepare("UPDATE Accounts SET balance = (SELECT SUM(balance_change) FROM Transactions WHERE account_src = :account_id) WHERE id = :account_id");
            $stmt->execute([":account_id" => $account_id]);
            $stmt->execute([":account_id" => -1]);

            // renew session
            $stmt = $db->prepare("SELECT * FROM Accounts WHERE user_id = :user_id");
            $stmt->execute([":user_id" => get_user_id()]);
            $updated_accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["user"]["accounts"] = $updated_accounts;

            flash("Successfully created checking account!", "success");
            die(header("Location: " . get_url("my_accounts.php")));
        } catch (Exception $e) {
            flash("An error occurred while creating your account", "danger");
            error_log(var_export($e, true));
        }
    }
}
?>

<?php
require(__DIR__ . "/partials/flash.php");
?>