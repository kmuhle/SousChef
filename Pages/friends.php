<?php
session_start();
$invalid = false;
$exist = false;
$can_add = true;

$mysqli = require __DIR__ . "/db.php";
$Cur = intval($_SESSION["user_id"]);
$Cur_email = $_SESSION["email"];
$sql = "SELECT * FROM user WHERE id = ?";
$stmt = $mysqli->stmt_init();
if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("i", $Cur);
if ($stmt->execute()) {
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $member = $user['member'];
}


$sql = "SELECT * FROM Friends WHERE User1 = ? AND Status = 1";
$stmt = $mysqli->stmt_init();
if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("i", $Cur);
if ($stmt->execute()) {
    $result = $stmt->get_result();
    $num_friends = mysqli_num_rows($result);
}
$restriction_TEXT;
$restriction_TEXT = "Friends count: {$num_friends} / unlimited";
if ($member == 0) {
    $restriction_TEXT = "Friends count: {$num_friends} / 5";
    if ($num_friends >= 5) {
        $can_add = false;
    }
} else if ($member == 1) {
    $restriction_TEXT = "Friends count: {$num_friends} / 10";
    if ($num_friends >= 10) {
        $can_add = false;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $friend_email = $_POST["user"];
    $sql = "SELECT id FROM user WHERE email = ?";
    $stmt = $mysqli->stmt_init();
    if (!$stmt->prepare($sql)) {
        die("SQL error: " . $mysqli->error);
    }
    $stmt->bind_param("s", $friend_email);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $id = $user['id'];

    }

    // $friend = intval($_POST["user"]);


    // $sql = "SELECT * FROM user WHERE id = ?";
    // $stmt = $mysqli->stmt_init();

    // if (!$stmt->prepare($sql)) {
    //     die("SQL error: " . $mysqli->error);
    // }
    // $stmt->bind_param("i", $friend);

    // if ($stmt->execute()) {
    //     $result = $stmt->get_result();
    //     $user = $result->fetch_assoc();
    // }

    if ($user) {
        $sql2 = "SELECT * FROM Friends Where User1 = ? AND User2 = ?";
        $stmt = $mysqli->stmt_init();
        if (!$stmt->prepare($sql2)) {
            die("SQL error: " . $mysqli->error);
        }
        $stmt->bind_param("ii", $Cur, $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if (!$result->num_rows > 0) {

            $Status = 0;
            $sql1 = "INSERT INTO Friends (User1, User2, Status) VALUES (?, ?, ?)";
            $stmt = $mysqli->stmt_init();
            if (!$stmt->prepare($sql1)) {
                die("SQL error: " . $mysqli->error);
            }
            $stmt->bind_param("iii", $Cur, $id, $Status);
            $stmt->execute();
        } else {
            $exist = true;
        }



    } else {
        $invalid = true;
    }


}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Add Friends Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../template.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="validation.js" defer></script>

    <style>
        .introBreak {
            width: 20%;
            margin-left: 0%;
            border: 6px solid #3d599099;
            opacity: .8;
        }

        .lineThrough {
            width: 35%;
            border: 1px solid black;
            z-index: -1;
            margin-top: -6.5%;
            margin-bottom: 5%;
            margin-left: 0%;
            opacity: .6 !important;
        }

        .lineThroughRight {
            width: 35%;
            border: 1px solid black;
            z-index: -1;
            margin-top: -5%;
            margin-bottom: 10%;
            margin-left: 65%;
            opacity: .6 !important;
        }

        #friend {
            font-size: 1.1em;
            font-family: GT eesti display trial !important;
            text-transform: uppercase;
            line-height: .5%;
        }

        p {
            font-size: 1.1em;
            font-family: GT eesti display trial !important;
            line-height: 1%;
            text-align: center;
            margin-bottom: 0%;
        }

        .acceptButton {
            font-family: GT eesti display trial !important;
            padding: 1.5%;
            cursor: pointer;
            margin: 4%;
            /* margin-left: 38%; */
            margin-bottom: -1%;
            background-color: #c6a559;
            color: #fffef7;
            border: 0px black;
        }

        .declineButton {
            font-family: GT eesti display trial !important;
            padding: 1.5%;
            cursor: pointer;
            margin: 4%;
            margin-left: -0.5%;
            margin-bottom: -1%;
            background-color: #3d5990;
            color: #f8f1e0;
            border: 0px black;
        }

        input {
            margin-bottom: 1%;
            box-shadow: 0px 0px 1px 1px #fffef7 inset;
            padding: 2%;
            border: 1.5px black solid;
            background-color: #fffef7;
            margin-top: -1%;
            width: 35%;
            /* margin-left: 30%; */
        }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <div class="navContainer">
            <a href="index.php"><img src="../images/logo.png" class="logo"
                    style="margin-left: 10%; width:10%; filter: drop-shadow(1.5px 2.5px 0px rgba(0,0,0,0.15));"></a>

            <div style="margin-top: 6%; display: inline-block; width: 100%; margin-left: -1%;">

                <a href="account.php"><img src="../images/myAccount.png" class="logo"
                        style="margin-top: -0.8%; margin-left: 25%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>
                <a href="RecipeBook.php"><img src="../images/favoritesIcon.png" class="logo"
                        style="margin-top: -0.8%; margin-left: 35%; height:4.5%; filter: drop-shadow(.7px .7px 0px rgba(0,0,0,0.15));"></a>
                <a href="search.html"><img src="../images/searchIcon2.png" class="logo"
                        style="margin-top: -0.75%; margin-left: 45%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
                <a href="IngredientSearch.php"><img src="../images/searchIngredients.png" class="logo"
                        style="margin-top: -0.75%; margin-left: 56%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>
                <a href="MakeRecipe.html"><img src="../images/makeRecipes.png" class="logo"
                        style="margin-top: -0.75%; margin-left: 71%; height:4.5%; filter: drop-shadow(.5px .5px 0px rgba(0,0,0,0.15));"></a>

                <div style="margin-left: 84%; margin-top: -.3%;">
                    <a href="logout.php" class="navButton"><b>SIGN OUT</b></a>
                </div>
            </div>

        </div>
    </header>

    <div
        style="margin-top: 5%; padding: 10%; display: flex; justify-content: center; text-align: center; background-color: #f7f5e4;">
        <div style="width: 55%;">
            <h1 style="font-size: 3em;font-family: copyright Klim Type Foundry; margin-bottom: 2%">
                <b>Your
                    <span
                        style="font-weight:lighter !important; font-family:Britannic Bold; font-size: 1em;">SOUS-CHEF</span>
                    Friends</b>
            </h1>
            <span style="font-family: copyright Klim Type Foundry;  font-size: 1.5em; margin-top: -2%;">
                The best culinary partner that connects you to your friends.</span><br><br><br>

            <h1 style="text-align: center">Your Friends</h1>
            <hr class="lineThrough">
            <hr class="lineThroughRight">
            <?php
            echo "<div id='friend'><p>" . $restriction_TEXT . "</p></div><br>";
            $sql3 = "SELECT * FROM Friends WHERE User1 = ? AND Status = 1";
            $stmt = $mysqli->stmt_init();

            if (!$stmt->prepare($sql3)) {
                die("SQL error: " . $mysqli->error);
            }
            $stmt->bind_param("i", $Cur);

            $stmt->execute();

            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $cur_user = $row['User2'];
                $sql = "SELECT * FROM user WHERE id = ?";
                $stmt = $mysqli->stmt_init();
                if (!$stmt->prepare($sql)) {
                    die("SQL error: " . $mysqli->error);
                }
                $stmt->bind_param("i", $cur_user);

                $stmt->execute();
                $resultx = $stmt->get_result();
                $name_list = $resultx->fetch_assoc();
                $friend_name = $name_list['name'];

                echo "<div id='friend'>";
                echo "<p id = 'friend_name'>$friend_name</p>";
                echo "</div>";
                echo "<br>";
            }

            ?>


            <br>
            <h1 style="text-align: center">Your Requests</h1>
            <hr class="lineThrough">
            <hr class="lineThroughRight">
            <?php
            $sql = "SELECT * FROM Friends WHERE User2 = ? AND Status = 0";
            $stmt = $mysqli->stmt_init();

            if (!$stmt->prepare($sql)) {
                die("SQL error: " . $mysqli->error);
            }
            $stmt->bind_param("i", $Cur);

            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                $user1 = $row['User1'];
                $sql = "SELECT * FROM user WHERE id = ?";
                $stmt = $mysqli->stmt_init();

                if (!$stmt->prepare($sql)) {
                    die("SQL error: " . $mysqli->error);
                }
                $stmt->bind_param("i", $user1);
                $stmt->execute();
                $result2 = $stmt->get_result();
                $request = $result2->fetch_assoc();
                $name = $request['name'];
                echo "<form method='POST' action='deliverRequest.php' id = 'request_form'>";
                echo "<p>$name has sent you a friend request.</p>";
                echo "<input type='hidden' name='user1' value='$user1'>";
                echo "<button type='submit' name='response' value='accept'class='acceptButton'>ACCEPT<br></button>";
                echo "<button type='submit' name='response' value='decline' class='declineButton'>DECLINE<br></button>";
                echo "</form>";
            }
            ?>

            <br><br>
            <h1 style="text-align: center">Add Friends</h1>
            <hr class="lineThrough">
            <hr class="lineThroughRight">
            <?php
            if ($invalid):
                echo "<em id = 'warning'>Your friend does not exist</em>";
            endif;
            if ($exist):
                echo "<em id = 'warning'>You already made a request, or you are already their friend</em>";
            endif;
            if (!$can_add):
                echo "<em id = 'warning'>You have reached the limit of friends, consider upgrading to a better plan.</em>";
            endif;
            ?>

            <form method="post" ,id="friends">
                <label for="user">
                    <p>Your Friend's Email</p>
                </label><br>
                <input type="email" name="user" id="user"><br>
                <button class="acceptButton">REQUEST</button>
            </form>
        </div>
    </div>


    <div class=" footer" style="z-index:0; background-color: #fffef7;">
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
                    <img src="../images/fbLogo.png" style="width:2.5em; opacity: 0.9;">
                    <img src="../images/igLogo.png" style="width:2.5em; opacity: 0.9;">
                    <img src="../images/pinterestLogo.png" style="width:2.5em; opacity: 0.9;">
                    <img src="../images/twitterLogo.png" style="width:2.5em; opacity: 0.9;">
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