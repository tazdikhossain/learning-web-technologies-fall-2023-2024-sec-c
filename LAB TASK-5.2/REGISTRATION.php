<?php 
    session_start();
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($name==""||$email==""|| $username == "" || $password == "")
    {
        echo "null name/email/username/password!";
    }
    else if($name == $username && $password==$username)
    {
        //echo "valid user!";
        $_SESSION['flag'] = "true";
        header('location: LOGIN.php');
    }
    else
    {
        echo "invaid user!";
    }
?>

<html lang="en">
<head>
    <title>PUBLIC HOME</title>
</head>
<body>
    <table border="1" align="center" width="100%">
        <tr>
            <td colspan="3"><h1 align="left" width="">xCompany</h1> <p align="right"><a  href="PUBLIC HOME.html">Home</a>|<a href="LOGIN.php">Login</a>|<a href="REGISTRATION.php">Registration</a></p></td>
        <tr rowspan="10">
            <td>
            <form method="post" action="REGISTRATION.php" enctype=""> 
                <fieldset>
                    <legend>REGISTRATION</legend>
                Name: <input type="text" name="name" value="" /> <br>
                Email: <input type="email" name="email" value="" /> <br>
                User Name: <input type="text" name="username" value="" /> <br>
                Password: <input type="password" name="password" value="" /> <br>
                Gender: 
                <input type="radio" name="gender" value="" /> Male
                <input type="radio" name="gender" value="" /> female
                <input type="radio" name="gender" value="" /> other <br>
                dob: <input type="date" name="" value="" /> <br>
                <input type="submit" name="" value="Submit" />
                <input type="reset" name="" value="Reset" />
                </fieldset>
            </form>
            </td>
        </tr>
        <tr>
            <td colspan="3"><h6 align="center" width="100%">Copyright</h6></td>
        </tr>
            
        
    </table>
</body>
</html>