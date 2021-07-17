<?php
    $db = mysqli_connect($HOST, $USER, $PASS, $DATABASE);
    if ($db->connect_errno) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>