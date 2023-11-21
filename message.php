<?php
require_once "./templates/header-autres.php";
?>

<main class="main-contact">
<div class="pad-top">

<p class="form-title">Votre message a bien été envoyé.</p>

<?php
$prenom = $_POST['Prénom'];
$nom = $_POST['Nom'];
$email = $_POST['Email'];
$message_recu = $_POST['Message'];


$to      = 'tuyen.nguyen.fr@gmail.com';
$subject = $_POST['Sujet'];
$message = $message_recu."\r\n".$prenom."\r\n".$nom."\r\n".$email;
$headers = 'From: contact@tuyen-nguyen.com' . "\r\n" .
'Reply-To: contact@tuyen-nguyen.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

</div>
</main>

<div class="lien-CV"></div>

<?php
require_once "./templates/footer.php";
?>