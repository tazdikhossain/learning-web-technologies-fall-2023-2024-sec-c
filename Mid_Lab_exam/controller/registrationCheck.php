<?php


    // Data collect from registration form
    $userid = $_REQUEST['userid'];
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $userType = $_REQUEST['userType'];
    
    // initialization
    $isValidUsername = true;
    $isValidPassword = true;
    


if (isset($_REQUEST['submit'])) 
{


    if ($username == "" || $password == "") 
    {
        echo "Null Username or password". "\n";
        $isValidUsername = false;
    } 
    
    else {

        if($password != $confirmPassword){
        echo "password doesn't match" . "\n";

        $isValidPassword = false;
        }
    
        } 

    if (strlen($name) < 2) {
        echo "Username must contain at least two characters." . "\n";
        $isValidUsername = false;
    } 
        
    else {
        for ($i = 0; $i < strlen($name); $i++) {
            $char = $$name[$i];

            if (!ctype_alnum($char) && $char != '.' && $char != '-' && $char != '_') {
                echo "Username can contain alphanumeric characters, period, dash, or underscore only.";
                $isValidUsername = false;
                break;
            }
        }
    }


    if (strlen($password) < 8) {
        echo "Password must not be less than eight characters." . "\n";
        $isValidPassword = false;
    } 
    
    else {
        $hasSpecialChar = false;
        for ($i = 0; $i < strlen($password); $i++) {
            $char = $password[$i];

            if ($char == '@' || $char == '#' || $char == '$' || $char == '%') {
                $hasSpecialChar = true;
                break;
            }
        }

        if (!$hasSpecialChar) {
            echo "Password must contain at least one of the special characters (@, #, $, %)." . "\n";
            $isValidPassword = false;
        }
    }

 

if ($isValidUsername && $isValidPassword) {
    echo "Valid username and password." . "\n";
    


    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    $sql = "insert into users (userid, name,password,userType) values('{$userid}', '($name}','{$password}','{$userType}' )";
    $result = mysqli_query($con, $sql);

    
    header('location: ../view/login.html');

}






}



?>

