<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences professionnelles</title>
    <link rel="stylesheet" type="text/css" href="css/accueil2.css">
    <link rel="shortcut icon" href="./../favicon2.png" type = "image/png"/>
    <script src="./../js/accueil2.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="primary-slideshow">
                <h1 class="name">Hugo AVICE</h1>  
                <h1 class="name">Compétences professionnelles</h1>  
                <h1 class="name">Hugo AVICE</h1>  <!-- Permet de faire une animation de défilement en CSS dans le header de la page qui alterne une fois sur 2 avec le prénom,nom et compétences professionnelles, cette animation reprend du début toute les 13s-->
                <h1 class="name">Compétences professionnelles</h1>  
                <h1 class="name">Hugo AVICE</h1>  
            </div>
    </div>
        </header>
    <nav class="navbar">
        <ul>
            <li><a href="#accueil"><img class="home" src="image/home.png" srcset="image/home.svg" height="10px" width="10px" /></a></li>
            <li><a href="#apropos">About</a></li>
            <li><a href="#competences">Skills</a></li>
            <li><a href="#experience">Expérience</a></li>      <!-- Barre de navigation du site qui permet d'enmener à la destination quand on clique dessus -->
            <li><a href="#formation">Formation</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <main>
<?php

require_once('vendor/autoload.php');
include("php/accueil.php");
include("php/apropos.php");
include("php/competences.php");              
include("php/experience.php");
include("php/formation.php");
?>
                                                        <!-- Au dessus, importation des fichiers PHP -->
</main>
    <footer>
      <?php include("php/contact.php"); ?>
      <form method="post">
      <br>
      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom" required>
      <br />
      <label for="prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom" required>
      <br />
      <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <br />
      <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LfgpykpAAAAAEJrCgPc7LETdvSkxCu9M1_0Cu3V"></div>
      <br/>
      <input type="submit" value="Envoyer" class="custom-button">
    </form>
    </footer>
</body>
</html>
