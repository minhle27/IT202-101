<?php
require_once(__DIR__ . "/partials/nav.php");
is_logged_in(true);
?>

<h1 style='text-align: center;'>Withdraw</h1>

<div id="withdrawContainer">
    <?php if (count($_SESSION["user"]["accounts"]) > 0) : ?>
        <form id="withdrawForm" onsubmit="return validate(this)" method="POST">
            <label for="accountSelect">Select Account:</label>
            <select id="accountSelect" name="accountSelect">
                <?php
                    $accounts = $_SESSION["user"]["accounts"];
                    foreach ($accounts as $account) {
                        $optionText = $account['account_number'] . ' (Balance: $' . $account['balance'] . ')';
                        echo "<option value='{$account['balance']}'>{$optionText}</option>";
                    }
                ?>
            </select>

            <label for="withdrawAmount">Withdraw Amount:</label>
            <input type="number" id="withdrawAmount" name="withdrawAmount" min="1" step="1">
            <br>

            <label for="memo-withdraw">Memo (optional):</label>
            <textarea id="memo-withdraw" name="memo"></textarea>
            <br>

            <input type="submit" value="Withdraw" />
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

    #withdrawContainer {
        max-width: 400px;
        margin: 0 auto;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    #memo-withdraw {
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
        const withdrawAmount = parseInt(form.withdrawAmount.value);
        const accountBalance = parseInt(document.getElementById("accountSelect").value);
        
        let isValid = true;
        if (!withdrawAmount || withdrawAmount <= 0) {
            flash("Deposit amount must be greater than 0 or not empty", "warning");
            isValid = false;
        }
        if (!isValid) return false;

        if (withdrawAmount > accountBalance) {
            flash("Must not exceed account balance", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>

<?php
require(__DIR__ . "/partials/flash.php");
?>