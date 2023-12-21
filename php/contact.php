<section id="contact">
    <h1>Contactez Moi :</h1>
    <br>
    <?php
        $data=yaml_parse_file('yaml/contact.yml');
        echo "<p>".$data["contact"]."</p>";
    ?>
</section>
<?php
$recaptchaValid = false;
$recaptchaError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destinataire = "hugoavice.contact@gmail.com";
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];
    $expediteur = $_POST["expediteur"]; 
    $recaptchaSecretKey = "6LfgpykpAAAAAAZbLq2u6k-tWyPF45_WAm5k4v8N";
    $recaptchaResponse = $_POST["g-recaptcha-response"];

    $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify";
    $recaptchaData = [
        'secret' => $recaptchaSecretKey,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR'],
    ];

    $recaptchaOptions = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($recaptchaData),
        ],
    ];

    $recaptchaContext = stream_context_create($recaptchaOptions);
    $recaptchaResult = file_get_contents($recaptchaUrl, false, $recaptchaContext);
    $recaptchaData = json_decode($recaptchaResult, true);

    if (!$recaptchaData['success']) {
        $recaptchaError = "La reCAPTCHA n'a pas été validée. Veuillez cocher la case reCAPTCHA avant d'envoyer le formulaire.";
    } else {
        $recaptchaValid = true;
    }
}
?>

