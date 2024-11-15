<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "seddik79@gmail.com"; // Remplacez par votre adresse e-mail
    $subjectEmail = "Message de contact: " . $subject;
    $messageBody = "Nom: $name\n";
    $messageBody .= "E-mail: $email\n";
    $messageBody .= "Numéro de téléphone: $phone\n";
    $messageBody .= "Objet: $subject\n";
    $messageBody .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subjectEmail, $messageBody, $headers)) {
        echo "Votre message a été envoyé avec succès!";
    } else {
        echo "Une erreur est survenue lors de l'envoi de votre message.";
    }
}
?>
