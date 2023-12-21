<section id="accueil">
    <h1>ACCUEIL :</h1>
    <br>
    <article>
        <?php
        $data=yaml_parse_file('yaml/accueil.yml');
        echo "<p>Je m'appelle ".$data["prenom"]." ".$data["nom"]."</p>";
        echo "<p>".$data["accroche"]."</p>";
        ?>
        <br>
        <?php
        echo '<img class="elementAGrossir" src="image/'.$data["image"].'" />';
        ?>
    </article>
    <br>
    <hr>
    <br>
</section>