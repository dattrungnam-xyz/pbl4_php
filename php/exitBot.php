<?php
$db = new mysqli('localhost', 'root', '', 'pbl4_v2');
if (mysqli_connect_errno()) exit;
if (isset($_REQUEST['ID'])) {
    $id = $_REQUEST['ID'];
    $db = new mysqli('localhost', 'root', '', 'pbl4_v2');
    if (mysqli_connect_errno()) exit;
    $sql = "Select * from bot where Id = " . $id;
    $result = mysqli_query($db, $sql);
    $sqlUpdate = "UPDATE bot SET Status = 0 WHERE Id = " . $id;
    mysqli_query($db, $sqlUpdate);
    while ($row = mysqli_fetch_array($result)) {
        $ip = $row['Ip'];
        $port = $row['Port'];
    }
    $fp = fopen('botActive.txt', 'w');
    fwrite($fp, $ID);
    fwrite($fp, '&');
    fwrite($fp, $ip);
    fwrite($fp, '&');
    fwrite($fp, $port);
 
    fclose($fp);
    $fp = fopen('commandBot.txt', 'w');
    fwrite($fp, "exit");
    fwrite($fp, '&');
    fwrite($fp, "stop");
    fclose($fp);
}
header("Location: ../php/listBot.php?status=Active");
