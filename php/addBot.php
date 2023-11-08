<?php
$db = new mysqli('localhost', 'root', '', 'pbl4_v2');
if (mysqli_connect_errno()) {
    // kiểm tra xem có lỗi khi kết nối đến cơ sở dữ liệu hay không
    exit;
}
$ip = $_REQUEST["ip"];
$port = $_REQUEST["port"];

$check_exist_list_bot = 'SELECT * FROM bot where Ip="' . $ip . '" and Port=' . $port . ';';

$rs_check_exist_list_bot = $db->query($check_exist_list_bot);

if ($rs_check_exist_list_bot->num_rows > 0) {

    $query = '  UPDATE bot
                SET status = 1, remove = 0
                where Ip="' . $ip . '" and Port=' . $port . ';';
    $db->query($query);
} else {
    $query = "INSERT INTO bot(Ip, Port, Status, Remove ) VALUES(?,?, 1, 0)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ss', $ip, $port);
    $stmt->execute();
}
$db->close();
?>