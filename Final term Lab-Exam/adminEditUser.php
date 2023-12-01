<?php

?>


<html>

<head>
    <title>Edit Profile</title>
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
                                Logged in as
                                <a href="index.php"></a>|
                                
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
                <form name="editProfileForm" method="post" action="AdminEditCheck.php" enctype="" onsubmit="return validateForm()">
                    <fieldset>
                        <legend>
                            <b>Edit Profile</b>
                        </legend>
                        <table width="100%">
            
                            <tr>
                                <td>Name</td>
                                <td>:<input type="name" id="name" name="username" value="<?=$user['username']  ?>" />
                                </td>

                            </tr>


                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:<input type="email" id="email" name="email" value="<?=$user['email']  ?>" />
                                    
                                </td>

                            </tr>


                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:<input type="text" id="gender" name="gender" value="<?=$user['gender']  ?>" />
                                    
                                    
                                </td>

                            </tr>
                    

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>:<input type="text" id="phoneNumber" name="phoneNumber" value="<?=$user['phoneNumber']  ?>" />
                                
                                    
                                </td>


                            </tr>



                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <input type="submit" value="submit" name="submit" />

                                </td>
                                <td>

                            </tr>



                        </table>
                    </fieldset>
                </form>
            </td>

        </tr>

                        <script>
                        function validateForm() {
                            var username = document.forms["editProfileForm"]["username"].value;
                            var email = document.forms["editProfileForm"]["email"].value;
                            var gender = document.forms["editProfileForm"]["gender"].value;
                            var phoneNumber = document.forms["editProfileForm"]["phoneNumber"].value;

                            if (username == "") {
                                alert("Name must be filled out");
                                return false;
                            }

                            if (email == "") {
                                alert("Email must be filled out");
                                return false;
                            }

                            if (gender == "") {
                                alert("Gender must be filled out");
                                return false;
                            }

                            if (phoneNumber == "") {
                                alert("Phone Number must be filled out");
                                return false;
                            }

                            return true;
                        }
                    </script>

        <tr height="40px">
            <td colspan="2" align="center">

                <footer>
                    Copyright &copy; 2017
                </footer>
            </td>
        </tr>
    </table>

</body>

</html>
