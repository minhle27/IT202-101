<?php
require(__DIR__ . "/partials/nav.php");
?>
<h1 style='text-align: center;'>Home</h1>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    $username = get_username();
    echo "<div style='text-align: center;'><h2 style='color: green;'>Hello, $username!</h2></div>";
    error_log("Session data: " . var_export($_SESSION, true));
}
?>

<div class="menu-container">
    <ul>
        <li><a href="<?php echo get_url('create_account.php'); ?>">Create Account</a></li>
        <li><a href="<?php echo get_url('my_accounts.php'); ?>">My Accounts</a></li>
        <li><a href="<?php echo get_url('deposit.php'); ?>">Deposit</a></li>
        <li><a href="<?php echo get_url('withdraw.php'); ?>">Withdraw</a></li>
        <li><a href="#">Transfer</a></li>
        <li><a href="#">Profile</a></li>
    </ul>
</div>

<style>
    .menu-container {
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
        max-width: 30%;
    }

    .menu-container ul {
        list-style-type: none;
        padding: 20px;
        margin: 20px;
        text-align: center;
    }

    .menu-container li {
        margin-bottom: 15px;
    }
    
    .menu-container li a {
        display: block;
        padding: 8px 16px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }

    .menu-container li a:hover {
        background-color: #ddd;
    }

</style>


<?php require_once(__DIR__ . "/partials/flash.php");