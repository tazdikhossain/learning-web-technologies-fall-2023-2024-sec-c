<?php
require_once('searchmodel.php');


    $name = $_POST['name'];
    $result = searchContent($name);

    $searchResults = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $searchResults[] = $row;
    }

    echo json_encode($searchResults);

?>


