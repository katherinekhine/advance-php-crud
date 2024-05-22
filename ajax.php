<?php

// print_r($_FILES);
// die;

$action = $_REQUEST['action'];

if (!empty($action)) {
    require_once 'partials/user.php';
    $obj = new User();
}

// adding user action
if ($action == 'adduser' && !empty($_POST)) {
    $paname = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $phot = $_POST['phot'];

    $playerid = (!empty($_POST['userId'])) ? $_POST['userId'] : "";
}
