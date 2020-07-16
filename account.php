<?php include "config.php"?>
<!doctype html>
<html>

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />


</head>

<body>

    <div class="container">
        <div class="navbar">
            <img class="logo" src="images/2bet.png" width="75px">
            <a href="home.php">Home</a>

            <div class="dropdown">
                <button class="dropbtn">Bets
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="bets.php">Bets</a>
                    <?php if (isset($_SESSION["idUser"])) { ?>
                    <a href="myBets.php">My bets</a></li>
                    <?php } ?>
                    <a href="rank.php">Ranks</a>
                </div>
            </div>

            <a href="Discounts.php">Offers</a>
            <a href="Credits.php">Credits</a>
            <div class="dropdown">
                <button class="dropbtn">Contacts
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="aboutUs.php">About us</a>
                    <a href="contact.php">Contact us</a>
                </div>
            </div>
            <?php if (isset($_SESSION["idUser"])) { ?>
            <a href="logout.php" style=float:right>Logout</a>
            <a href="profile.php" style=float:right>Profile</a>
            <?php } else { ?>
            <a class="account" href="login.php" style=float:right>Login</a>
            <?php } ?>
        </div>
    </div>



</body>

</html>