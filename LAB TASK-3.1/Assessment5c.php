<?php 

    if(isset($_REQUEST['degree'])){
        $degree = $_REQUEST['degree'];
    }
?>

<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form  method="post" action="Assessment5a.php" entyoe="" ></form>
        <fieldset>
            <legend>Degree</legend>
                <input type="checkbox" name="degree" id="SSC">SSC
                <input type="checkbox" name="degree" id="HSC">HSC
                <input type="checkbox" name="degree" id="BSc">BSc
                <input type="checkbox" name="degree" id="MSc">MSc
                <br>
                <input type="submit">
        </fieldset>
    </form>
</body>
</html>