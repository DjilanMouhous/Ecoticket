<?php
if( isset($_POST) AND !empty($_POST) ){
    $mail = $_POST["mail"];
    $mdp = hash('ripemd160',$_POST["password"]);

    $host = "localhost";
    $user = "root";
    $password = "";
    $bdd = "ecoticket"; 
    

    // Connexion au serveur MySQL et choix de la BDD

    $lien = mysqli_connect($host,$user,$password);
    mysqli_select_db($lien, 'ecoticket'); //insérer ici le nom de la bdd


    // Requête SQL

    $sql = "select * from user where user_mail='$mail' && user_password='$mdp'";


    // Exécution de la requête SQL

    $result = mysqli_query($lien, $sql);

    // Récupération des résultats
    $num = mysqli_num_rows($result);
    
    if ($num==1){
        
        
        session_start([
            'cookie_lifetime' => 86400,
        ]);
        while ($truc = mysqli_fetch_assoc($result)){
            $_SESSION['username'] = $truc["user_firstname"];
            $_SESSION['id'] = $truc["id_user"];
            $_SESSION['name'] = $truc["user_name"];
            $_SESSION['mail'] = $truc["user_mail"];
            

        }
        header('Location: home.php');
        exit();
    } else{
       
    }
}
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
        <a href="index.php">
        <img class="back" src="./assets/icones/back.png">
        </a>
            <h1 class="thirdpage__title">Connectez vous</h1>
            <article class="thirdpage__main">
                <form action="" method="POST">
                    <p class="thirdpage__main--label">Adresse mail</p>
                    <input type="text" class="thirdpage__main--input" required name="mail">
                    <p class="thirdpage__main--label">Mot de passe</p>
                    <input type="password" class="thirdpage__main--input" required name="password">
                    <input type="submit" class="thirdpage__main--button1" value="CONNEXION">
                </form>
                    <a href="forgot.php"><p class="thirdpage__pb">Problème de connexion ? Cliquez ici</p></a>
                    <a href="inscription.php"><p class="thirdpage__inscription">Vous n'avez pas de compte ?</p></a>
                </article>
        <div class="allwaves">
        <div class="wave"></div>
        <div class="wave"></div>
        </div>
</section> 
</body>
</html>