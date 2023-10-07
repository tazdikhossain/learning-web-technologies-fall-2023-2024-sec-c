<?php
   $email = $_REQUEST['email'];
   echo $email;
?>

<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" action="Assessment1a.php" enctype="" >
        <fieldset>
            <legend>EMAIL</legend>
            <input type="text" name="email"></input> <br>
            <hr>
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>