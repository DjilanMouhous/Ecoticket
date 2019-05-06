<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=375, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <title>Ecoticket</title>
</head>
<body>
    <section class="thirdpage">
        <a href="profil.php">
            <div class="profil">
                <img  src="./assets/images/profil.png">
                <p><?php echo $_SESSION['username']; ?></p>
            </div>
        </a>
            <h1 class="thirdpage__title">Bienvenue <span><?php echo $_SESSION['username']; ?></span> </h1>
            <article style="text-align : center; margin: auto;" class="thirdpage__main">
                <img class="QR" src="./assets/images/QR.png">
                    <a href="scan.php">
                    <div class="thirdpage__main--buttonblue">
                    <p>Scanner un ticket</p>
                    </div> 
                    </a>
                    <a href="tickets.php">
                    <div class="thirdpage__main--buttonwhite2">
                    <p>Accéder à vos tickets</p>
                    </div> 
                    </a>
                
                    
                </article>
        <div class="allwaves">
        <div class="wave"></div>
        <div class="wave"></div>
        </div>
</section> 
</body>
</html>