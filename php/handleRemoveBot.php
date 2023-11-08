<?php
if (isset($_GET['ID']) && !empty($_GET['ID'])) {

    $IDbot = $_GET['ID'];
    $db = new mysqli('localhost', 'root', '', 'pbl4_v2');
    if (mysqli_connect_errno())
        exit;
  //  $query = "DELETE FROM botes WHERE ID=?";

    $query = 'UPDATE bot
        SET Remove = 1
        WHERE Id=?';
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $IDbot);
    $stmt->execute();
    $db->close();
    //echo "bot deleted";
    header("Location: ../php/index.php");
}
?>