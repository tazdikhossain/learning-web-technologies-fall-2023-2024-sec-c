<?php



    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password!";   
    }else{
        
        $status = login($username, $password);
        
        if($status)
        {   
            

            $row=userrole($username);

            if($row['role']=="user")
            {
                $_SESSION['user']=true;
                header('location: ../view/adminViewUsers.php');

            }
            elseif($row['role']=="admin")
            {
                $_SESSION['admin']=true;
                header('location: ../view/adminViewUsers.php');
            }
            elseif($row['role']=="host")
            {
                $_SESSION['host']=true;
                header('location: ../view/adminViewUsers.php');
            }
            //header('location: ../view/dashboardGeneralUser.php');
            
            }
            else{
            echo "invaid user!";
            
            
        }
    } 


    


    //$row = mysql_fetch_array($_result);

    /*if($_row["usertype"]=="user"|| "")
    {
        header("location: view/dashboardGeneralUser.php");
    }
    elseif($_row["usertype"]=="admin")
    {
        header("location: view/dashboardAdmin.php");
    }
    elseif($_row["usertype"]=="host")
    {
        header("location: view/dashboardHost.php");
    }*/
    

?>

