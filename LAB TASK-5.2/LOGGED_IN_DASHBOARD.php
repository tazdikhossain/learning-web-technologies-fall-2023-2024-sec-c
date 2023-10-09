<?php 
    session_start();
    if(!isset($_SESSION['flag'])){
        header('location: login.html');
    }

?>


<html lang="en">
<head>
    <title>PUBLIC HOME</title>
</head>
<body>
    <table border="1" align="center" width="100%">
        <tr>
            <td colspan="3"><h1 align="left" width="">xCompany</h1> <p align="right">Logged in as Bob|<a href="Bob">bob</a>|<a href="Logout">Logout</a></p></td>
        <tr rowspan="10">
            <td>
                <h3>Account</h3>
                <hr>
                <ul>
                    <li>
                        <h3><a href="LOGGED_IN_DASHBOARD.php">Dashboard</a></h3>
                        <h3><a href="VIEW_PROFILE.php">View Profile</a></h3>
                        <h3><a href="EDIT_PROFILE.php">Edit Profile</a></h3>
                        <h3><a href="PROFILE_PICTURE.php">Change Profile Picture</a></h3>
                        <h3><a href="CHANGE_PASSWORD">Change Password</a></h3>
                        <h3><a href="LOGOUT.php">Logout</a></h3>
                    </li>
                </ul>
            </td>
            <td><h2>Welcome Bob</h2></td>
        </tr>
        <tr>
            <td colspan="3"><h6 align="center" width="100%">Copyright</h6></td>
        </tr>
            
        
    </table>
</body>
</html>