<?php

session_start();
require_once('../model/userModel.php');

$user = getUser($_SESSION['id']);
$oldPassword = $user['password'];


$currentPassword=$_REQUEST['currentPassword'];
$newPassword=$_REQUEST['newPassword'];
$confirmPassword=$_REQUEST['confirmPassword'];

if($oldPassword==$currentPassword)
{

    if($newPassword==$confirmPassword)
    {
        $updatePassword = updatePassword($_SESSION['id'], $newPassword );
        if($updatePassword==true)
        { header('location:../view/dashboardGeneralUser.php');}
        else{
            echo "Somthing went wrong";
        }
       
    }
    else{
        echo "Password doesnt match";
    }

}
else{
    echo "CurrentPassword doesnt match";
}


    
?>