<?php 

    if(isset($_REQUEST['d'])){
        $Date = $_REQUEST['d'];
    }
    if(isset($_REQUEST['d'])){
        $Month = $_REQUEST['m'];
    }
    if(isset($_REQUEST['d'])){
        $Year = $_REQUEST['y'];
    }
?>


<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" action="Assessment3a.php" enctype="">
        <fieldset>
            <legend>Date of Birth</legend>
              dd      mm       yyyy
            <br>
            <input type="text" size="1" name="d" value="<?php if(isset($Date)){echo $Date;}?>"> / <input type="text" size="1" name="m" value="<?php if(isset($Month)){echo $Month;}?>> /<input type="text" size="1" name="y" value="<?php if(isset($Year)){echo $Year;}?>> 
            <hr>
            <input type="submit">
        </fieldset>
    </form>
    
</body>
</html>