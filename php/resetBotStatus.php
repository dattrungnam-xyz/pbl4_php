<?php

    $db = new mysqli('localhost', 'root', '', 'pbl4_v2');
    if (mysqli_connect_errno()) exit;
    $sql = "UPDATE bot
            SET Status = 0";
    $rs = mysqli_query($db, $sql);

?>
