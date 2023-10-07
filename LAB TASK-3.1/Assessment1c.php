<?php 

    if(isset($_REQUEST['name'])){
        $name = $_REQUEST['name'];
    }
?>


<html lang="en">
<head>
    <title></title>
</head>
<body>
        <form method="post" action="#" enctype="">
            
            name: <input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>" /> <br>
            <input type="submit" name="submit" value="Submit" />

        </form>
</body>
</html>