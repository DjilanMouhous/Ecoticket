

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
        <a href="connexion.php">
        <img class="back" src="./assets/icones/back.png">
        </a>
            <h1 class="thirdpage__title2">Nouveau mot de passe</h1>
            <article class="thirdpage__main">
                <form action="connexion.php" method="POST">
                    <p class="thirdpage__main--label">Adresse mail</p>
                    <input type="text" class="thirdpage__main--input" required name="mail">
                    <p class="thirdpage__main--label">Mot de passe</p>
                    <input type="password" class="thirdpage__main--input" required name="password">
                    <input type="submit" class="thirdpage__main--button1" value="VALIDER">
                </form>
                    
                </article>
        <div class="allwaves">
        <div class="wave"></div>
        <div class="wave"></div>
        </div>
</section> 
</body>
</html>