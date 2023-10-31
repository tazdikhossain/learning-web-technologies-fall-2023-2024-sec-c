<?php
    session_start();
    require_once('../model/userModel.php');


    $userid = $_REQUEST['userid'];
    $password = $_REQUEST['password'];

    if($userid == "" || $password == ""){
        echo "null username/password!";   
    }else{
        
        $status = login($userid, $password);
        
        if($status)
        {   
            $_SESSION['flag'] = "true";

            $row=userType($userid);

            if($row['userType']=="user")
            {
                header('location: ../view/user_home.html');
            }
            elseif($row['userType']=="admin")
            {
                header('location: ../view/admin_home.html');
            }
            
            }
            else{
            echo "invaid user!";
            
            
        }
    } 
?>

