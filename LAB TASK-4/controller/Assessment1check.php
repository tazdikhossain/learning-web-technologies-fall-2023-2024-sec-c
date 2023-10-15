<?php
session_start();
$usename = $_POST['username'];
$password = $_POST['password'];
$error='';

if (isset($_POST['submit'])) 
    {
    $usename = $_POST['username'];
    $password = $_POST['password'];
    }

if(isset($_POST['submit']))
{
    if($username=="")
    {
        $error= "User name can not be empty";
    }
    elseif(strlen($username)<2)
    {
        $error = " Name must contain 2 words";
    }
    else {
        for ($i = 0; $i < strlen($username); $i++) 
        {
            $char = $username[$i];

            if (!ctype_alnum($char) && $char != '.' && $char != '-' && $char != '_')
            {
                echo "Username can contain alphanumeric characters, period, dash, or underscore only.";
            }
        }
    }
    

    if(strlen($password)<8)
    {
        $error = "Password must contain 8 characters";
    }
    else 
    {
        for ($i = 0; $i < strlen($password); $i++) 
        {
            $char = ($password)[$i];

            if (!ctype_alnum($char) && $char != '@' && $char != '#' && $char != '$' && $char!='%')
            {
                echo "Password must contain at least one of the special characters (@, #, $, %).";
            }
        }
    }
}
?>