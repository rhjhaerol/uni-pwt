<?php

session_start();

if(isset($_GET['logout'])) {
    session_destroy();
    header('Location: ../index.php');
}

$success = FALSE;
$message = 'Invalid username and/or password.';


$uname = isset($_POST['username']) ? $_POST['username'] : '';
$passwd = isset($_POST['password']) ? $_POST['password'] : '';

if ($uname == 'admin' && $passwd == 'admin') {
    $_SESSION['APP-LOGIN'] = true;
    $success = TRUE;
    $message = 'You have logged in successfully!';
} else {
    session_destroy();
}

$result = [
    'success' => $success,
    'message' => $message
];

echo json_encode($result);

?>