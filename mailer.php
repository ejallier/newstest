<?php
function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

$to      = 'toto@mail.com';
//Vos adresses de test
$subject = 'Un nouveau pack pour vous !';
$message = get_include_contents('index.html');
$headers = "From: \"SSW\"<toto@mail.com>\n"; //Taper ici votre adresse mail
$headers .= "Reply-To: toto@mail.com\n";     //Pareil !!
$headers .= "Content-Type: text/html; charset=\"utf-8\"";

mail($to, $subject, $message, $headers);
