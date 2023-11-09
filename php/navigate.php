<?php 
echo '<style>
      
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
</style>';
echo ' <div class="navigate">
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
        <a href="openBot.php" class="navigate_btn">
          <i
            class="fa-solid fa-laptop fa-5x navigate_btn-icon"
            style=" text-shadow: none"
          ></i>
          <p class="navigate_btn-name">Control All </p>
        </a>
      </div>';

?>