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
        <a href="tickets.php">
        <img class="back" src="./assets/icones/back.png">
        </a>
            <h1 class="thirdpage__title"><?php echo $_SESSION['username'].'  '; echo $_SESSION['name']; ?></h1>
            <article class="thirdpage__main">
                <form action="" method="POST">
                    <p class="thirdpage__main--label">Adresse mail</p>
                    <input type="text" class="thirdpage__main--input" disabled placeholder="<?php echo $_SESSION['mail'];?>" required name="mail">
                    <p class="thirdpage__main--label">Prénom</p>
                    <input type="text" class="thirdpage__main--input" disabled placeholder="<?php echo $_SESSION['username'];?>" required name="firstname">
                    <p class="thirdpage__main--label">Nom</p>
                    <input type="text" class="thirdpage__main--input" disabled placeholder="<?php echo $_SESSION['name'];?>" required name="name">
                    <p class="thirdpage__main--label hidden">Mot de passe</p>
                    <input type="password" class="thirdpage__main--input hidden"  required name="password">
                    <input  type="submit" class="thirdpage__main--button1 hidden" value="CONNEXION">
                </form>
                <div id="button" class="thirdpage__main--buttonmodif" onclick="modif();">
                    <p>Modifier mon profil</p>
                    </div> 
                    <div class="thirdpage__main--buttondeco">
                    <p>Se déconnecter</p>
                    </div> 
                </article>
        <div class="allwaves">
        <div class="wave"></div>
        <div class="wave"></div>
        </div>
</section> 


<script src="index.js"></script>
</body>
</html>