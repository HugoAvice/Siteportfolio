<section id="apropos">
    <h1>À PROPOS :</h1>
    <br>
    <article>
        <?php
        $data=yaml_parse_file('yaml/apropos.yml');
        echo "<p>".$data["accroche"]."</p>";
        echo "<p>".$data["presentation"]."</p>";
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