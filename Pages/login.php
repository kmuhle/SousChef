<?php

$invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/db.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["email"] = $_POST["email"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../indexTwoStyle.css"/>
    <style>
      .introBreak
      {
        width: 30%;
        margin-left: -.5%;
        border: 4px solid #c6a559;
        opacity: .8;
      }

      .number{
          padding-left:.9em;
          padding-right:.9em;
          padding-top:.45em;
          padding-bottom:.45em;
          border-radius: 50%;
          font-size: .9em;
          border: 0px solid #000;
          background-color: #c6a559;
          font-family: copyright Klim Type Foundry;
          font-weight: bold;
      }

      .title{
          font-size: 1.5em;
          font-family: copyright Klim Type Foundry;
          font-weight: bold;
      }

      .selectize-input{
        border: 2px solid black !important;
        background: #fffef7 !important;
        width: 20%;
        position: relative;
        z-index: 1;
        box-shadow:inset 0px;
        border-radius: 0% !important;
        box-shadow: inset 0px !important;
        font-family: GT eesti display trial !important;
        text-decoration: none !important;
        color: black !important;
        padding: 1.5em;
    }

    input{
        display: block;
        border: 2px solid black !important;
        background: #fffef7 !important;
        width: 20%;
        box-shadow:inset 0px;
        border-radius: 0% !important;
        font-family: GT eesti display trial !important;
        color: black !important;
        padding: 1.5em;
        margin-top: 2%;
    }

    input::placeholder {
        color: #7a7a7a;
        font-size: 1.1em;
        opacity: .8;
        width: 100%;
        border-bottom: 5px solid #f8f1e0;
    }

    .submitButton{
        font-family: GT eesti display trial;
        font-size: 1em;
        padding: 1% !important;
        border: 1px #c6a559 solid !important;
        color: #fffef7;
        background: #c6a559;
        width: 10%;
        border-radius: 0px !important;
        text-transform: uppercase;
        margin-top: 1% !important;
    }
  </style>

</head>
  <body>
<header>
      <!-- Navbar -->
      <div class="navContainer">
          <a href="../index.html"><img src="./images/logo.png" class= "logo" 
          style="margin-left: 10%; width:10%; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));"></a>
          
          <div style="margin-left: 23%; margin-top: 6%; display: inline-block;">
              <a href="signup.html" class="navButton"><b>JOIN NOW</b></a>
              <a href="login.php" class="navButton"><b>LOG IN</b></a>
              <a href="../index.html" class="navButton"><b>VIEW OUR PLANS</b></a>
              <a href="../index.html" class="navButton"><b>ABOUT US</b></a>

          <a href="login.php"><img src="./images/myAccount.png" class= "logo" 
            style="margin-top: -0.8%; margin-left: 5%; height:5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>
          <a href="signup.html"><img src="./images/searchIngredients.png" class= "logo" 
            style="margin-top: -0.75%; margin-left: 15%; height:5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
        </div>
        
      </div>
    </header>

  <div style="margin-top: 10%; background-color: #f7f5e4; padding: 5%; width: 110%;">
    <div style="margin-left: 14.6% !important; width: 55%;">
      <span style="font-family: copyright Klim Type Foundry; margin-bottom:.5%; font-size: 3em;">
      <b>Welcome Back to</b></span>
      <span style="font-family:Britannic Bold; font-size: 3em;">&nbsp;SOUS-CHEF</span><br><br>
      <span style="font-family: copyright Klim Type Foundry;  font-size: 1.5em;">
      Your best culinary partner that serves up endless recipe ideas.</span><br><br>
      <hr class="introBreak"><br>        
    </div>

        <?php
            if ($invalid): 
        ?>
            <em style = "margin-left: 15%; font-size: 1.1em !important; color: red;">Your username or password is incorrect.</em>
        <?php
            endif;
        ?>
          <div style="margin-left: 15%; margin-top: 1%;">
            <form method="post">
                <label for="email"><span class="number">1</span>  
                  <span class="title"> &nbsp;Your Email: </span></label>
                  <input type="email" name="email" id="email"
                      value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"><br><br>

                  <label for="password"><span class="number">2</span>  
                    <span class="title"> &nbsp; Your Password: </span></label>
                    <input type="password" name="password" id="password"><br>
                
                <button class="submitButton">LOG IN</button>
            </form>
          </div>
      </div>

      </body>
      
    <div class="footer" style="z-index:0; background-color: #fffef7;">
      <div class="bottomFooter">
        <img src="./images/logo.png" class="footerLogo"
        style="width:10em; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));">
    </div>
      <div class="mainFooter" style="margin-top: -3%;">
          <div style="margin-top: 6%; display: inline-block; margin-left: 15%;">
            <a href="./signup.html" class="navButton"><b>JOIN NOW</b></a>
            <a href="./login.php" class="navButton"><b>LOG IN</b></a>
            <a href="../index.html#plans" class="navButton"><b>VIEW PLANS</b></a>
            <a href="../index.html#aboutUs" class="navButton"><b>ABOUT US</b></a>
         </div>
      </div> <br>
      <div class="bottomFooter">
        <div class="footerCol">
          <div class="footer-icons">
              <img src="./images/fbLogo.png"
              style="width:2.5em; opacity: 0.9;">
              <img src="./images/igLogo.png" 
              style="width:2.5em; opacity: 0.9;">
              <img src="./images/pinterestLogo.png" 
              style="width:2.5em; opacity: 0.9;">
              <img src="./images/twitterLogo.png" 
              style="width:2.5em; opacity: 0.9;">
          </div>
        </div>
      </div>

      <div class="bottomFooter copyright">
          <h4 style="text-align: center; font-family: GT eesti display trial; font-size: .6em;">
            COPYRIGHT 2023 - SOUS-CHEF LLC. <br>
            ALL RIGHTS RESERVED.</h4>
      </div>
  </div>
  </body>
</html>