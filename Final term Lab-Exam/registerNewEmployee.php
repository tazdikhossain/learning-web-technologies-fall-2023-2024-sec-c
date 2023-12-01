<?php


// initialization
$isValidUsername = true;
$isValidPassword = true;

$nameError = "";
$usernameError = "";
$passwordError = "";
$confirmPasswordError = "";
// $emailError = "";
$phoneNumberError = "";
// $genderError = "";


if (isset($_REQUEST['submit'])) {

    // Data collect from registration form
    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $confirmPassword = $_REQUEST['confirmPassword'];
    // $email = $_REQUEST['email'];
    $phoneNumber = $_REQUEST['phoneNumber'];
    // $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
    // $role = isset($_REQUEST['role']) ? $_REQUEST['role'] : '';

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

    // // Email validation
    // if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $emailError = "Invalid email format";
    // }

    // Phone number validation
    if (strlen($phoneNumber) != 11 || $phoneNumber[0] != '0' || $phoneNumber[1] != '1') {
        $phoneNumberError = "Invalid phone number. Please try again";
    }

    // // Gender validation
    // if (!isset($gender)) {
    //     $genderError = "Please select your gender";
    // }

    //All validations pass, insert user data into database
    if ($isValidUsername && $isValidPassword && empty($nameError) && empty($usernameError) && empty($passwordError) && empty($confirmPasswordError) && empty($emailError) && empty($phoneNumberError) && empty($genderError)) {
        $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
        $sql = "insert into users (username,password,email, role, phoneNumber,gender) values('{$username}','{$password}','{$email}','{$role}','{$phoneNumber}','{$gender}')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header('location: adminViewUsers.php');
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}
?>

<html lang="en">

<head>
    <title>Registration</title>
</head>

<body>
    <table width="100%" height="100%">
        
        <!-- <tr height="60px">
            <header>
                <td>
                    <img src="" alt=""> <a href="../view/dashboardAdmin.php">Back</a>
                </td>
                <td align="right">
                    <!-- <a href="index.php">Home</a>|
                    <a href="login.php">Login</a> -->
                </td>
                </td>
            </header>
        </tr> -->


        <tr>
            <td colspan="2" height="2px">
                <hr>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <main>
                    <table width="700px" >
                        <tr>
                            <td>
                            <form name="registrationForm" method="post" action="" onsubmit=" validateForm()">
                                    <fieldset>
                                        <legend>
                                            Register New Employee
                                        </legend>

                                        <table width="100%">

                                            <tr>
                                                <td>Name</td>
                                                <td>:
                                                    <input type="text" id="name" name="name" value="">
                                                   
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <!-- <tr>
                                                <td>Email</td>
                                                <td>:
                                                    <input type="email" name="email" value=""><button title="hint: example@gmail.com">i</button>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr> -->

                                            <tr>
                                                <td>User Name</td>
                                                <td>:
                                                    <input type="text" id="username" name="username" value=""><button title="hint: abcde-/./_">i</button>
                                                   
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td>:
                                                    <input type="password" id="password" name="password" value="">
                                                
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Confirm Password</td>
                                                <td>:
                                                    <input type="password" id="confirmpassword" name="confirmPassword" value="">
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Phone No</td>
                                                <td>:
                                                    <input type="text" id="phonenumber" name="phoneNumber" value=""><button title="hint: 01*********">i</button>
                                                    
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <!-- <tr>
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>Gender</legend>
                                                        <input type="radio" name="gender" value="male">Male
                                                        <input type="radio" name="gender" value="female">Female
                                                        <span class="error"><?= $genderError ?></span>
                                                    </fieldset>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr> -->

                                            <!-- <tr>
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>User Type</legend>
                                                        <input type="radio" name="role" value="user">User
                                                        <input type="radio" name="role" value="host">Host
                                                        <input type="radio" name="role" value="Admin">Admin
                                                    </fieldset>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr> -->

                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Submit" name="submit">
                                                    <input type="reset" value="Reset">
                                                </td>
                                            </tr>

                                            
                                        </table>

                                        

                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </main>
            </td>
        </tr>

        <script>
        function validateForm() {
            var name = document.forms["registrationForm"]["name"].value;
            var username = document.forms["registrationForm"]["username"].value;
            var password = document.forms["registrationForm"]["password"].value;
            var confirmPassword = document.forms["registrationForm"]["confirmPassword"].value;
            var phoneNumber = document.forms["registrationForm"]["phoneNumber"].value;

            if (name == "") {
                alert("Name must be filled out");
                return false;
            }

            if (username == "") {
                alert("Username must be filled out");
                return false;
            }

            if (password == "") {
                alert("Password must be filled out");
                return false;
            }

            if (confirmPassword == "") {
                alert("Confirm Password must be filled out");
                return false;
            }

            if (phoneNumber == "") {
                alert("Phone Number must be filled out");
                return false;
            }

            return true;
        }
    </script>



        <tr height="60px">
            <td colspan="2">
                <hr>
                <footer align="center">
                    <!-- <a href="">About Us<br></a>
                    <a href="">Helpline<br></a>
                    <a href="">FAQ<br></a>
                    <a href="">Terms and Condition<br></a>
                    Copyright &copy; 2023 -->
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>