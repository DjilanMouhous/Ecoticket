<?php
if( isset($_POST) AND !empty($_POST) ){
    $mail = $_POST["mail"];
    $mdp = hash('ripemd160',$_POST["password"]);
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];

    $host = "localhost";
    $user = "root";
    $password = "";
    $bdd = "ecoticket"; 


    // Connexion au serveur MySQL et choix de la BDD

    $lien = mysqli_connect($host,$user,$password);
    mysqli_select_db($lien, 'ecoticket'); //insérer ici le nom de la bdd


    // Requête SQL

    $sql1 = "INSERT INTO utilisateur(user_mail,user_password,user_name,user_firstname) values('$mail','$mdp','$nom','prenom')";
    $sql = "select * from utilisateur where utilisateur_mail='$mail'";
    
    
    // Exécution de la requête SQL
    
    $result = mysqli_query($lien, $sql);
    
    // Récupération des résultats
    $num = mysqli_num_rows($result);
    
    if ($num==1){
        echo 'Le mail est déja utilisé';
    } else{
        $result = mysqli_query($lien, $sql1);
        if ($result) {
            echo'Vous êtes bien inscrit';
        } else {
            echo 'Un probleme est survenu, merci de contacter le webmaster avec l\'erreur suivante <br />';
            echo($lien->error);
        }
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
            <h1 class="thirdpage__title">Inscrivez vous</h1>
            <article class="thirdpage__main">
                <form action="" method="POST">
                    <article id="part1">
                    <p class="thirdpage__main--label">Adresse mail</p>
                    <input type="text" class="thirdpage__main--input" required name="mail">
                    <p class="thirdpage__main--label">Mot de passe</p>
                    <input type="password" class="thirdpage__main--input" required name="password">
                    <p class="thirdpage__main--label">Confirmation du mot de passe</p>
                    <input type="password" class="thirdpage__main--input" required name="password">
                    <div class="thirdpage__main--button" onclick="document.getElementById('poubelle').innerHTML=document.getElementById('part1').innerHTML;document.getElementById('part1').innerHTML=document.getElementById('part2').innerHTML">
                    <p>SUIVANT</p>
                    </div> 
                    </article>

                    
                    <a href="connexion.php"><p class="thirdpage__inscription1">Vous avez déjà un compte ?</p></a>
                </article>
        <div class="allwaves">
        <div class="wave"></div>
        <div class="wave"></div>
        </div>
    </section> 

<aside style="display : none;" id="part2">

                    <p class="thirdpage__main--label">Prénom</p>
                    <input type="text" class="thirdpage__main--input" required name="nom">
                    <p class="thirdpage__main--label">Nom</p>
                    <input type="text" class="thirdpage__main--input" required name="prenom">
                    <input type="submit" class="thirdpage__main--button1" value="INSCRIPTION">
                    
</aside>
<div id="poubelle">

</div>
</body>
</html>