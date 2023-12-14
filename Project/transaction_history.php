<?php
require_once(__DIR__ . "/partials/nav.php");
is_logged_in(true);
?>

<?php
$accountId = $_GET['account_id'] ?? null;
$account = has_account($accountId);
if (!$accountId || $accountId && !$account) {
    flash("Cannot view this account", "danger");
    die(header("Location: " . get_url("my_accounts.php")));
}
else {
    // Retrieve transaction history
    $db = getDB();
    $stmt = $db->prepare("SELECT t.id, t.account_src, t.account_dest, 
                                t.transaction_type, t.balance_change, 
                                t.created, t.expected_total, t.memo,
                                A_src.account_number AS account_src_number,
                                A_dest.account_number AS account_dest_number
                            FROM Transactions t
                            JOIN Accounts A_src ON t.account_src = A_src.id
                            JOIN Accounts A_dest ON t.account_dest = A_dest.id
                            WHERE t.account_src = :account_id
                            ORDER BY t.created DESC
                            LIMIT 10");
    $stmt->execute([":account_id" => $accountId]);
    $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<h1 style='text-align: center;'>Account Information</h1>
<div class="accountContainer">
    <?php if ($account) : ?>
        <h3>Account Details</h3>
        <p><strong>Account Number: </strong> <?php se($account, 'account_number'); ?></p>
        <p><strong>Account Type: </strong> <?php se($account, 'account_type'); ?></p>
        <p><strong>Balance: </strong> <?php se($account, 'balance'); ?></p>
        <p><strong>Opened/Created Date: </strong> <?php se($account, 'created'); ?></p>

        <?php if ($transactions) : ?>
            <h3>Transaction History</h3>
            <table class="transaction-table">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Source Account</th>
                        <th>Destination Account</th>
                        <th>Transaction Type</th>
                        <th>Balance Change</th>
                        <th>Created</th>
                        <th>Expected Total</th>
                        <th>Memo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transactions as $transaction) : ?>
                        <tr>
                            <td><?php se($transaction, "id"); ?></td>
                            <td><?php se($transaction, "account_src_number"); ?></td>
                            <td><?php se($transaction, "account_dest_number"); ?></td>
                            <td><?php se($transaction, "transaction_type"); ?></td>
                            <td><?php se($transaction, "balance_change"); ?></td>
                            <td><?php se($transaction, "created"); ?></td>
                            <td><?php se($transaction, "expected_total"); ?></td>
                            <td id="memo"><?php se($transaction, "memo"); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <h2> No available transactions </h2>
        <?php endif; ?>
    <?php else : ?>
        <h2>No account available</h2>
    <?php endif; ?>
</div>
<style>
    .transaction-table {
        width: 100%;
        border-collapse: collapse;
    }

    .transaction-table th,
    .transaction-table td {
        padding: 8px;
        border: 1px solid #ccc;
    }

    .transaction-table th {
        background-color: #f2f2f2;
    }

    .transaction-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .transaction-table tr:hover {
        background-color: #eaeaea;
    }

    #memo {
        min-width: 95px;
    }
</style>

<?php require(__DIR__ . "/partials/flash.php"); ?>