<?php include "config.php"?>
<!doctype html>
<html>

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />

    <style>
    .title4 {
        width: 80%;
        margin: 0 auto;

        padding-top: 10px;
        padding-bottom: 70px;
        text-align: center;
        font-size: 25px;
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(114, 125, 134);
    }

    .title2 {
        padding-top: 40px;
        padding-bottom: 40px;
        text-align: center;
        font-size: 40px;
        font-family: Arial, Helvetica, sans-serif;
        color: white;
    }

    .coin {
        background-color: rgb(30, 64, 95);
        text-align: center;
        padding-top: 160px;

    }

    .container0 {
        background-color: rgb(30, 64, 95);
        height: auto;
        padding-bottom: 30px;
    }

    .container1 {

        height: auto;

        text-align: center;

    }

    .container1 .about {
        padding-top: 15px;
        font-size: 40px;
        font-family: Arial, Helvetica, sans-serif;
        color: white;
    }

    .container1 .intro {
        width: 80%;

        padding-left: 10%;
        padding-top: 10px;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(186, 216, 236);
    }

    .trust1 .textNew {

        width: 100%;
        height: 50px;
        padding-top: 20px;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;

    }

    .trust1 .imagetrust {
        padding-left: 20px;
        width: 90%;
        height: auto;
    }

    .trust1 .line4 {

        color: rgb(30, 64, 95);
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
        margin-top: 10px;
        text-align: center;
        margin-bottom: 15px;
    }

    .trust {
        text-align: center;
        height: auto;
    }

    .trust1 {

        display: inline-block;
        padding-left: 50px;
        padding-right: 50px;
        margin: 0 auto;
        width: 300px;
        padding-bottom: 50px;

    }

    .title3 {
        width: 80%;
        margin: 0 auto;

        padding-top: 40px;
        padding-bottom: 10px;
        text-align: center;
        font-size: 40px;
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(30, 64, 95);
    }


    .team {

        width: 100%;
        height: auto;
        text-align: center;
        overflow: hidden;
        clear: both;
        background-color: rgb(30, 64, 95);
    }

    .new {
        width: 300px;
        margin:0 auto;
        display: inline-block;
    }

    .new .imageNew {

        width: 60%;
        height: auto;
        border-radius: 50%;

        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    }

    .new .textNew {

        width: 100%;
        height: 50px;
        font-size: 20px;
        padding-top: 20px;
        text-align: center;
        color: white;
        font-family: Arial, Helvetica, sans-serif;

    }
    .containerTrust {
        margin: 0 auto;
        display: block;
        width: 90%;
    }
    </style>
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


    <div class="container0">
        <div class="coin">
            <img src="images/2bet.png" width="250px">
        </div>

        <div class="container1">
            <p class="about">About Us</p>
            <p class="intro">2Bets is a company created in 2010 and has been successful ever since. Its objective is to provide people with the chance of 
            observing stocks markets and make bets about their evolution. More and more people have interest in betting games, specially regarding stocks. 
            Our team gives you an opportunity to participate in a thrilling experience, full of excitement and sometimes uncertainty, which might even help you 
            achieve varied benefits. Along with other people who share this very same passion, users are able to compete in a friendliness manner.
 <br><br>The website provides you with the latest stock values of 20 companies.
<br><br>In addition, you are able to bet on whether these 20 companies stocks’ values will increase, decrease or maintain, and, if you guess correctly you are 
rewarded with credits. These credits are the trade currency of the website.
One can make use of these credits to buy items or discounts in some stores.
<br><br>First of all, it is necessary to register in the website. Each new user is then provided with 30 credits. 
<br><br>If you have any doubt remaining, please contact us.
Hope you enjoy!
</p>

        </div>
    </div>

    <div class="trust">
        <p class="title3">Global stock betting leader</p>
        <p class="title4">Find out why millions of people around the world choose to bet with 2Bet</p>
        <div class=containerTrust>
            <div class="trust1">
                <img class="imagetrust" src="images/pic11.png">
                <p class="line4">Confidence</p>
                <div class="textNew">Our company is fully regulated by the FCA and CySec</div>
            </div>


            <div class="trust1">
                <img class="imagetrust" src="images/pic22.png">
                <p class="line4">Security</p>
                <div class="textNew">Your funds are protected by industry-leading security protocols</div>
            </div>


            <div class="trust1">
                <img class="imagetrust" src="images/pic33.png">
                <p class="line4">Privacy</p>
                <div class="textNew">We will never share your private data without your permission</div>
            </div>
        </div>
    </div>


    <div class="team">

        <p class="title2">Our team</p>

        <div class="new">
            <img class="imageNew" src="images/rita.jpg" width="300" height="200">
            <div class="textNew">Ana Costa</div>
        </div>

        <div class="new">
            <img class="imageNew" src="images/carina.jpg" width="300" height="200">
            <div class="textNew">Carina Eira</div>
        </div>

        <div class="new">
            <img class="imageNew" src="images/naomi.jpg" width="300" height="200">
            <div class="textNew">Naomi Custódio</div>
        </div>

        <div class="new">
            <img class="imageNew" src="images/renato.png" width="300" height="200">
            <div class="textNew">Renato Severiano</div>
        </div>

    </div>

</body>

</html>