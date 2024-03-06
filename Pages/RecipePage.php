<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $_SESSION['recipe_id'] = $_POST['recipe_id'];
  $_SESSION['recipe_name'] = $_POST['recipe_name'];

  header('Location: ' . $_SERVER['PHP_SELF']);
  exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title id='page_title'></title>
    <link rel="stylesheet" href="../template.css"/>
    <style>
        #recipe_page{
            display: flex;
            padding: 10%;
            margin-top: -3%;
        }

        #title{
            font-size: 3em;
            text-align: center;
            font-family: copyright Klim Type Foundry; 
            margin-bottom: 2%;
            font-weight: bolder;
        }

        #left_recipe_page{
            flex: 2;
            height: 100vh;
            overflow: scroll;
            max-width: 40%;
            margin: 10px;
        }

        #right_recipe_page{
            align-items: center;
            flex: 10;
            height: 120vh;
            overflow: scroll;
            max-width: 60%;
            margin: 10px;
            text-align:center;
        }

        .ingredient_name{
            background-color: #fffef7;
            padding: 5%;
            font-family: copyright Klim Type Foundry !important;
            font-size: 1em;
        }

        .ingredient_amount{
            background-color: #c6a559c1;
            color: white;
            text-align: right;
            padding: 5%;
            width: 40%;
            font-family: GT eesti display trial !important;
            font-weight: bolder !important;
            font-size: .9em;
            text-transform: uppercase;
        }

        #ingredients{
            border-collapse: collapse;
        }

        #recipe_image{
            width: 70%; 
            object-fit: cover;
            object-position: 50% 10%; 
            filter: brightness(1.3) !important;	
            filter: opacity(80%) !important;
            filter: saturate(140%) !important;
            display: inline-block;
            border: #f8f1e0 solid .5em;
            filter: drop-shadow(5px 5px 0px #c6a559c0) !important;
        }

        td{
            height: 1%;
        }

        .step_number{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 3em;
            height: 3em;
            background-color: black;
            color: #e6e5d9;
            border-radius: 50%;
            font-family: GT eesti display trial !important;
        }

        .stepLines{
            width: 100%;
            border: 1px solid black;
            z-index: -1;
            margin-top: -1.8%;
        }

        .step{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .step_instruction{
            text-align: center;
            padding: 2%;
            font-size: 1.1em;
            font-family: copyright Klim Type Foundry !important;
            line-height: 1.2em;
            margin-top: 2%;
        }

        table{
            width: 75%;
            margin-top: 5%;
        }

        tr{
            border-bottom: 1.5px solid #e6e5d9;

        }

        .introBreak{
            width: 15%;
            border: 4px solid #f8f1e0;
            margin-bottom: 0%;
        }

        #favorite_button{
            font-family: GT eesti display trial !important;
            font-weight: bolder !important;
            color: #c6a559;
            font-size: 1.1em;
            /* box-shadow: inset 1px #c6a559 !important; */
            background-color: #f8f1e0;
            padding: 2%;
            margin-top: 1%;
            width: 3em;
            height: 3em;
            border: 0px black;
            border-radius: 50%;
        }

        #favorite_button:hover{
            background-color: #3d5990 !important;
            box-shadow: inset 1px #c6a559 !important;
            color: #f8f1e0;
            cursor: pointer;
        }

        .favoritedIcon{
            width: 80% !important;
            filter:drop-shadow(1px 1px 0px rgba(128, 127, 127, 0.263));      
        }

        .byWho{
            font-family: copyright Klim Type Foundry !important;
            font-weight: bolder;
            color: #7a7a7a !important;
            text-transform: capitalize;
        }

        .recipeSource{
            text-decoration: none !important;
            font-family: GT eesti display trial !important;
            text-transform: uppercase;
            color: black !important;
        }

        a {
            text-decoration: none !important;
            color: black !important;
        }

        .subtitleText{
            font-family: GT eesti display trial !important;
            text-transform: uppercase;
            color: #c6a559;
            font-size: 1em;
            font-weight: bolder !important;
        }

        .actualText{
            font-family: copyright Klim Type Foundry !important;
            color: black;
            font-size: 1em;
            font-style: italic;
        }

        .afterFavorite{
            border: 1px solid #c6a559;
            width: 85%;
            margin-bottom: -2%;
        }

        .dottedLines{
            border: 1px dashed black;
            width: 20%;
            margin-bottom: 3%;
            margin-top: 1.2%;
            opacity: .8;
        }

        #recipe_summary{
            text-align: left;
            padding: 2%;
            font-size: 1.2em;
            font-family: copyright Klim Type Foundry !important;
            line-height: 2em;
        }
	</style>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
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
              <a href="./RecipeBook.php"><img src="../images/favoritesIcon.png" class= "logo" 
                style="margin-top: -0.8%; margin-left: 35%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>
              <a href="./search.html"><img src="../images/searchIcon2.png" class= "logo" 
                style="margin-top: -0.75%; margin-left: 45%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
              <a href="./IngredientSearch.php"><img src="../images/searchIngredients.png" class= "logo" 
                style="margin-top: -0.75%; margin-left: 56%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
              <a href="MakeRecipe.html"><img src="../images/makeRecipes.png" class= "logo" 
                style="margin-top: -0.75%; margin-left: 71%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
              
                <div style="margin-left: 84%; margin-top: -.3%;">
                  <a href="logout.php" class="navButton"><b>SIGN OUT</b></a>
                </div>
          </div>
        </div>
      </header>

        <div id='recipe_page' style="margin-top: 6%;">
            <div id='left_recipe_page'></div>
            <div id='right_recipe_page'></div>
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
    </div>

    <script>
        function get_recipe_info(id){
            console.log(id);
            const api_key = "577c8e10b78544e3a55361a053215741";
            var request = `https://api.spoonacular.com/recipes/${id}/information?&apiKey=${api_key}`;
            console.log(request);

            fetch(request)
         .then(response => response.json())
         .then(data => {
            if(data){
                console.log("In fetch");
                var ingredients = "";
                var side_page = `<img id='recipe_image' src='${data.image}'><table id='ingredients'>`;
                data.extendedIngredients.forEach(ingredient => {
                    side_page += `<tr><td class='ingredient_amount'>${ingredient.measures.us.amount} ${ingredient.measures.us.unitShort}</td><td class='ingredient_name'>${ingredient.name}</td></tr>`;

                    ingredients += `${ingredient.measures.us.amount} ${ingredient.measures.us.unitShort} ${ingredient.name}<br>`;
                });
                console.log(ingredients);
                side_page += `</table>`;       
                
                
                var instructions = "";
                var instructionsDiv = `<div id='recipe_summary'>${(data.summary).replace(/Spoonacular/gi, "Sous Chef")}</div><br>
                <div id='recipe_steps'>`;
                data.analyzedInstructions[0].steps.forEach(instruction => {
                  console.log(instruction);
                    instructionsDiv += `<div class='step'>
                    <div class='step_number'>${instruction.number}</div><hr class="stepLines"><br>
                    <div class='step_instruction'>${instruction.step.replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/\.(?=\S)/g, '. ')}</div></div>`;
                    instructions += `${instruction.step.replace(/"/g, "&quot;").replace(/'/g, "&#39;").replace(/\.(?=\S)/g, '. ')}<br>`;

                    console.log(instructions);
                });
                instructionsDiv += `</div>`;
                var page = `<div id='title'>${data.title}</div>

                <div class="recipeSource"><span class="byWho"><i>By:</i></span>
                <a href="${data.sourceUrl}">${data.sourceName}</a></div> 

                <hr class="introBreak">`

                page += `<form class='favorite_form' action='javascript:void(0)'>
                <button type='submit' id='favorite_button' onclick='favorite_recipe()'>
                <img src='./images/favorited.png' class="favoritedIcon"></button>
                <br><hr class="afterFavorite" style="margin-top: 4%;"><br>
                
                <input type="hidden" name="title" id='title_data' value='${data.title}'>     
                <input type="hidden" name="id" id='id_data' value='${data.id}'>
                <input type="hidden" name="ingredients" id='ingredients_data' value="${ingredients}">
                <input type="hidden" name="instructions" id='instructions_data' value="${instructions}">
                <input type="hidden" name="total_time" id='total_time_data' value='${data.readyInMinutes}'>
                <input type="hidden" name="health_labels" id='health_labels_data' value='${data.diets}'>
                <input type="hidden" name="meal_type" id='meal_type_data' value='${data.dishTypes}'>
                <input type="hidden" name="cuisine_type" id='cusine_data' value='${data.cuisines}'></form>`;
                page += `<div id='recipe_info'>`;

                if(data.dishTypes.length > 0){
                    page += `<div id='meal_type'><span class="subtitleText">Meal Type: </span><br>
                    <span class="actualText">${data.dishTypes.join(", ")}</span></div><br>`;
                }
                if(data.cuisines.length > 0){
                    page += `<div id='cuisine_type'><span class="subtitleText">Cuisine Type:</span><br>
                     <span class="actualText">${data.cuisines.join(", ")}</span></div><br>`;
                }
                if(data.diets.length > 0){
                    page += `<div id='diets'><span class="subtitleText">Diets:</span><br>
                    <span class="actualText">${data.diets.join(", ")}</span></div>
                    <hr class="afterFavorite">`;
                }
                page += `</div>`;

                page += `<div id='recipe_info'><div id='meal_type'></div><div id='cuisine'></div><div id='intolerances'></div><div id='diets'><br></div>`;
                page += instructionsDiv;

                $('#left_recipe_page').append(side_page);
                $('#right_recipe_page').append(page);
            }
        })
        .catch(error => console.error(error));
        }


        function favorite_recipe(){
          console.log("in favorite recipe");
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("In xhhtp");
                $('#favorite_button').css("background-color", "#3d5990");
            }
            };
            xhttp.open("POST", "MakeFavoriteRecipe.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("title=" + $('#title_data').val() + "&ingredients=" + $('#ingredients_data').val() + "&instructions=" + $('#instructions_data').val() + "&total_time=" + $('#total_time_data').val() + "&health_labels=" + $('#health_labels_data').val() + "&meal_type=" + $('#meal_type_data').val() + "&cuisine_type=" + $('#cuisine_type_data').val());
        }
    </script>
    <?php
        if (isset($_SESSION['recipe_id']) && isset($_SESSION['recipe_name'])) {
            $recipe_id = $_SESSION['recipe_id'];
            $recipe_name = $_SESSION['recipe_name'];
        
            echo "<script>document.getElementById('page_title').innerHTML = '$recipe_name';</script>";
        
            echo "<script>get_recipe_info('$recipe_id');</script>";
            }
            else{
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
    ?>


</body>
</html>
