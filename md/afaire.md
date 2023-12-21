# Changements à faire
* <span style="color: #FFF500">Changer l'image du home en bleue au hover</span>
* <span style="color: #FFF500">Changer les br en padding</span>
* <span style="color: #FFF500">Mettre formulaire mail</span>
* <span style="color: #FFF500">Mettre grossissement sur les images à l'aide du code ci dessous :</span>
* <span style="color: #FFF500">Verrouiller la taille de la fenêtre avant que la navbar parte en sucette</span>
 
```
<!DOCTYPE html> 
<html lang="en">
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        /* Style de base de l'élément */
        .elementAGrossir {
            width: 100px;
            height: 100px;
            background-color: lightblue;
            display: flex; /* Utilise flexbox pour le centrage */
            justify-content: center; /* Centre horizontalement */
            align-items: center; /* Centre verticalement */
            transition: transform 0.3s; /* Ajoute une transition pour un effet plus fluide */
        }
        /* Applique un grossissement lorsqu'on survole l'élément */
        .elementAGrossir:hover {
            transform: scale(1.2); /* Grossit l'élément de 20% */
        }
        img {
            border-radius: 10px;
            width: 110%;
            height: 110%;
        }
    </style>
    </head>
    <body>
        <!-- L'élément à faire grossir -->
        <img class="elementAGrossir" src="image1.png" alt="Image" />
    </body>
</html> 
```
# Implémentation fonts
```
@font-face {
    font-family: 'manga';
    src: url("/font/manga/mangat.ttf");
}
```
```
article p:child{
    font-family : manga
}
```





