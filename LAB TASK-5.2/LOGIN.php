<?php 
    //session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password!";
    }else if($username == $password){
        //echo "valid user!";
        //$_SESSION['flag'] = "true";
        setcookie('flag', 'true', time()+3000, '/');
        header('location: LOGGED_IN_DASHBOARD.php');
    }else{
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
            <form method="post" action="LOGIN.php" enctype=""> 
                <fieldset>
                    <legend>LOGIN</legend>
                User Name: <input type="text" name="username" value="" /> <br>
                Password: <input type="password" name="password" value="" /> <br>
                <hr>
                <input type="checkbox" name="" value="" /> Remember Me<br>
                <input type="submit" name="" value="Submit" /><a href="FORGOT_PASSWORD.php">Forgot Password</a>
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