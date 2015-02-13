<?php
function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        return ob_get_clean();
    }
    return false;
}

$to      = 'ejallier@cefim.eu';
//Vos adresses de test
$subject = 'Un nouveau pack pour vous !';
$message = get_include_contents('index.html');
$headers = "From: \"SSW\"<ssw@erwannjallier.com>\n"; //Taper ici votre adresse mail
$headers .= "Reply-To: ssw@erwannjallier.com\n";     //Pareil !!
$headers .= "Content-Type: text/html; charset=\"utf-8\"";

mail($to, $subject, $message, $headers);
