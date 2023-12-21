<section id="competences">
    <h1>COMPÉTENCES :</h1>
    <br>
    <article>
        <?php
        $data=yaml_parse_file('yaml/competences.yml');
        echo "<p>".$data["domaines"]."</p>";
        echo "<p>".$data["domaines1"]."</p>";
        echo "<p>".$data["domaines2"]."</p>";
        echo "<p>".$data["certification"]."</p>";
        echo "<p>".$data["scores"]."</p>";
        echo "<p>".$data["scores1"]."</p>";
        echo "<p>".$data["scores2"]."</p>";
        ?>
    </article>
    <br>
    <hr>
    <br>
</section>