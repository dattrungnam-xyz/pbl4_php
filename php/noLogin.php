<?php echo '
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
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 100%;
            min-height: 90%;
            padding: 30px;
        }

        .content_form {
            width: 30%;
            height: 100%;
            justify-self: flex-start;
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

        .link_detail {
            color: #00ff00;
            text-decoration: underline;
        }

        .content_element {
            width: 100%;
            margin-bottom: 12px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* align-items: center; */
        }

        .content_element-label {
            font-size: 16px;
            min-width: 120px;
            margin-bottom: 8px;
            margin-left: 4px;
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

        .password_error,
        .username_error {
            font-size: 12px;
        }

        .form_button {
            margin-top: 4px;
            background: transparent;
            color: #00ff00;
            outline: none;
            border: 1px solid #00ff00;
            padding: 2px 6px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;

        }

        .form_button:hover {
            background: #00ff00;
            ;
            color: black;
            transition-delay: 0.1s;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="inputCommand">
            <div class="header">
                <ul class="ul_header">
                    <li class="li_header label_header">
                        <label for="">' . $header_display . '</label>
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
                <div style="font-size:20px;">You must be logged in to the server <br>
                    Click <a style="text-decoration:underline; font-weight:bold; color:#00ff00;
                      font-size:20px;
                      
                      " href="login.php">here</a> to login
                </div>
            </div>
        </div>
        ';
        include_once("navigate.php");

        echo '
    </div>
</body>

';
?>