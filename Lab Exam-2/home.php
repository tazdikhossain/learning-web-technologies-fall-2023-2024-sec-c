
<?php 

// require_once('../model/userModel.php');
// $users = getAllUser();
?>

<html lang="en">

<head>
    <title>Dashboard</title>
    
</head>

<body>
    <table border="1" width="100%" height="100%" cellspacing="0" cellpadding="0">
        <tr height="40px">
            <td colspan="2">
                <header>
                    <table width="100%">
                        <tr>
                            <td>
                                <img src="" alt="">
                            </td>
                            <td align="right">
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
                            <h4>home page</h4>
                            <hr width="200px">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </td>
            <td>
                <table width="100%" border="1">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>Password</th>
                        <th>PhoneNo</th>
                        <th>Gender</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>

                    <!-- <?php for($i=0; $i<count($users); $i++){ ?> -->
                        <tr>
                            <td><?=$users[$i]['id']?></td>
                            <td><?=$users[$i]['username']?></td>
                            <td><?=$users[$i]['email']?></td>
                            <td><?=$users[$i]['password']?></td>
                            <td><?=$users[$i]['phoneNumber']?></td>
                            <td><?=$users[$i]['gender']?></td>
                            <td><?=$users[$i]['role']?></td>
            
                            <td>
                                <a href="AdminEditUser.php?id=<?=$users[$i]['id']?>">EDIT</a> 
                            </td>
                            <td>
                                <a href="AdminUserDelete.php?id=<?= $users[$i]['id'] ?>"> DELETE </a>
                            </td>
                        </tr>
                    <!-- <?php } ?> -->
                </table> 
            </td>
        </tr>

        <tr height="40px">
            <td colspan="2" align="center">
            </td>
        </tr>
    </table>
</body>

</html>

