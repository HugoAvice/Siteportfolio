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
//require_once("bibli/yaml/yaml.php");
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
      <form method="post" action="php/envoi.php">
      <label for="expediteur">Expéditeur:</label>
      <input type="email" name="expediteur" required><br>
      <label for="sujet">Sujet:</label>
      <input type="text" name="sujet" required><br>
      <label for="message">Message:</label>
      <input type="text" name="message" required><br>
       
    <!--
      <div id="moncaptchat" class="g-recaptcha" data-sitekey="6LfgpykpAAAAAEJrCgPc7LETdvSkxCu9M1_0Cu3V"></div>
      <br />
      <span id="recaptcha-error" style="color:red;">
          <?php //echo isset($recaptchaError) ? $recaptchaError : ''; ?>
      </span>
      <br />
      <input type="submit" value="Envoyer" class="custom-button">
      <input type="reset" value="Reset" class="custom-button">
-->
<div class="g-recaptcha" data-sitekey="6LfgpykpAAAAAEJrCgPc7LETdvSkxCu9M1_0Cu3V"></div>
<?php
    if($_GET["captcha"]==0){
        echo "<p>Veuillez cochez la case</p>";
    }
?>
<input type="submit" value="Envoyer" class="custom-button">
    </form>
<script src='https://www.google.com/recaptcha/api.js'></script>
    </footer>
</body>
</html>
