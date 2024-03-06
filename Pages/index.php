<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's Home</title>
    <link rel="stylesheet" href="../indexTwoStyle.css">
  </head>

  <body>
    <header>
      <!-- Navbar -->
      <div class="navContainer">
          <a href="#here"><img src="./images/logo.png" class= "logo" 
          style="margin-left: 10%; width:10%; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));"></a>
          
          <div style="margin-top: 6%; display: inline-block; width: 100%; margin-left: -1%;">
             
            <a href="account.php"><img src="./images/myAccount.png" class= "logo" 
              style="margin-top: -0.8%; margin-left: 25%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>    
            <a href="RecipeBook.php"><img src="./images/favoritesIcon.png" class= "logo" 
              style="margin-top: -0.8%; margin-left: 35%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>
            <a href="search.html"><img src="./images/searchIcon2.png" class= "logo" 
              style="margin-top: -0.75%; margin-left: 45%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
            <a href="IngredientSearch.php"><img src="./images/searchIngredients.png" class= "logo" 
              style="margin-top: -0.75%; margin-left: 56%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
            <a href="MakeRecipe.html"><img src="./images/makeRecipes.png" class= "logo" 
              style="margin-top: -0.75%; margin-left: 71%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
            
              <div style="margin-left: 84%; margin-top: -.3%;">
                <a href="logout.php" class="navButton"><b>SIGN OUT</b></a>
              </div>
        </div>
      </div>
    </header>

    <!-- we're now taking online orders -->
    <div class="banner">
      <div class="bannerLeft">
          <span style="font-family:Britannic Bold; font-size: 2.5em;">SOUS-CHEF</span>  
          <span style="font-family: copyright Klim Type Foundry;  font-size: 2em;">
          is your best culinary partner because we serve up endless recipe ideas.</span>
          <p style="font-family: GT eesti display trial; text-transform: uppercase; font-size: 1.15em;">
          <b>Open your fridge to cook up a delicious meal any time.</b></p><hr class="introBreak">        
          <p style="font-family: copyright Klim Type Foundry; font-size: 1.2em; line-height: 1.9em; color: #7a7a7a;">
          <i>A recipe generator that utilizes your unique ingredients and dining preferences 
          to craft delectable dishes that cater to your every whim. 
          Doubling as a virtual cookbook and social platform, we provide the tools 
          to share your favorite recipes and browse those of your culinary cohorts.</i>
        </p>

          <p></p>
              <!-- <div class="bannerButtons">
                  <br><a href="pages/Menu/Menu.html" class="orderButton">Order Now</a>
                  <a href="pages/Membership/Membership.html" class="recipeButton">Join us</a>
              </div> -->
      </div>
      <div class="bannerRight">
          <img src="./images/test.png" 
              style="width:100%; filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.631));"></img></div>
      </div>
    </div>


  <div class="subContainer">
    <img src="./images/magazine copy.png" id="plans"
    style="width:25%; filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.631)); margin-top: -2%; z-index: -1;">
    </img><hr>
    <h1 style="font-family: copyright Klim Type Foundry; color: #f8f1e0;">
    <b>CHOOSE ANY PLAN — 12 WEEKS FOR JUST $1</b></h1>
    <p class="tagLine">
    <b>Open your fridge to cook up a delicious meal any time.</b></p>
    <hr style="border: 1px solid #f8f1e0; margin-bottom: 5%;">
    <div class="row">
      <div class="column">
        <img src="./images/membershipOne.png" 
        style="width: 80%; filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.631));">
        <p class="plans">YOUR FREE PLAN</p>
        <hr style="border: 1.5px solid #f8f1e0; margin-top: -5%;">
        <p class="priceText">12 weeks for</p>
        <p class="price">$0</p>
        <a href="./account.php" class="orderButton"><b>VIEW ACCOUNT</b></a>
        <br><br>
        <hr style="border: .8px solid #f8f1e0; margin-bottom: 5%; margin-top: 2%;">
        <p class="benefits">Unlimited recipe searches.</p>
        <p class="benefits">Save up to 5 favorite recipes.</p>
        <p class="benefits">Access to up 5 friends' favorite recipes.</p>
      </div>

      <div class="column">
        <img src="./images/membershipTwo.png" 
        style="width: 80%; filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.631));">
        <p class="plans">PREMIUM MEMBERSHIP</p>
        <hr style="border: 1.5px solid #f8f1e0; margin-top: -5%;">
        <p class="priceText">12 weeks for</p>
        <p class="price">$3</p>
        <a href="./payment_page.php" class="orderButton"><b>GET PREMIUM</b></a>
        <br><br>
        <hr style="border: .8px solid #f8f1e0; margin-bottom: 5%; margin-top: 2%;">
        <p class="benefits">Unlimited advanced recipe searches.</p>
        <p class="benefits">Save up to 25 favorite recipes.</p>
        <p class="benefits">Access to up 25 friends' favorite recipes.</p>
      </div>
      
      <div class="column">
        <img src="./images/membershipThree.png"        
        style="width: 80%; filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.631));">
        <p class="plans">ELITE MEMBERSHIP</p>
        <hr style="border: 1.5px solid #f8f1e0; margin-top: -5%;">
        <p class="priceText">12 weeks for</p>
        <p class="price">$5</p>
        <a href="./payment_page.php" class="orderButton"><b> &nbsp; GET ELITE &nbsp;</b></a>        
        <br><br>
        <hr style="border: .8px solid #f8f1e0; margin-bottom: 5%; margin-top: 2%;">
        <p class="benefits">Unlimited advanced recipe searches.</p>
        <p class="benefits">Unlimited access to your favorite recipes.</p>
        <p class="benefits">Unlimited access to your friends' favorite recipes.</p>
        <br><br>
      </div>
    </div>
  </div>
  

  <div class="footer" style="z-index:0; background-color: #fffef7;">
    <div class="bottomFooter">
      <img src="./images/logo.png" class="footerLogo"
      style="width:10em; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));">
      <!-- filter: drop-shadow(2px 2px 0px rgba(0,0,0,0.15)); -->
  </div>
    <div class="mainFooter" style="margin-top: -3%;">
        <div style="margin-top: 6%; display: inline-block;">
          <a href="" class="navButton"><b>MANAGE ACCOUNT</b></a>
          <a href="" class="navButton"><b>RECIPE HUB</b></a>
          <a href="#plans" class="navButton"><b>SEARCH RECIPES</b></a>
          <a href="#plans" class="navButton"><b>INGREDIENTS SEARCH</b></a>
          <a href="#aboutUs" class="navButton"><b>ABOUT US</b></a>
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


    
    <!-- carousel of featured products / images -->
    <!-- <div class="carousel">
      <button class="prev" onclick="moveSlide(-1)">&#10094;</button>

      <div class="slides fade">
          <img src="./images/slideShow1.png" style = "width:1100px;">
      </div>

      <div class="slides fade">
          <img src="./images/slideShow2.png" style = "width:1100px;">
      </div>

      <div class="slides fade">
          <img src="./images/slideShow3.png" style = "width:1100px;">
      </div>

      <div class="slides fade">
          <img src="./images/slideShow4.png" style = "width:1100px;">
      </div>

      <button class="next" onclick="moveSlide(1)">&#10095;</button>
  </div> -->