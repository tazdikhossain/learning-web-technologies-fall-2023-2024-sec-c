<?php 

?>

<html lang="en">

<head>
    <title>Dashboard</title>
</head>

<body>
    <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="1">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td align="right">
                                Logged in
                            </td>
                        </tr>
                    </table>
                </header>
            </td>





        </tr>
        <tr>
            <td width="220px">
                <table height="100%" width="100%" border="0" cellspacing="0">
                    <tr>
                        <td height="200px">
                            <h4>Admin Account</h4>
                            <hr width="200px">
                            <ul>
                                <li><a href="dashboardAdmin.php">Dashboard</a></li>
                                <li><a href="AdminProfile.php"> Profile</a></li>
                                <li><a href="AdminEdit.php">Edit Profile</a></li>
                                <li><a href="AdminPicture.php">Change Profile Picture</a></li>
                                <li><a href="AdminChangePassword.php">Change Password</a></li>
                                <li><a href="AdminViewUsers.php">Manage User </a></li>
                                <li><a href="AdminDeleteUser.php">Delete Profile</a></li> 
                                <li><a href="HostSalary.php">Salary Sheet</a></li>
                                <li><a href="">Recent CV's</a></li>
                                <li><a href="">Manage Host</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>


                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            </td>
            <td>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>NAME</td>
                    <td>EMAIL</td>
                    <td>Password</td>
                    <td>PhoneNo</td>
                    <td>Gender</td>
                    <td>Role</td>
                    <td>Action</td>
                </tr>

                <?php for($i=0; $i<count($users); $i++){ ?>
                        <tr>
                            <td><?=$users[$i]['id']?></td>
                            <td><?=$users[$i]['username']?></td>
                            <td><?=$users[$i]['email']?></td>
                            <td><?=$users[$i]['password']?></td>
                            <td><?=$users[$i]['phoneNumber']?></td>
                            <td><?=$users[$i]['gender']?></td>
                            <td><?=$users[$i]['role']?></td>
            
                            <td>
                                <a href="AdminEditUser.php?id=<?=$users[$i]['id']?>"> EDIT </a> 
                            </td>

                        </tr>

                <?php } ?>
            </table> 

            </td>

        </tr>

        <tr height="40px">
            <td colspan="2" align="center">

                <footer>
                    <a href="">About Us<br></a>
                    <a href="">Helpline<br></a>
                    <a href="">FAQ<br></a>
                    <a href="">Terms and Condition<br></a>
                    Copyright &copy; 2023
                </footer>
            </td>
        </tr>
    </table>

</body>
