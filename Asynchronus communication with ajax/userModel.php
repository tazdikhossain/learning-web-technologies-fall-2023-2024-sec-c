<?php
require_once('db.php');


function login($username, $password)
{
    $con = getConnection();
    $sql = "select * from persons where username='{$username}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    $user = mysqli_fetch_assoc($result);
    

    if ($count == 1) {
        $_SESSION['id']=$user['id'];
        return true;
    } else {
        return false;
    }
}

?>