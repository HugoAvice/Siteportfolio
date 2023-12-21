<section id="formation">
    <h1>Formation :</h1>
    <br>
    <article>
        <?php
        $data=yaml_parse_file('yaml/formation.yml');
        echo "<p>".$data["lycee"]."</p>";
        echo "<p>".$data["debut"]."</p>";
        echo "<p>".$data["fin"]."</p>";
        echo "<p>".$data["lieu"]."</p>";
        echo '<a href="image/'.$data["cv"].'">PDF</a>';
        ?>
    </article>
    <br>
    <hr>
    <br>
</section>

       