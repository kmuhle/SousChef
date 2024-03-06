<?php
session_start();
$user_id;

if (isset($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];
} else {
  header("Location: login.html");
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../template.css">
  <meta charset="UTF-8">
  <title>Your Recipe Book</title>
  <style>

    html{
      background-color: #fffef7;
    }

    #content{
      display: flex;
      flex-direction: row;
      text-align: center;
      width: 100%;
      justify-content: center;
      margin-bottom: 5%;
    }

    .tab-content {
      display: none;
      padding: 15px;
      border-left: none;
      /* display: flex;  */
      flex-direction: column;
      /* justify-content: center; */
      align-items: center;
      min-height: 100vh;
      padding-right: 7%;
    }

    #tabs {
      display: flex;
      flex-direction: column;
      width: 10%;
    }

    .tab {
      border: none;
      cursor: pointer;
      background-color: #f8f1e0;
      padding: .8em;
      color: #f8f1e0;
      font-size: large;
      margin-bottom: 20px;
      border-radius: 5px 0 0 5px;
      font-family: GT eesti display trial;
      text-transform: uppercase;
    }


    #recipes {
      height: 100%;
      width: 65%;
      background-color: #f8f1e0;
      border-radius: 10px;
    }

    .recipe{
      width: 60%;
      background-color: #fffef7;
      padding: 15px;
      border: 3px black solid;
    }

    .title{
      font-size: 1.8em;
      text-align: center;
      font-family: copyright Klim Type Foundry;
      margin-bottom: 2%;
      margin-top: 2%;
      font-weight: bolder;
      padding: 1%;
    }

    .redirect_button{
      font-family: GT eesti display trial;
      font-weight: bolder !important;
      font-size: 1em;
      padding: 1.5% !important;
      padding-right: 5%;
      color: #f8f1e0;
      background: #c6a559;
      width: 20%;
      height: 5%;
      border-radius: 0px !important;
      text-transform: uppercase;
      margin-bottom: 5%;
      margin-top: 1%;
      text-align: center;
      border: px #f8f1e0 solid !important;
      border-radius: 5px !important;
    }

    .subtitle_text{
      font-family: GT eesti display trial !important;
      text-transform: uppercase;
      color: #c6a559;
      font-size: 1em;
      font-weight: bolder !important;
      margin-bottom: -1%;
    }

    .meal_type, .cuisine_type, .health_labels .ingredients .instructions{
      font-family: copyright Klim Type Foundry !important;
      color: black;
      font-size: 1em !important;
      font-style: none;
      margin-bottom: 2%;
      padding: 2%;
      padding-top: 1%;

    }

    .meal_type{
      padding-bottom: 0;
    }

    .introBreak{
      width: 15%;
      border: 4px solid #f8f1e0;
    }

    
    .newBreak{
      width: 15%;
      border: 4px solid #f8f1e0;
      margin-top: -5%;
    }

    /* .mainContain{
      background-image: url("../images/uploadBanner.png");
      background-size: 110%;
      background-repeat: no-repeat;
      background-position-x: 15%;
      background-position-y: 2.5%;
    } */

    #favorites_tab{
      color: #f8f1e0 !important;
    }

    #your_recipes_tab{
      color: #f8f1e0 !important;
    }

    #friends_tab{
      color: #f8f1e0 !important;
    }

    .meal_type .cuisine_type .health_labels .ingredients{
        font-family: copyright Klim Type Foundry !important;
        font-size: .8em !important;
        font-style: none !important;
    } 

    .smallBreaks {
      width: 10%;
      border: 2px solid #c6a559;
      margin-bottom: -1%;
      opacity: .8;
    }

    .bottomBreaks {
      width: 10%;
      border: 2px solid #c6a559;
      margin-bottom: 1%;
      opacity: .8;
    }

    .favoritedIcon{
        width: 15% !important;
        filter:drop-shadow(1px 1px 0px rgba(128, 127, 127, 0.263));      
    }
  </style>

  <header>
        <!-- Navbar -->
        <div class="navContainer">
            <a href="./index.php"><img src="../images/logo.png" class= "logo" 
            style=" margin-left: 10%; width:10%; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));"></a>
            
            <div style="margin-top: 6%; display: inline-block; width: 100%; margin-left: -1%;">
               
              <a href="./account.php"><img src="../images/myAccount.png" class= "logo" 
                style="margin-top: -0.8%; margin-left: 25%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>    
              <a href="./RecipeBook.php"><img src="../images/favoritesIcon.png" class= "logo" 
                style="margin-top: -0.8%; margin-left: 35%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>
              <a href="search.html"><img src="../images/searchIcon2.png" class= "logo" 
                style="margin-top: -0.75%; margin-left: 45%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
              <a href="IngredientSearch.php"><img src="../images/searchIngredients.png" class= "logo" 
                style="margin-top: -0.75%; margin-left: 56%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
              <a href="MakeRecipe.html"><img src="../images/makeRecipes.png" class= "logo" 
                style="margin-top: -0.75%; margin-left: 71%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
              
                <div style="margin-left: 84%; margin-top: -.3%;">
                  <a href="logout.php" class="navButton"><b>SIGN OUT</b></a>
                </div>
          </div>
        </div>
      </header>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
  
</head>

<body>
  <div class="mainContain">
    <h1 style="font-size: 3em; text-align: center;font-family: copyright Klim Type Foundry; margin-top: 20%;">
    <b>Your <span style="font-weight:lighter !important; font-family:Britannic Bold; font-size: 1em;">SOUS-CHEF</span> 
    Recipe Hub</b></h1>  

    <p style="margin-top: -1%; font-size: 1.5em; font-family: GT eesti display trial; text-align:center;"> All Your Favorite Recipes In One Place</p>
    <hr class="introBreak"><br><br>
    <div id='content'>

    <div id="tabs">
      <button class="tab" id="favorites_tab" onclick="openTab(event, '#favorites')">Favorites
      <img src='./images/favorited.png' class="favoritedIcon"></button>
      <button class="tab" id="your_recipes_tab" onclick="openTab(event, '#your-recipes')">Your
        Recipes</button>
      <button class="tab" id="friends_tab" onclick="openTab(event, '#friends-recipes')">Friends'
        Recipes</button>
    </div>

  <div id="recipes">
    <?php
    $conn = require __DIR__ . "/db.php";

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM user WHERE id = ?";

    $stmt = $conn->stmt_init();

    if (!$stmt->prepare($sql)) {
      die("SQL error: " . $conn->error);
    }

    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
      $result = $stmt->get_result();
      $user = $result->fetch_assoc();
      $member = $user['member'];
    }

    $restriction;
    $restriction_TEXT;
    if ($member == 0) {
      $restriction = "LIMIT 5";
      $restriction_TEXT = "You can see 5 recipes from your friends";
    } elseif ($member == 1) {
      $restriction = "LIMIT 15";
      $restriction_TEXT = "You can see 15 recipes from your friends";
    } else {
      $restriction = "";
      $restriction_TEXT = "You have no limits seeing your friends' recipes";
    }

    // favorite
    $sql = "SELECT * FROM favorites WHERE user_id = {$user_id}";
    $result = $conn->query($sql);

    echo "  <div id='favorites' class='tab-content'>";
    echo "<input type='submit' class='redirect_button' onclick=redirect('search.html') value='Find New Recipes!'></input>";
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<div class='recipe'>";
        echo "<div class='title'>" . $row["title"] . "</div ><br><hr class='newBreak'><br>";
          echo "<div class='subtitle_text'>Meal Type </div><hr class='smallBreaks'><div class='meal_type'>" . $row["meal_type"] . "</div ><br>";
          echo "<div class='subtitle_text'>Cuisine Type </div><hr class='smallBreaks'><div class='cuisine_type'>" . $row["cuisine_type"] . "</div >";
          echo "<div class='subtitle_text'>Diets </div><hr class='bottomBreaks'><div class='health_labels'>" . $row["health_labels"] . "</div ><br>";
          echo "<div class='subtitle_text'>Ingredients </div><hr class='bottomBreaks'><div class='ingredients'>" . $row["ingredients"] . "</div ><br>";
          echo "<div class='subtitle_text'>Instructions </div><hr class='bottomBreaks'><div class='instructions'>" . $row["instruction"] . "</div><br>";
        echo "</div><br><br><br><br>";
      }
    }
    echo "</div>";

    // self made recipe
    $sql = "SELECT * FROM recipes WHERE user_id = {$user_id}";
    $result = $conn->query($sql);

    echo "<div id='your-recipes' class='tab-content'>";
    echo "<input type='submit' class='redirect_button' onclick=redirect('MakeRecipe.html') value='Add Your Recipes!'></input>";
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<div class='recipe'>";
        echo "<div class='title'>" . $row["title"] . "</div ><br><hr class='newBreak'><br>";
          echo "<div class='subtitle_text'>Meal Type: </div><hr class='smallBreaks'><div class='meal_type'>" . $row["meal_type"] . "</div ><br>";
          echo "<div class='subtitle_text'>Cuisine Type: </div><hr class='smallBreaks'><div class='cuisine_type'>" . $row["cuisine_type"] . "</div >";
          echo "<div class='subtitle_text'>Diets: </div><hr class='bottomBreaks'><div class='health_labels'>" . $row["health_labels"] . "</div ><br>";
          echo "<div class='subtitle_text'>Ingredients:</div><hr class='bottomBreaks'><div class='ingredients'>" . $row["ingredients"] . "</div ><br>";
          echo "<div class='subtitle_text'>Instructions:</div><hr class='bottomBreaks'><div class='instructions'>" . $row["instruction"] . "</div><br>";
        echo "</div><br>";
      }
    }
    echo "</div>";


    // Get friends' recipes
    $sql = "SELECT * FROM Friends WHERE User1 = ? AND Status = 1";
    $stmt = $conn->stmt_init();

    if (!$stmt->prepare($sql)) {
      die("SQL error: " . $conn->errno);
    }

    $stmt->bind_param("i", $user_id);

    if (!$stmt->execute()) {
      die("Failed to execute query: " . $stmt->error);
    }

    $friends = array();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
      $friends[] = $row['User2'];
    }

    echo "<div id='friends-recipes' class='tab-content'>";
      echo "<input type='submit' class='redirect_button' onclick=redirect('friends.php') value='Add A New Friend!'></input>";

    if (!empty($friends)) {
      $friend_ids = implode(",", $friends);
      $sql = "SELECT * FROM recipes WHERE user_id IN ($friend_ids)" . $restriction;
      $result = $conn->query($sql);

      // echo "<a>" . $restriction_TEXT . "</a>";
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<div class='recipe'>";
        echo "<div class='title'>" . $row["title"] . "</div ><br><hr class='newBreak'><br>";
          echo "<div class='subtitle_text'>Meal Type: </div><hr class='smallBreaks'><div class='meal_type'>" . $row["meal_type"] . "</div ><br>";
          echo "<div class='subtitle_text'>Cuisine Type: </div><hr class='smallBreaks'><div class='cuisine_type'>" . $row["cuisine_type"] . "</div >";
          echo "<div class='subtitle_text'>Diets: </div><hr class='bottomBreaks'><div class='health_labels'>" . $row["health_labels"] . "</div ><br>";
          echo "<div class='subtitle_text'>Ingredients:</div><hr class='bottomBreaks'><div class='ingredients'>" . $row["ingredients"] . "</div ><br>";
          echo "<div class='subtitle_text'>Instructions:</div><hr class='bottomBreaks'><div class='instructions'>" . $row["instruction"] . "</div><br>";
        echo "</div><br>";
        }
      } 
    } 

    echo "</div>";

    $conn->close();
    ?>
    </div>
  </div>
</div>

<script type="text/javascript">
    function redirect(page) {
      window.location.href = `./${page}`;
    }

    function openTab(evt, tabName) {

      $(".tab").css("background-color", "#c6a559");
      $(".tab").css("color", "black");
      $(".tab-content").css("display", "none");
      $(evt.currentTarget).css("background-color", "#3d5990", "opacity", "0.7");
      $(tabName).css("background-color", "#3d5990");
      $(evt.currentTarget).css("color", "#f8f1e0");
      $(tabName).css("display", "flex");
    }
    document.getElementsByClassName("tab")[0].click(); 
  </script>
  
  <div class="footer" style="z-index:0; background-color: #fffef7;">
    <div class="bottomFooter">
      <img src="./images/logo.png" class="footerLogo"
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