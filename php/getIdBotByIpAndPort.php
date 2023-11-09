<?php
if (isset($_REQUEST["ip"]) && isset($_REQUEST["port"])) {
    $db = new mysqli('localhost', 'root', '', 'pbl4_v2');
    if (mysqli_connect_errno()) exit;

    $ip = $_REQUEST["ip"];
    $port = $_REQUEST["port"];
    $sql = "select * from bot where Ip = " . $ip . " and Port=" . $port ;
    $rs = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_array($rs)) {
        echo $row['Id'];
    }
}
