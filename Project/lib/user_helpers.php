<?php

/**
 * Passing $redirect as true will auto redirect a logged out user to the $destination.
 * The destination defaults to login.php
 */
function is_logged_in($redirect = false, $destination = "login.php")
{
    $isLoggedIn = isset($_SESSION["user"]);
    if ($redirect && !$isLoggedIn) {
        //if this triggers, the calling script won't receive a reply since die()/exit() terminates it
        flash("You must be logged in to view this page", "warning");
        die(header("Location: $destination"));
    }
    return $isLoggedIn;
}
function has_role($role)
{
    if (is_logged_in() && isset($_SESSION["user"]["roles"])) {
        foreach ($_SESSION["user"]["roles"] as $r) {
            if ($r["name"] === $role) {
                return true;
            }
        }
    }
    return false;
}

function has_account($accountID) 
{
    if (is_logged_in() && isset($_SESSION["user"]["accounts"])) {
        foreach ($_SESSION["user"]["accounts"] as $r) {
            if ($r["id"] === $accountID) {
                return $r;
            }
        }
    }
    return null;
}

function get_new_account_number() {
    $db = getDB();
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id) VALUES(:account_number, :user_id)");
    $stmt->execute([":account_number" => NULL, ":user_id" => NULL]);
    $lastInsertID = (string)$db->lastInsertId();
    $rand = substr(str_shuffle($characters), 0, 12 - strlen($lastInsertID));
    $account_number = $rand . $lastInsertID;
    return $account_number;
}

function get_username()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "username", "", false);
    }
    return "";
}
function get_user_email()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "email", "", false);
    }
    return "";
}
function get_user_id()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "id", false, false);
    }
    return false;
}