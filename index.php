<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=375, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <title>Ecoticket</title>
</head>
<body>

<section class="firstpage" id="first" onclick="$('#first').fadeOut();">         
    <img class="firstpage__wave--topleft animated bounceInLeft" src="./assets/images/Tracé 3.png">
    <div class="firstpage__main">
        <h1 class="firstpage__main--title  animated fadeIn">ECOTICKET</h1>
        <h2 class="firstpage__main--subtitle">Le meilleur gestionnaire de tickets de caisse</h2>
    </div>
    <img class="animated bounceInRight firstpage__wave--bottomright " src="./assets/images/Tracé 2.png">
</section>


<section class="secondpage" >         
    <img class="firstpage__wave--topleft" src="./assets/images/Tracé 3.png">
    <div class="firstpage__main">
        <h1 class="secondpage__title">Avant de démarrer :</h1>
        <a href="connexion.php">
            <div class="secondpage__button">
                <p class="secondpage__button--txt">Connectez vous</p>
            </div>
        </a>
        <a href="inscription.php">
            <div class="secondpage__button">
                <p class="secondpage__button--txt">Inscrivez vous</p>
            </div>
        </a>
    </div>
    <img class="firstpage__wave--bottomright" src="./assets/images/Tracé 2.png">
</section>


<script type="text/javascript">
    $(document).ready(function () {
    setTimeout(function(){
            $('#first').fadeOut();
        }, 4000);

    });

</script>
</body>
</html>