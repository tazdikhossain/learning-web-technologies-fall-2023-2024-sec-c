<?php


$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$id = $_SESSION['id'];
$gender = $_REQUEST['gender'];
$phoneNumber = $_REQUEST['phoneNumber'];

$user = ['username' => $username, 'email' => $email, 'gender'=>$gender, 'phoneNumber'=>$phoneNumber, "id" => $id];
updateUser($user);
header("location: ../view/AdminViewUser.php");
?>
