<?php
   $name = $_REQUEST['name'];
   echo $name;
?>

<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="post" action="Assessment1a.php" enctype="" >
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="name"></input> <br>
            <hr>
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>