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
      <input type="submit" value="Create Account" />
    </form>
</div>
<script>
    function validate(form) {
        return true;
    }
</script>
<style>
    h1 {
        text-align: center;
    }
    
    #accountCreateContainer {
        display: flex;
        margin-left: auto;
        margin-right: auto;
        align-items: center;
        justify-content: center;
        max-width: 20%;
    }

    #bankAccountForm {
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        font-family: Arial, sans-serif;
    }

    label {
        font-weight: bold;
    }

    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 10px;
        margin-top: 10px;
    }

    input[type="submit"] {
        background-color: #54ace3;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
    }

    input[type="submit"]:hover {
        background-color: #8ac6eb;
    }
</style>
<?php
if (isset($_POST["accountType"])) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_account_num = substr(str_shuffle($characters), 0, 12);
    $params = [":account_number" => $random_account_num, ":user_id" => get_user_id(), ":balance" => 0, ":account_type" => "checking"];

    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id, balance, account_type) VALUES(:account_number, :user_id, :balance, :account_type)");

    try {
        $stmt->execute($params);

        // Retrieve account IDs
        $stmt = $db->prepare("SELECT id FROM Accounts WHERE account_number = :random_account_num");
        $stmt->execute([":random_account_num" => $random_account_num]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
        $account_id = $account["id"];

        // Create transaction pair
        $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, expected_total) 
                            VALUES(:account_src, :account_dest, :balance_change, :transaction_type, :expected_total)");
        
        $stmt->execute([":account_src" => -1, ":account_dest" => $account_id, ":balance_change" => -5, ":transaction_type" => "deposit", ":expected_total" => -5]);
        $stmt->execute([":account_src" => $account_id, ":account_dest" => -1, ":balance_change" => 5, ":transaction_type" => "deposit", ":expected_total" => 5]);

        // Update account balances
        $stmt = $db->prepare("UPDATE Accounts SET balance = (SELECT SUM(balance_change) FROM Transactions WHERE account_src = :account_id) WHERE id = :account_id");
        $stmt->execute([":account_id" => $account_id]);
        flash("Successfully created checking account!", "success");
        die(header("Location: " . get_url("my_accounts.php")));
    } catch (Exception $e) {
        flash("An error occurred while creating your account", "danger");
        error_log(var_export($e, true));
    }
}
?>

<?php
require(__DIR__ . "/partials/flash.php");
?>