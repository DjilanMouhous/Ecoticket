

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
            <h1 class="thirdpage__title">Saississez le code reçu par mail</h1>
            <article class="thirdpage__main">
                <form action="reset.php" method="POST">
                    <div class="allverif">
                    <input type="textarea" maxlength="1" required class="verif" name="nbr1">
                    <input type="textarea" maxlength="1" required class="verif" name="nbr2">
                    <input type="textarea" maxlength="1" required class="verif" name="nbr3">
                    </div>
                    <input type="submit" class="thirdpage__main--button2" value="VALIDER LA SAISIE">
                    <a href="forgot2.php">
                    <div class="thirdpage__main--buttonwhite">
                    <p>RENVOYER UN CODE</p>
                    </div> 
                    </a>
                </form>
                    
                </article>
        <div class="allwaves">
        <div class="wave"></div>
        <div class="wave"></div>
        </div>
</section> 
</body>
</html>