<?php 

    if(isset($_REQUEST['gender'])){
        $gender = $_REQUEST['gender'];
    }
?>


<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" action="Assessment4a.php" entype=""></form>
        <fieldset>
            <legend>Gender</legend>
                <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>
    
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>
    
                <input type="radio" name="gender" id="other" value="other">
                <label for="other">Other</label>
                <br>
                <br>
                <input type="submit">
        </fieldset>
</form>
</body>
</html>