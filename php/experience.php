<section id="experience">
    <h1>Experience :</h1>
    <br>
    <article>
        <?php
        $data=yaml_parse_file('yaml/experience.yml');
        echo "<p>".$data["experience"]."</p>";
        echo "<p>".$data["cv1"]."</p>";
        echo '<a href="image/'.$data["cv"].'">PDF</a>';
        ?>
    </article>
    <br>
    <hr>
    <br>
</section>