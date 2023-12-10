<?php

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password!";   
    }else{
        
        $status = login($username, $password);
        
        if($status)
        {   
            header('location: home.php');
            
        }
            else
            {
            echo "invaid user!";    
        }
    } 


?>

<html lang="en">

<head>
    <title>Login</title>
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
                    <a href="registration.php">Registration</a>
                </td>
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
                    <table width="700px" >
                        <tr>
                            <td>
                                <form action="" method="post" enctype="">
                                    <fieldset>

                                        <legend>
                                            Login
                                        </legend>

                                        <table width="100%">

                                            <tr>
                                                <td>User Name</td>
                                                <td>:
                                                    <input type="text" name="username" value="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td>:
                                                    <input type="password" name="password" value="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <hr>
                                                </td>
                                            </tr>

                                            <tr>

                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" value="Submit">
                                                    <a href="../view/forgotPassword.php">Forgot Password?</a>
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


        <tr height="60px">
            <td colspan="2">
                <hr>

            </td>
        </tr>


    </table>

</body>

</html>