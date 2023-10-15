<?php
session_start();
$currentpassword = $_POST['currentpassword']; 
$newpassword = $_POST['newpassword']; 
$retypepassword = $_POST['retypepassword']; 

$error = '';

if (isset($_POST['submit'])) {
    $currentpassword= $_POST['$currentpassword'];
    $newpassword=$_POST['newpassword'];
    $retypepassword = $_POST['retypepassword'];
    }

if(isset($_POST['submit']))
{
    if ($newPassword == $currentPassword) {
    $error = 'New Password should not be the same as the Current Password.';
    }
    if ($newPassword != $retypedPassword) {
    $error = 'New Password must match with the Retyped Password.';
    }
}
?>