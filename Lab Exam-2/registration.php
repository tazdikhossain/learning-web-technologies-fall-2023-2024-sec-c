<?php
$isValidUsername = true;
$isValidPassword = true;

$nameError = "";
$usernameError = "";
$passwordError = "";
$confirmPasswordError = "";
$emailError = "";
$phoneNumberError = "";
$genderError = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

    // Name validation
    if (empty($name)) {
        $nameError = "Please enter your name";
    } else {
        $nameLen = explode(' ', $name);
        if (count($nameLen) < 2) {
            $nameError = 'Can not be less than 2 words';
        }

        foreach (str_split($name) as $char) {
            if (!checkChar($char)) {
                $nameError = 'Name can only contain letters, dots, or spaces.';
                break;
            }
        }
    }

    // Username validation
    if (empty($username) || strlen($username) < 2) {
        $usernameError = "Username must contain at least two characters";
    } else {
        foreach (str_split($username) as $char) {
            if (!checkChar($char)) {
                $usernameError = 'Username can only contain letters, numbers, dots, or spaces.';
                break;
            }
        }

        if (count(explode(' ', $username)) > 1) {
            $usernameError = 'Username cannot contain more than one word.';
        } elseif (strlen($username) > 15) {
            $usernameError = 'Username cannot exceed 15 characters.';
        }
    }

    // Password validation
    if (empty($password) || strlen($password) < 5) {
        $passwordError = "Password must not be less than five characters";
    } else {
        $hasSpecialChar = false;

        foreach (str_split($password) as $char) {
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
    if (empty($gender)) {
        $genderError = "Please select your gender";
    }

    // All validations pass, insert user data into the database
    if ($isValidUsername && $isValidPassword && empty($nameError) && empty($usernameError) && empty($passwordError) && empty($confirmPasswordError) && empty($emailError) && empty($phoneNumberError) && empty($genderError)) {
        $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
        $sql = "INSERT INTO users (username, password, email, role, phoneNumber, gender) VALUES ('{$username}', '{$password}', '{$email}', 'user', '{$phoneNumber}', '{$gender}')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header('location:login.php');
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}

function checkChar($char) {
    return (ctype_alpha($char) || $char == '.' || $char == ' ');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <table width="100%" height="100%">
        <tr height="60px">
            <header>
                <td>
                    <img src="" alt=""> <a href="index.php">Back</a>
                </td>
                <td align="right">
                    <a href="index.php">Home</a>|
                    <a href="login.php">Login</a>
                </td>
            </header>
        </tr>

        <tr>
            <td colspan="2" height="2px">
                <hr>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <main>
                    <table width="700px">
                        <tr>
                            <td>
                                <form method="post" action="" onsubmit="return validateForm()">
                                    <fieldset>
                                        <legend>
                                            Registration
                                        </legend>

                                        <table width="100%">
                                            <tr>
                                                <td>Name</td>
                                                <td>:
                                                    <input type="text" name="name" id="name" onkeyup="checkFullName()" value="">
                                                    <span class="error" id="nameError"><?php echo $nameError; ?></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td>:
                                                    <input type="email" name="email" id="email" onkeyup="checkMail()" value="">
                                                    <span class="error" id="emailError"><?php echo $emailError; ?></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>User Name</td>
                                                <td>:
                                                    <input type="text" name="username" id="username" onkeyup="checkUserName()" value="">
                                                    <span class="error" id="usernameError"><?php echo $usernameError; ?></span>
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
                                                    <input type="password" name="password" id="password" onkeyup="checkPassword()" value="">
                                                    <span class="error" id="passwordError"><?php echo $passwordError; ?></span>
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
                                                    <input type="password" name="confirmPassword" id="confirmPassword" onkeyup="checkRepassword()" value="">
                                                    <span class="error" id="confirmPasswordError"><?php echo $confirmPasswordError; ?></span>
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
                                                    <input type="text" name="phoneNumber" id="phoneNumber" onkeyup="checkPhone()" value="">
                                                    <span class="error" id="phoneNumberError"><?php echo $phoneNumberError; ?></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <fieldset>
                                                        <legend>Gender</legend>
                                                        <input type="radio" name="gender" value="male" onclick="checkFormValidity()">Male
                                                        <input type="radio" name="gender" value="female" onclick="checkFormValidity()">Female
                                                        <span class="error" id="genderError"><?php echo $genderError; ?></span>
                                                    </fieldset>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Submit" name="submit" id="submitButton" disabled>
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
    </table>

    <script>
        function validateForm() {
            // Your existing validateForm function logic
        }

        function checkFormValidity() {
            let fullname = document.getElementById('name').value;
            let username = document.getElementById('username').value;
            let phone = document.getElementById('phoneNumber').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            let repassword = document.getElementById('confirmPassword').value;

            let fnameError = document.getElementById('nameError').innerText;
            let usernameError = document.getElementById('usernameError').innerText;
            let phoneError = document.getElementById('phoneNumberError').innerText;
            let mailError = document.getElementById('emailError').innerText;
            let passwordError = document.getElementById('passwordError').innerText;
            let repasswordError = document.getElementById('confirmPasswordError').innerText;

            let submitButton = document.getElementById('submitButton');

            if (
                fullname === '' ||
                username === '' ||
                phone === '' ||
                email === '' ||
                password === '' ||
                repassword === '' ||
                fnameError !== '' ||
                usernameError !== '' ||
                phoneError !== '' ||
                mailError !== '' ||
                passwordError !== '' ||
                repasswordError !== '' ||
                password !== repassword
            ) {
                submitButton.disabled = true;
            } else {
                submitButton.disabled = false;
            }
        }

        function checkFullName() {
            let name = document.getElementById('name').value;
            let nameLen = name.split(' ');

            if (nameLen.length < 2) {
                document.getElementById('nameError').innerHTML = 'Can not be less than 2 words';
            } else {
                document.getElementById('nameError').innerHTML = '';
            }

            for (let i = 0; i < name.length; i++) {
                if (!checkChar(name[i])) {
                    document.getElementById('nameError').innerHTML = 'Name can only contain letters, dots, or spaces.';
                    break;
                }
            }
            checkFormValidity();
        }

        function checkChar(ch) {
            return (ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z') || ch === '.' || ch === ' ' || !isNaN(ch);
        }

        function checkUserName() {
            let username = document.getElementById('username').value;

            if (username === '') {
                document.getElementById('usernameError').innerHTML = 'Username cannot be empty.';
            } else {
                for (let i = 0; i < username.length; i++) {
                    if (!checkChar(username[i])) {
                        document.getElementById('usernameError').innerHTML = 'Username can only contain letters, numbers, dots, or spaces.';
                        break;
                    }
                }

                if (username.split(' ').length > 1) {
                    document.getElementById('usernameError').innerHTML = 'Username cannot contain more than one word.';
                } else if (username.length > 15) {
                    document.getElementById('usernameError').innerHTML = 'Username cannot exceed 15 characters.';
                } else {
                    document.getElementById('usernameError').innerHTML = '';
                }
            }
            checkFormValidity();
        }

        function checkPhone() {
            let phone = document.getElementById('phoneNumber').value;

            if (phone === '') {
                document.getElementById('phoneNumberError').innerHTML = 'Phone number cannot be empty.';
            } else {
                for (let i = 0; i < phone.length; i++) {
                    if (!Number.isInteger(parseInt(phone[i]))) {
                        document.getElementById('phoneNumberError').innerHTML = 'Phone number can only contain numbers.';
                        break;
                    }
                }

                if (phone.length !== 11) {
                    document.getElementById('phoneNumberError').innerHTML = 'Phone number must be 11 characters long.';
                } else {
                    document.getElementById('phoneNumberError').innerHTML = '';
                }
            }
            checkFormValidity();
        }

        function checkPassword() {
            let password = document.getElementById('password').value;

            if (password === '') {
                document.getElementById('passwordError').innerHTML = 'Password cannot be empty.';
            } else if (password.length < 8) {
                document.getElementById('passwordError').innerHTML = 'Password must be at least 8 characters long.';
            } else {
                document.getElementById('passwordError').innerHTML = '';
            }
            checkFormValidity();
        }

        function checkRepassword() {
            let password = document.getElementById('password').value;
            let repassword = document.getElementById('confirmPassword').value;

            if (repassword !== password) {
                document.getElementById('confirmPasswordError').innerHTML = 'Passwords do not match.';
            } else {
                document.getElementById('confirmPasswordError').innerHTML = '';
            }
            checkFormValidity();
        }

        function checkMail() {
            let mail = document.getElementById('email').value;
            let atPos = mail.indexOf('@');
            let dotPos = mail.lastIndexOf('.');

            if (!mail) {
                document.getElementById('emailError').innerHTML = 'Email cannot be empty.';
            } else if (atPos === -1 || atPos === 0 || dotPos === -1 || dotPos <= atPos + 1 || dotPos === mail.length - 1) {
                document.getElementById('emailError').innerHTML = 'Invalid email address.';
            } else {
                document.getElementById('emailError').innerHTML = '';
            }
            checkFormValidity();
        }
    </script>
</body>

</html>
