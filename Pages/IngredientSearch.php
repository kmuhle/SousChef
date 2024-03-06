<?php
session_start();
$user_id;

if (isset($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];
} else {
  header("Location: login.php");
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search By Ingredient</title>
    <link rel="stylesheet" href="../template.css">
    <style>
        html, body{
          /* padding:0; */
          text-align: center;
          background-color: #fffef7;
          display: block;
          height: 100vh;
        }

        .emptyDiv{
          margin-top: -8%;
          margin-left: 91%;
          height: 11.5em; 
          width: 12em; 
          background-color: #fffef7; 
          display: inline-flex;
        }

        #ingredient_search{
          display: flex;
          margin-left: 30%;
          margin-right: 30%;
          margin-bottom: 30%;
          align-items: center;
          flex-direction: column;
        }

        .ingredient_bubble {
          border: 2px solid black !important;
          background: #fffef7 !important;
          color: black;
          padding: 1.5%;
          margin: 1.8%;
          max-width: fit-content;
          display: inline-block;
          font-family: GT eesti display trial;
        }

        .ingredient_bubble:hover {
          border: 2px solid #c6a559 !important;
          color: #c6a559;
          cursor: pointer;
          box-shadow: 1px 1px 1px 1px #c6a559 inset;
        }

        .delete_ingredient{
          margin-left: 10px;
          cursor: pointer;
        }

        .title{
          margin-top: 20%;
        }

        #ingredient_input{
          color: #c6a559;
          border: 0px solid #fffef7;
          font-family: ITC Cheltenham STD;
          font-size: 1.4em;
          opacity: .8;
          border: 0px solid #fffef7;
          background-color: #fffef7;
          margin-bottom: 5%;
          align-contet: center;
          padding: 1.5%;
          width: 80%;
          display: inline-flex;
        }

        input::placeholder {
            color: #7a7a7a;
            opacity: .8;
            border-bottom: 5px solid #f8f1e0 !important;
        }

        input:focus {
            outline-width: 0;
        }

        .searchBarArea{
          width: 120%;
          display: inline-flex !important;
        }

        #ingredient_search_button {
          padding-left: 5%;
          padding-right: 0.5%;
          margin-top: -4.5% !important;
          padding-bottom: 4%;
          color: black;
          font-size: 1em !important;
          cursor: pointer;
          border: black 0px solid;
          background-color: #fffef7;
          font-size: 1em;
          font-family: GT eesti display trial;
          font-weight: bolder;
          display: inline-block;
          cursor: pointer;
	    	}

        .mainContent{
          background-image: url("../images/test.png");
          background-size: 40%;
          background-repeat: no-repeat;
          background-position-x: 110%;
          background-position-y: 0%;
          /* height: 100vh; */
          margin: 0;
        }

        #open_recipe_button{
          border: solid black 0px !important;
          background: #fffef7;
          display: flex !important; 
        }

        .recipe img{
          width: 12em; 
          height: 12em;
          object-fit: cover;
          filter: brightness(1.2) !important;	
          filter: opacity(80%) !important;
          filter: saturate(115%) !important;
          border-radius: 50%;
          border: #f8f1e0 solid .5em !important;
          filter: drop-shadow(2px 3px 0px #c6a559c0) !important;
          margin-right: 5%;
        }

        .recipe img:hover{
          border: #c6a559 solid .5em;
          filter: drop-shadow(2px 3px 0px black);
        }

        .recipe_description{
          display: flex;
          flex-direction: column;
          margin-bottom: 10%;
          text-align: left;
        }

        .recipe h2{
          font-family: copyright Klim Type Foundry;
          font-weight: bolder;
          font-size: 1.8em;
          text-align: left;
          text-transform: uppercase;
          width: 100%;
          margin-bottom: .5%;
        }

        .subTitle{
          font-family: copyright Klim Type Foundry;
          font-style: italic;
          font-size: 1.2em;
          color: #7a7a7a;
        }

        .subText{
          font-family: GT eesti display trial; 
          text-transform: uppercase;
          font-style: normal;
          font-size: .8em;
          color: black;
          margin-bottom: -2% !important;
        }

        #show_more{
          font-family: GT eesti display trial;
          font-size: 1em;
          padding: .5% !important;
          border: 1px #c6a559 solid !important;
          color: #fffef7;
          background: #c6a559;
          width: 30%;
          border-radius: 0px !important;
          text-transform: uppercase;
        }
        
        .error{
          font-family: GT eesti display trial;
          font-size: 2em;
          margin-bottom: 5%;
        }
	</style>

    <script src="https://kit.fontawesome.com/c63cecf2bb.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
</head>
<body>
    <header>
        <!-- Navbar -->
          <div class="navContainer" style="z-index:100;">
                <a href="index.php"><img src="../images/logo.png" class= "logo" 
                style=" margin-left: 10%; width:10%; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));"></a>
                
                <div style="margin-top: 6%; display: inline-block; width: 100%;">
                    
                <a href="account.php"><img src="../images/myAccount.png" class= "logo" 
                    style="margin-top: -0.8%; margin-left: -26%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>    
                <a href="RecipeBook.php"><img src="../images/favoritesIcon.png" class= "logo" 
                    style="margin-top: -0.8%; margin-left: -16%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>
                <a href="search.html"><img src="../images/searchIcon2.png" class= "logo" 
                    style="margin-top: -0.75%; margin-left: -6%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
                <a href="#here"><img src="../images/searchIngredients.png" class= "logo" 
                    style="margin-top: -0.75%; margin-left: 5%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
                <a href="MakeRecipe.html"><img src="../images/makeRecipes.png" class= "logo" 
                    style="margin-top: -0.75%; margin-left: 20%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
                
                    <div style="margin-left: 73%; margin-top: -.1%;">
                    <a href="logout.php" class="navButton"><b>SIGN OUT</b></a>
                    </div>
            </div>
            
            </div>
    </header>


<div class="mainContent">
    <h1 class="title" 
    style=" margin-top: 20%; font-size: 2.5em;text-align: center; font-family:copyright Klim Type Foundry;">
    Open up your fridge to cook a delicious meal!</h1>

        <div id="ingredient_search">
          <div class="searchBarArea">
            <input type=text id="ingredient_input" 
            placeholder="What's in your fridge? &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;"></input>
            <button id="ingredient_search_button" style="inline-flex">
              <img src="../images/searchButton.png" class="searchIcon"
              style="width:1.8em; filter: drop-shadow(1px 1px 0px #c6a559a6); 
              position: relative;">
            </button>
          </div>
        
            <div id="ingredients_container" style="margin-bottom: 13%;">
                <?php
                    if (isset($_SESSION["user_id"])) {
                        $user_id = $_SESSION["user_id"];
                    } else {
                        die("user not logged in");
                    }

                    $conn = require __DIR__ . '/db.php';
                    
                    $sql = "SELECT `ingredient_list` FROM ingredients WHERE `user_id` = $user_id";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_assoc($result);

                      $ingredients = explode(",", $row["ingredient_list"]);
                      foreach ($ingredients as $ingredient){
                        echo "<div class='ingredient_bubble'>$ingredient<i class='fa-solid fa-xmark delete_ingredient' onclick='delete_ingredient(event)'></i></div>";
                      }
                    }
                ?>
            </div>
          <div id='results'></div>
          <button id = 'show_more' value="Show More Recipes" onclick='more_ingredient_recipes()'>Show More Recipes</button>
        </div>
      </div>
    </div>
    <script>
          var offset = 0;

        find_ingredient_recipes();
        $("#ingredient_search_button").click(find_ingredient_recipes);
        
        $("#ingredient_input").on("keyup", function(e) {
        if (e.keyCode === 13) { 
            var ingredient = $("#ingredient_input").val();
            ingredient = ingredient.charAt(0).toUpperCase() + ingredient.slice(1).toLowerCase();
            console.log(ingredient);
            if($(".ingredient_bubble:contains('"+ingredient+"')").length == 0){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var ingredient_bubble = `<div class='ingredient_bubble'>${ingredient}<i class='fa-solid fa-xmark delete_ingredient' onclick='delete_ingredient(event)'></i></div>`;
                    $("#ingredients_container").append(ingredient_bubble);
                }
                };
                xhttp.open("POST", "add_ingredient.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("ingredient=" + ingredient);
            }
            $("#ingredient_input").val("");
        }
        });

      
        function delete_ingredient(e) {
        console.log(e);
        var ingredient_bubble = $(e.target).parent();
        console.log(ingredient_bubble);
        var ingredient = ingredient_bubble.text();
        console.log(ingredient);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                ingredient_bubble.remove();
            }
        };
        xhttp.open("POST", "remove_ingredient.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        console.log(ingredient);
        xhttp.send("ingredient=" + ingredient);
      }
        function find_ingredient_recipes(){
          offset = 0;
            const api_key = "577c8e10b78544e3a55361a053215741";
            const resultsDiv = document.getElementById('results');
            resultsDiv.innerHTML = "";

            var user_ingredients = $(".ingredient_bubble").map(function() {
                return $(this).text();
            }).get();
            if(user_ingredients.length != 0){
            var request = `https://api.spoonacular.com/recipes/findByIngredients?ingredients=${user_ingredients.join(',')}&apiKey=${api_key}&number=10&ranking=2&instructionRequired=true&offset=${offset * 10}`;
            console.log(request);

            fetch(request)
         .then(response => response.json())
         .then(data => {
            if(data.length == 0){
                var errorDiv = `<div class='error'>No recipies found!</div>`;
                resultsDiv.innerHTML += errorDiv;
            }
            else{
                data.forEach(recipe =>{
                    var used_ingredients = [];
                    var missed_ingredients = [];
                    if(recipe.missedIngredients.length != 0){
                        recipe.missedIngredients.forEach(ingredient =>{
                        missed_ingredients.push(ingredient.name);
                        });
                        missed_ingredients = missed_ingredients.join(",&nbsp;");
                    }
                    
                    if(recipe.usedIngredients.length != 0){
                        recipe.usedIngredients.forEach(ingredient =>{
                        used_ingredients.push(ingredient.name);
                        });
                        used_ingredients = used_ingredients.join(",&nbsp;");
                    }

                    var recipeDiv = `<form class='recipe' action='RecipePage.php' method='post' enctype='multipart/form-data' target='_blank'>
                    <input type="hidden" name="recipe_name" value='${recipe.title}'><input type="hidden" name="recipe_id" value='${recipe.id}'><button type=submit id='open_recipe_button'><hr><img src='${recipe.image}'><div class='recipe_description'><h2>${recipe.title}</h2><span class="subTitle">You have: <span class="subText">${used_ingredients} &nbsp;</span><p>You need: <span class="subText">${missed_ingredients} &nbsp;</span><hr></div></button></form>`;
                    resultsDiv.innerHTML += recipeDiv;
                });
            }
        })
        .catch(error => console.error(error));
        }
    }


    function more_ingredient_recipes(){
      offset++;
        const api_key = "577c8e10b78544e3a55361a053215741";
        const resultsDiv = document.getElementById('results');

        var user_ingredients = $(".ingredient_bubble").map(function() {
            return $(this).text();
        }).get();
        if(user_ingredients.length != 0){
        var request = `https://api.spoonacular.com/recipes/findByIngredients?ingredients=${user_ingredients.join(',')}&apiKey=${api_key}&number=10&ranking=2&instructionRequired=true&offset=${offset * 10}`;
        console.log(request);

        fetch(request)
      .then(response => response.json())
      .then(data => {
        if(data.length == 0){
            var errorDiv = `<div class='error'>No recipies found!</div>`;
            resultsDiv.innerHTML += errorDiv;
        }
        else{
            data.forEach(recipe =>{
                var used_ingredients = [];
                var missed_ingredients = [];
                if(recipe.missedIngredients.length != 0){
                    recipe.missedIngredients.forEach(ingredient =>{
                    missed_ingredients.push(ingredient.name);
                    });
                    missed_ingredients = missed_ingredients.join(",&nbsp;");
                }
                
                if(recipe.usedIngredients.length != 0){
                    recipe.usedIngredients.forEach(ingredient =>{
                    used_ingredients.push(ingredient.name);
                    });
                    used_ingredients = used_ingredients.join(",&nbsp;");
                }

                var recipeDiv = `<form class='recipe' action='RecipePage.php' method='post' enctype='multipart/form-data' target='_blank'>
                <input type="hidden" name="recipe_name" value='${recipe.title}'><input type="hidden" name="recipe_id" value='${recipe.id}'><button type=submit id='open_recipe_button'><hr><img src='${recipe.image}'><div class='recipe_description'><h2>${recipe.title}</h2><span class="subTitle">You have: <span class="subText">${used_ingredients} &nbsp;</span><p>You need: <span class="subText">${missed_ingredients} &nbsp;</span><hr></div></button></form>`;
                resultsDiv.innerHTML += recipeDiv;
            });
        }
    })
    .catch(error => console.error(error));
    }
    }
    </script>


  <div class="footer" style="z-index:0; background-color: #fffef7">
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
