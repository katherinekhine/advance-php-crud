<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Ensure no output before JSON response
ob_start();

$action = $_POST['action'] ?? '';

$response = [];

if (!empty($action)) {
    require_once 'partials/user.php';
    $obj = new User();

    // Adding user action
    if ($action == 'adduser' && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_FILES['photo'])) {
        $pname = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $photo = $_FILES['photo'];

        $userId = $_POST['userId'] ?? '';

        $imagename = '';
        if (!empty($photo['name'])) {
            $imagename = $obj->uploadPhoto($photo);
        }

        $userData = [
            'name' => $pname,
            'email' => $email,
            'mobile' => $mobile,
            'photo' => $imagename,
        ];

        $userId = $obj->add($userData);

        if (!empty($userId)) {
            $user = $obj->getRow('id', $userId);
            $response = $user;
        } else {
            $response = ['error' => 'User could not be added'];
        }
    } else {
        $response = ['error' => 'Invalid or incomplete data for adding user'];
    }
} else {
    $response = ['error' => 'No action specified'];
}

// Clear any extra output and send JSON response
ob_end_clean();
header('Content-Type: application/json');
echo json_encode($response);
exit;
