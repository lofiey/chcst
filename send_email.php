<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $offer = htmlspecialchars($_POST['offer']);
    $comments = htmlspecialchars($_POST['comments']);

    $to = "cola@fpq.org";
    $subject = "New Offer for GamesMint.com";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nOffer: $offer\nComments: $comments";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your offer has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
