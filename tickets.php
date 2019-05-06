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
<body class="bubbles">
    <header class="bubbles__header">
    <a href="home.php">
            <img src="./assets/icones/back.png">
        </a>
        <a href="profil2.php">
            <div class="profil2">
                <img  src="./assets/images/profil.png">
                <p><?php echo $_SESSION['username']; ?></p>
            </div>
        </a>
    </header>
        <h1 class="bubbles__title">Vos tickets de caisse</h1>
        <section class="bubbles__day">
            <p class="bubbles__day--title">Aujourd'hui</p>
            <article class="bubbles__day--alltickets">
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
            </article>
        </section>
        <section class="bubbles__day">
            <p class="bubbles__day--title">Hier</p>
            <article class="bubbles__day--alltickets">
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
            </article>
        </section>
        <section class="bubbles__day">
            <p class="bubbles__day--title">04/05/2019</p>
            <article class="bubbles__day--alltickets">
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
            </article>
        </section>
        <section class="bubbles__day">
            <p class="bubbles__day--title">03/05/2019</p>
            <article class="bubbles__day--alltickets">
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
            </article>
        </section>
        <section class="bubbles__day">
            <p class="bubbles__day--title">02/05/2019</p>
            <article class="bubbles__day--alltickets">
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
            </article>
        </section>
        <section class="bubbles__day">
            <p class="bubbles__day--title">01/05/2019</p>
            <article class="bubbles__day--alltickets">
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
                <a href="ticket.php">
                <div class="bubbles__day--ticket">
                    <p class="bubbles__day--txt">Leclerc <br> Clichy</p>
                    <p class="bubbles__day--txt">12h15 <br> 51.23€</p>
                </div>
                </a>
            </article>
        </section>
        <a href="scan.php">
        <div class="bubbles__scan">
            <img  class="bubbles__scan--camera" src="./assets/images/camera.png" >
            <p>SCANNER</p>
        </div>
        </a>
</body>
</html>