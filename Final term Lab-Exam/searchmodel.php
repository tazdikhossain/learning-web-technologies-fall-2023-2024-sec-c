<?php
require_once('db.php');

function searchContent($username, $id='') { //$name, $id
    $con = getConnection();

    if (!empty($id))
    {
    $sql = "SELECT * FROM search WHERE username LIKE '%$username%' AND id = '$id'";
    }
    
    else
    {
        $sql = "SELECT * FROM search WHERE username LIKE '%$username%' ";
    }

    $result = mysqli_query($con, $sql);
    return $result;
}

function getUser($id)
{
    $con = getConnection();
    $sql = "select * from search where id = '$id'";
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

?>
