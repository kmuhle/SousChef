<?php

session_start();

$user_id;

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
} else {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Account</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../template.css">
    
    <style>
      .lineThrough{
        width: 33%;
        border: 1px solid black;
        z-index: -1;
        margin-top: .5%;
        margin-bottom: -10%;
        margin-left: 0%;
        opacity: .6 !important;
      }

      .lineThroughRight{
        width: 33%;
        border: 1px solid black;
        z-index: -1;
        margin-top: 10%;
        margin-bottom: 5%;
        margin-left: 66%;
        opacity: .6 !important;
      }

      .username{
        font-size: 1.8em;
        text-align: center;
        line-height: 0em;
      }

      p{
        font-size: 0.7em;
        font-family: GT eesti display trial !important;
        text-align: center;
        margin-top: 2%;
        margin-bottom: 10%;
        color: #c6a559;
        text-transform: uppercase;
      }

      #cancel_plan{
        font-family: GT eesti display trial !important;
        padding: 1.5%;
        cursor: pointer;
        margin: 3%;
        margin-left: 5%;
        margin-bottom: -1%;
        background-color: #c6a559;
        color: #fffef7;
        border: 0px black;
        font-size: .6em;
        text-transform: uppercase;
      }

      .cancelNow{
        font-family: GT eesti display trial !important;
        padding: 1.5% !important;
        cursor: pointer !important;
        margin: 3% !important;
        margin-left: 5% !important;
        margin-bottom: -1% !important;
        background-color: #f7f5e4 !important;
        color: #c6a559 !important;
        border: 2px solid  #c6a559 !important;
      }
    </style>

</head>

<body>
    <header>
        <!-- Navbar -->
        <div class="navContainer">
            <a href="index.php"><img src="../images/logo.png" class= "logo" 
            style="margin-left: 10%; width:10%; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));"></a>
            
            <div style="margin-top: 6%; display: inline-block; width: 100%; margin-left: -1%;">
               
              <a href="./account.php"><img src="../images/myAccount.png" class= "logo" 
                style="margin-top: -0.8%; margin-left: 25%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>    
              <a href="RecipeBook.php"><img src="../images/favoritesIcon.png" class= "logo" 
                style="margin-top: -0.8%; margin-left: 35%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>
              <a href="search.html"><img src="../images/searchIcon2.png" class= "logo" 
                style="margin-top: -0.75%; margin-left: 45%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
              <a href="IngredientSearch.php"><img src="../images/searchIngredients.png" class= "logo" 
                style="margin-top: -0.75%; margin-left: 56%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
              <a href="MakeRecipe.html"><img src="../images/makeRecipes.png" class= "logo" 
                style="margin-top: -0.75%; margin-left: 71%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
              
                <div style="margin-left: 84%; margin-top: -.3%;">
                  <a href="./logout.php" class="navButton"><b>SIGN OUT</b></a>
                </div>
            </div>
          
        </div>
      </header>

    <div style="margin-top: 10%; padding: 5%; background-color: #f7f5e4;">
      <div style="width: 55%; margin-left: 23%;">
            <h1 style="font-size: 3em; text-align: center;font-family: copyright Klim Type Foundry; margin-bottom: 2%">
            <b>Your 
            <span style="font-weight:lighter !important; font-family:Britannic Bold; font-size: 1em;">SOUS-CHEF</span> 
            Account</b></h1>  
            <span style="text-align: center; font-family: copyright Klim Type Foundry;  font-size: 1.5em; margin-top: -2%;">
            The best culinary partner because we serve up endless recipe ideas.</span><br><br><br>
        <?php
        $mysqli = require __DIR__ . "/db.php";
        $sql = "SELECT * FROM user WHERE id = ?";
        $stmt = $mysqli->stmt_init();

        if (!$stmt->prepare($sql)) {
            die("SQL error: " . $mysqli->error);
        }
        $stmt->bind_param("s", $user_id);

        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $name = $user['name'];
        $id = $user['id'];
        $email = $user['email'];
        $plan = $user['member'];

        $plans = ['Free', 'Premium', 'Elite'];
        
        echo "<h1 class='username'>Your Username: <hr class='lineThrough'><hr class='lineThroughRight'>
        <p>{$name}</p></h1>";
        
        echo "<h1 class='username'>Your User ID: <hr class='lineThrough'><hr class='lineThroughRight'><p>{$id}</p>";
        
        echo "<h1 class='username'>Your Email: <hr class='lineThrough'><hr class='lineThroughRight'><p>{$email}</p>";

        echo "<h1 class='username'>Your Plan: <hr class='lineThrough'><hr class='lineThroughRight'><p>{$plans[$plan]}</p>"


        ?>
    <div style="margin-top: -5%;">
      <input type='submit' id='cancel_plan' class='cancelNow' onclick='cancel_plan()' value='Cancel Membership'></input><br>
      <input type='submit' id='cancel_plan' onclick='change_plan()' value='Change Membership'></input>
    </div>
</div>
</div>

<div class="footer" style="z-index:0; background-color: #fffef7;">
      <div class="bottomFooter">
        <img src="../images/logo.png" class="footerLogo"
        style="width:10em; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));">
        <!-- filter: drop-shadow(2px 2px 0px rgba(0,0,0,0.15)); -->
    </div>
      <div class="mainFooter" style="margin-top: -3%;">
          <div style="margin-top: 6%; display: inline-block;">
            <a href="./account.php" class="navButton"><b>MANAGE ACCOUNT</b></a>
            <a href="./RecipeBook.php" class="navButton"><b>RECIPE HUB</b></a>
            <a href="./search.html" class="navButton"><b>SEARCH RECIPES</b></a>
            <a href="./IngredientSearch.php" class="navButton"><b>INGREDIENTS SEARCH</b></a>
            <a href="./index.php" class="navButton"><b>ABOUT US</b></a>
          </div>
      </div> <br>
      <div class="bottomFooter">
        <div class="footerCol">
          <div class="footer-icons">
              <img src="../images/fbLogo.png"
              style="width:2.5em; opacity: 0.9;">
              <img src="../images/igLogo.png" 
              style="width:2.5em; opacity: 0.9;">
              <img src="../images/pinterestLogo.png" 
              style="width:2.5em; opacity: 0.9;">
              <img src="../images/twitterLogo.png" 
              style="width:2.5em; opacity: 0.9;">
          </div>
        </div>
        </div>
      
  
      <div class="bottomFooter copyright">
          <h4 style="text-align: center; font-family: GT eesti display trial; font-size: .6em;">
            COPYRIGHT 2023 - SOUS-CHEF LLC. <br>
            ALL RIGHTS RESERVED.</h4>
      </div>

    <script>
        function cancel_plan(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert("We're sad to see you go! \nYou're now on our Free Membership.");
            }
            };
            xhttp.open("POST", "change_plan.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("new_plan=" + 0);
        }

        function change_plan(){
            window.location.href = "./payment_page.php";
        }

    </script>
    
</body>

</html>