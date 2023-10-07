<?php 

    if(isset($_REQUEST['email'])){
        $email = $_REQUEST['email'];
    }
?>


<html lang="en">
<head>
    <title></title>
</head>
<body>
        <form method="post" action="#" enctype="">
            
            email: <input type="text" name="email" value="<?php if(isset($email)){echo $email;}?>" /> <br>
            <input type="submit" name="submit" value="Submit" />

        </form>
</body>
</html>