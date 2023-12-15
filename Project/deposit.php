<?php
require_once(__DIR__ . "/partials/nav.php");
is_logged_in(true);
?>

<h1 style='text-align: center;'>Deposit</h1>

<div id="depositContainer">
    <?php if (count($_SESSION["user"]["accounts"]) > 0) : ?>
        <form id="depositForm" onsubmit="return validate(this)" method="POST">
            <label for="accountSelect">Select Account:</label>
            <select id="accountSelect" name="accountSelect">
                <?php
                    $accounts = $_SESSION["user"]["accounts"];
                    foreach ($accounts as $account) {
                        $optionText = $account['account_number'] . ' (Balance: $' . $account['balance'] . ')';
                        echo "<option value='{$account['id']}'>{$optionText}</option>";
                    }
                ?>
            </select>

            <label for="depositAmount">Deposit Amount:</label>
            <input type="number" id="depositAmount" name="depositAmount" min="1" step="1">
            <br>

            <label for="memo-deposit">Memo (optional):</label>
            <textarea id="memo-deposit" name="memo"></textarea>
            <br>

            <input type="submit" value="Deposit" />
        </form>
    <?php else : ?>
        <h2>No account available</h2>
    <?php endif; ?>
</div>
<style>
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    #depositContainer {
        max-width: 400px;
        margin: 0 auto;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    #memo-deposit {
        width: 100%;
        padding: 8px;
        border-radius: 3px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 14px;
        margin-bottom: 10px;
        resize: vertical;
        min-height: 80px;
    }

    form {
        margin-bottom: 20px;
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

    h2 {
        text-align: center;
        margin-top: 20px;
    }
</style>
<script>
    function validate(form) {
        const depositAmount = parseInt(form.depositAmount.value);
        let isValid = true;
        if (!depositAmount || depositAmount <= 0) {
            flash("Deposit amount must be greater than 0 or not empty", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>

<?php
if (isset($_POST["accountSelect"]) && isset($_POST["depositAmount"])) {
    $account = se($_POST, "accountSelect", "", false);
    $depositAmount = se($_POST, "depositAmount", "", false);
    $memo = se($_POST, "memo", "", false);

    // validate
    $hasError = false;
    if (empty($account)) {
        flash("Account must not be empty", "danger");
        $hasError = true;
    }
    if (empty($depositAmount)) {
        flash("Deposit amount must not be empty", "danger");
        $hasError = true;
    }
    if (!has_account($account)) {
        flash("You don't have permission", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $db = getDB();
        try {
            // Fetch the current balance of each account
            $stmt = $db->prepare("SELECT balance FROM Accounts WHERE id = :account_id");
            $stmt->execute([":account_id" => -1]);
            $world_acc = $stmt->fetch(PDO::FETCH_ASSOC);
            $world_acc_balance = $world_acc["balance"];

            $stmt->execute([":account_id" => $account]);
            $user_acc = $stmt->fetch(PDO::FETCH_ASSOC);
            $user_acc_balance = $user_acc["balance"];

            $world_expected_total = $world_acc_balance - $depositAmount;
            $user_expected_total = $user_acc_balance + $depositAmount;

            // Create transaction pair
            $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
                                VALUES(:account_src, :account_dest, :balance_change, :transaction_type, :memo, :expected_total)");
            $stmt->execute([":account_src" => -1, ":account_dest" => $account, ":balance_change" => -$depositAmount, ":transaction_type" => "deposit", ":memo" => $memo, ":expected_total" => $world_expected_total]);
            $stmt->execute([":account_src" => $account, ":account_dest" => -1, ":balance_change" => $depositAmount, ":transaction_type" => "deposit", ":memo" => $memo, ":expected_total" => $user_expected_total]);

            // Update account balances
            $stmt = $db->prepare("UPDATE Accounts SET balance = (SELECT SUM(balance_change) FROM Transactions WHERE account_src = :account_id) WHERE id = :account_id");
            $stmt->execute([":account_id" => $account]);
            $stmt->execute([":account_id" => -1]);

            // renew session
            $stmt = $db->prepare("SELECT * FROM Accounts WHERE user_id = :user_id");
            $stmt->execute([":user_id" => get_user_id()]);
            $updated_accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION["user"]["accounts"] = $updated_accounts;

            flash("Successfully deposited!", "success");
            die(header("Location: " . get_url("my_accounts.php")));
        } catch (Exception $e) {
            flash("An error occurred while depositing", "danger");
            error_log(var_export($e, true));
        }
    }
}
?>

<?php
require(__DIR__ . "/partials/flash.php");
?>