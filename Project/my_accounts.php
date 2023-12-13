<?php
require_once(__DIR__ . "/partials/nav.php");
is_logged_in(true);
?>
<h1 style='text-align: center;'>My Accounts</h1>

<div class="accounts-container">
    <table>
        <thead>
            <tr>
                <th>Account Number</th>
                <th>Account Type</th>
                <th>Modified</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $db = getDB();
            $stmt = $db->prepare("SELECT account_number, account_type, modified, balance FROM Accounts WHERE user_id = :user_id LIMIT 5");
            $stmt->execute([":user_id" => get_user_id()]);
            $accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($accounts as $account) {
                echo "<tr>";
                echo "<td>" . $account['account_number'] . "</td>";
                echo "<td>" . $account['account_type'] . "</td>";
                echo "<td>" . $account['modified'] . "</td>";
                echo "<td>" . $account['balance'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<style>
    .accounts-container {
        margin: 20px auto;
        max-width: 800px;
        padding: 20px;
        background-color: #f7f7f7;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>

<?php require(__DIR__ . "/partials/flash.php"); ?>