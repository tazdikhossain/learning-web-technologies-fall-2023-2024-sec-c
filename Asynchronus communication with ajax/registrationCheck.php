<?php

// initialization
$isValidUsername = true;
$isValidPassword = true;

$nameError = "";
$usernameError = "";
$passwordError = "";
$confirmPasswordError = "";
$emailError = "";
$phoneNumberError = "";
$genderError = "";


if (isset($_REQUEST['submit'])) {

    // Data collect from registration form
    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    $email = $_REQUEST['email'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';

    // Name validation
    if (empty($name)) {
        $nameError = "Please enter your name";
    }

    // Username validation
    if (empty($username) || strlen($username) < 2) {
        $usernameError = "Username must contain at least two characters";
    } else {
        for ($i = 0; $i < strlen($username); $i++) {
            $char = $username[$i];

            if (!ctype_alnum($char) && $char != '.' && $char != '-' && $char != '_') {
                $usernameError = "Username must contain alphanumeric characters, period, dash, or underscore only";
                break;
            }
        }
    }

    // Password validation
    if (empty($password) || strlen($password) < 5) {
        $passwordError = "Password must not be less than five characters";
    } else {
        $hasSpecialChar = false;

        for ($i = 0; $i < strlen($password); $i++) {
            $char = $password[$i];

            if ($char == '@' || $char == '#' || $char == '%') {
                $hasSpecialChar = true;
                break;
            }
        }

        if (!$hasSpecialChar) {
            $passwordError = "Password must contain at least one of the special characters (@, #, $, %)";
        }
    }

    // Confirm password validation
    if (empty($confirmPassword) || $confirmPassword != $password) {
        $confirmPasswordError = "Passwords do not match";
    }

    // Email validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
    }

    // Phone number validation
    if (strlen($phoneNumber) != 11 || $phoneNumber[0] != '0' || $phoneNumber[1] != '1') {
        $phoneNumberError = "Invalid phone number. Please try again";
    }

    // Gender validation
    if (!isset($gender)) {
        $genderError = "Please select your gender";
    }

    //All validations pass, insert user data into database
    if ($isValidUsername && $isValidPassword && empty($nameError) && empty($usernameError) && empty($passwordError) && empty($confirmPasswordError) && empty($emailError) && empty($phoneNumberError) && empty($genderError)) {
        $con = mysqli_connect('127.0.0.1', 'root', '', 'persondb');
        $sql = "insert into users (username,password,email, role, phoneNumber,gender) values('{$username}','{$password}','{$email}','user','{$phoneNumber}','{$gender}')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header('location:login.php');
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}
?>
