<?php

    $db = new mysqli('localhost', 'root', '', 'pbl4_v2');
    if (mysqli_connect_errno()) exit;
    if(isset($_GET['ID']))
    {
        $sql = "UPDATE bot
                SET Status = 0
                Where Id = ".$_GET['ID']
                ;
        $rs = mysqli_query($db, $sql);
    }
    else
    {

        $sql = "UPDATE bot
                SET Status = 0";
        $rs = mysqli_query($db, $sql);
    }

?>
