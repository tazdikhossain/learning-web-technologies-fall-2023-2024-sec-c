<?php
    $Blood_Group = '';
    if(isset($_REQUEST['Blood_Group'])){
        $Blood_Group = $_POST['Blood_Group'];
        echo "{$Blood_Group}";
    }
?>

<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form  method="post" action="Assessment6a.php" entype="" >
        <fieldset>
            <legend>Blood Group</legend>
                <select id="Blood_Group">
                    <option value="option1">B+</option>
                    <option value="option2" selected>A+</option>
                    <option value="option3">O+</option>
                    <option value="option3">AB+</option>
                </select>
                <hr>
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>