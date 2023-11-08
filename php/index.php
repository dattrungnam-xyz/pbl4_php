<?php 



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
        border: 4px solid green;
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
        margin-bottom: 50px;
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
        width: 70%;
      }
      .navigate {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        /* justify-content: center; */
        width: 100%;
        height: min-content;
        column-gap: 30px;
        row-gap: 30px !important;
        background: transparent;
        padding: 20px;
      }

      .navigate_btn {
        width: auto;
        min-width: 120px;
        height: 120px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        /* background: yellow;
        border: 1px solid red; */
      }
      .navigate_btn:hover {
        border: 1px dotted #00ff00;
      }
      .navigate_btn:hover .navigate_btn-name,
      .navigate_btn:hover .navigate_btn-icon
      {
        transform: all 0.5s ease;
        color: #62fa62;
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
        margin-bottom: 4px;
        text-shadow: -1px 0px 0px #000, 1px 0px 0px #000, 0px 1px 0px #000,
          0px -1px 0px #000;
        color: #00ff00;
      }
      /* form {
        display: flex;
        flex-direction: row;
        margin: 0;
        padding: 0;
      } */
    </style>
  </head>

  <body>
    <div class="container">
      <div class="navigate">
        <a href="listBot.php" class="navigate_btn">
          <i
            class="fa-solid fa-laptop fa-5x navigate_btn-icon"
            style=" text-shadow: none"
          ></i>
          <p class="navigate_btn-name">List Bot</p>
        </a>
        <a href="listBot.php?status=Active" class="navigate_btn">
          <i
            class="fa-solid fa-laptop fa-5x navigate_btn-icon"
            style=" text-shadow: none"
          ></i>
          <p class="navigate_btn-name">Bot Active</p>
        </a>
        <a href="listBot.php?status=Passive" class="navigate_btn">
          <i
            class="fa-solid fa-laptop fa-5x navigate_btn-icon"
            style=" text-shadow: none"
          ></i>
          <p class="navigate_btn-name">Bot Passive</p>
        </a>
      </div>
    </div>
  </body>
</html>
';
?>