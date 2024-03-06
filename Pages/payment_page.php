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
    <meta charset="UTF-8">
    <title>Payment Page</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../template.css">
    <style>
        h1{
            text-align: center;
        }

        #payment_form{
            display: flex;
            flex-direction: column;
            width: 90%;
            justify-content: center;
            margin-top: -3.5%;
        }

        #payment_box{
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
            width: 50%;
        }

        input[type="radio"] {
            display: none;
        }

        input{
          padding: 1.5%;
          border:1.5px black solid;
          background-color: #fffef7;
        }

        #plan_info{
            width: 30%;
            height: 100%;
            margin-left: 5%;
        }

        #payment_page{
            display: flex;
            padding-left: 8%;
            padding-right: 8%;
            align-items: center;
            justify-content: center;
        }
        
        .plan_buttonP{
          font-family: GT eesti display trial !important;
          padding: 1.5%;
          cursor: pointer;
          margin: 4%;
          margin-left: -0.5%;
          margin-bottom: -1%;
          background-color: #c6a559;
          color:#fffef7;
        }


        .plan_buttonE{
            font-family: GT eesti display trial !important;
            padding: 1.5%;
            cursor: pointer;
            margin: 4%;
            margin-left: -0.5%;
            margin-bottom: -1%;
            background-color: #3d5990;
            color:#f8f1e0;
        }

        .plan_buttonP:hover{
          text-shadow: 1px 1px 0px #7a7a7a;
          box-shadow: 0px 0px 1px 1px #fffef7 inset;
        }

        .plan_buttonE:hover{
          text-shadow: 1px 1px 0px #7a7a7a;
          box-shadow: 0px 0px 1px 1px #fffef7 inset;
        }
        
        .column{
          width: 100%;
          background: #3d5990;
          /* border: 2px black solid; */
          color: black;
        }

        label{
          font-size: 1.1em;
          font-family: GT eesti display trial !important;
          text-transform: uppercase;
        }

        input{
          margin-bottom: 1%;
          box-shadow: 0px 0px 1px 1px #fffef7 inset;
        }

        #pay_button{
          font-family: GT eesti display trial;
          font-weight: bolder !important;
          padding: 1.5%;
          width: 20%;
          background-color: #fffef7;
          border: 2px solid black;
          color:black;
          font-size: 110%;
          cursor: pointer;
          transition: 0.3s ease;
          text-decoration: none;
          margin-bottom: 10% !important;
          align-self: center;

        }

        #pay_button:hover{
          box-shadow: 0px 0px 1px 1px rgba(0, 0, 0, 0.515) inset;
        }

        #upgrade_choices{
            display: inline-flex !important;
            width: 150%;
            margin-top: -60%;
            /* margin-left: 25% !important; */
            
        }

        hr{
          z-index: -1;
          border: 1.5px solid black;
          opacity: 0.7;
        }

        .benefits{
          line-height: 1em;;
        }

        .introBreak{
            width: 20%;
            border: .2em solid black;
            margin-left: 5%;
            margin-top:-4.5%;
            opacity: 1;s
        }

    </style>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script>
        function show_premium_info(){
            $("#premium_info").show();
            $("#elite_info").hide();
        }

        function show_elite_info() {
            $("#elite_info").show();
            $("#premium_info").hide();
        }

        function execute_membership_change(){
            var plans = ["Free","Premium","Elite"];
            var selected_plan = $('input[name="upgrade_option"]:checked').val();
            var curr_plan = $('#current_plan').val();
            if(curr_plan == selected_plan){
                alert(`You are already subscribed to the ${plans[curr_plan]} Membership.`);
            }
            else{
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert(`You are now subscribed to our ${plans[selected_plan]} Membership.`);
                    window.location.href = "./account.php";
                }
                };
                xhttp.open("POST", "change_plan.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("new_plan=" + selected_plan);
                
            }
            
        }

        function no_change(plan){
            alert(`You are already subscribed to the ${plan} plan.`);
        }

    </script>
  </head>
  <body>
    <header>
      <!-- Navbar -->
      <div class="navContainer">
          <a href="index.php"><img src="../images/logo.png" class= "logo" style="margin-top: 1%; margin-left: 10%; width:10%; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));"></a>
          
          <div style="margin-top: 6%; display: inline-block; width: 100%; margin-left: -1%;">
             
            <a href="account.php"><img src="../images/myAccount.png" class= "logo" 
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
                <a href="logout.php" class="navButton"><b>SIGN OUT</b></a>
              </div>
        </div>
        
      </div>
    </header>

  <div style="background: #f7f5e4;">
      <br><br><br><br><br>
      <h1 style="margin-top: 10%; font-size: 2.5em; text-align: center;font-family: copyright Klim Type Foundry; line-height: .2em;">
      <b>Become a 
      <span style="font-weight:lighter; font-family:Britannic Bold; font-size: 1em;">SOUS-CHEF</span> 
      member today!</b></h1>

      <h2 style="font-family: GT eesti display trial; text-align: center; font-size: 1.3em;">
        <i>Your best culinary partner because we serve up endless recipe ideas.</i></h2>
        <hr class="introBreak"><br>      
        <hr class="introBreak" style="margin-left: 75%; margin-top: -2.5%;"><br>      

      <div id="payment_page" style="margin-bottom: 5%; margin-left: -5%;">

          <div id="payment_box">
              <form id='payment_form' action='javascript:void(0)'>
              <hr style="margin-bottom: -15%; z-index: 1 !important;">
              <h4 style="margin-top: 16%; text-align: center;font-family: copyright Klim Type Foundry;">
              YOUR CARD INFO: </h4>
              <hr style="z-index: 1 !important; border: 1px solid black;"><br>
                  <label for="name"><br>Cardholder's Name</label>
                  <input type="text" id="name" name="name" required><br>
              
                  <label for="card_number">Card Number</label>
                  <input type="text" id="card_number" name="card_number" placeholder="1234 1234 1234 1234" required><br>

                  <label for="expiraton_date">Expiraton date</label>
                  <input type="text" id="expiraton_date" name="expiraton_date" placeholder="MM/YY" required><br>

                  <label for="cvc">CVC</label>
                  <input type="text" id="cvc" name="cvc" placeholder="CVC" required><br>
              
                  <br><hr style="z-index: 1!important;"><br>
              
                  <input type="submit" value="PAY" id="pay_button" onclick="execute_membership_change()"> 

                  <?php
                        $conn = require __DIR__ . '/db.php';

                        if (isset($_SESSION["user_id"])) {
                            $user_id = $_SESSION["user_id"];

                            $sql = "SELECT `member` FROM `user` WHERE `id` = $user_id";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                
                                $row = mysqli_fetch_assoc($result);
                                $curr_plan = $row['member'];
                            }
                            echo "<input type='hidden' value='$curr_plan' id='current_plan'>";
                        }
                        else{
                            header('Location: login.php');
                        }
                        
                    ?>
              </form>
          </div>

          <div id="plan_info" style="margin-top: 6.4%;">
            <hr style="margin-bottom: -15%; width: 100%;">
            <h4 style="margin-top: 16%; text-align: center;font-family: copyright Klim Type Foundry;">
              YOU'VE SELECTED: </h4>
              <hr style="z-index: -1 !important; border: 1px solid black; width: 100%;"><br><br>
              <div id="upgrade_choices">
                  <input type="radio" name="upgrade_option" id="premium_button"  onclick="show_premium_info()" value='1' checked>
                  <label for="premium_button" id="premium_label" class="plan_buttonP">Premium Membership</label><br>
                  <input type="radio" name="upgrade_option" id="elite_button"  onclick="show_elite_info()" value='2'>
                  <label for="elite_button" id="elite_label" class="plan_buttonE">Elite Membership</label>
              </div><br><br><br>

              <div class="column" id="premium_info" style="background:#c6a559; box-shadow: 0px 1px 1px 1px #fffef7 inset;">
                  <img src="../images/membershipTwo.png" 
                  style="width: 60%; filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.631));">
                  <p class="plans">PREMIUM MEMBERSHIP</p>
                  <hr style="border: 1.5px solid #fffef7; margin-top: -5%;">
                  <p class="priceText">12 weeks for</p>
                  <p class="price">$3</p>
                  <hr style="border: .8px solid #fffef7; margin-bottom: 5%; margin-top: 2%;">
                  <p class="benefits">Unlimited advanced recipe searches.</p>
                  <p class="benefits">Save up to 25 favorite recipes.</p>
                  <p class="benefits">Access to up 25 friends' favorite recipes.</p><br>
              </div>

              <div class="column" id="elite_info" style="display: none; box-shadow: 0px 1px 1px 1px #fffef7 inset;">
                  <img src="../images/membershipThree.png"        
                  style="width: 60%; filter: drop-shadow(3px 3px 3px rgba(0, 0, 0, 0.631));">
                  <p class="plans">ELITE MEMBERSHIP</p>
                  <hr style="border: 1.5px solid #f8f1e0; margin-top: -5%;">
                  <p class="priceText">12 weeks for</p>
                  <p class="price">$5</p>     
                  <hr style="border: .8px solid #f8f1e0; margin-bottom: 5%; margin-top: 2%;">
                  <p class="benefits">Unlimited advanced recipe searches.</p>
                  <p class="benefits">Unlimited access to your favorite recipes.</p>
                  <p class="benefits">Unlimited access to your friends' favorite recipes.</p><br>
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
    </div>
  </body>
</html>
