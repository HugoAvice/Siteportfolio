<section id="contact">
    <h1>Contactez Moi :</h1>
    <br>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require_once './vendor/autoload.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $message = $_POST['message'];
    $email = $_POST['email'];

    // PHPMailer initialization
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'hugoavice.contact@gmail.com';
        $mail->Password = 'lxnq nunw jfpa foad';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';

        // Sender and recipient settings
        $mail->setFrom('hugoavice.contact@gmail.com', 'Hugo Avice');
        $mail->addAddress('hugoavice.contact@gmail.com', 'Hugo Avice');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Formulaire reçus';
        $mail->Body = "First Name: $nom<br>Last Name: $prenom<br>message: $message<br>email: $email";

        if (!$mail->send()) {
            echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
        } else {
            echo 'Le message a été envoyé avec succès.';
        }

        $mail->smtpClose();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>

