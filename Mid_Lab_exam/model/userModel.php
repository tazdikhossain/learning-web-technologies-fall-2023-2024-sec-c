<?php
require_once('db.php');


function login($userid, $password)
{
    $con = getConnection();
    $sql = "select * from miniuser where userid='{$userid}' and password='{$password}'";
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

function userType($userid)
{
    $con = getConnection();
    $sql = "select userType from miniuser where userid='{$userid}'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function createUser()
{
}

function getUser($id)
{
    $con = getConnection();
    $sql = "select * from miniuser where id = '$id'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "Invalid User";
        return false;
    }
}

function getAllUser()
{
    $con = getConnection();
    $sql = "select * from miniuser";
    $result = mysqli_query($con, $sql);
    $miniuser = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($minuser, $row);
    }

    return $users;
}

