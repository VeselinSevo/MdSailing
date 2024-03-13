<?php
$url = 'https://api.elasticemail.com/v2/email/send';

// Extracting values from $_POST (not recommended, but retained for your reference)
// extract($_POST);

// Accessing $_POST variables directly
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

$subjectHtml = "Nova poruka iz kontakt forme - Korisnik $name ocekuje da ga kontaktirate"; // Subject for the email

$bodyHtml = "
    <h1>Poruka iz kontakt forme!</h1>

    Dobili ste novu poruku iz kontakta! U nastavku se nalaze detaljne informacije:
    <br>
    Detalji upita: 
    <br>
    Ime: $name
    <br>
    Email: $email
    <br>
    Telefon: $phone
    <br>
    Poruka: $msg
    <br>
";

try {
    $post = array(
        'from' => 'sender@mdsailing.rs',
        'fromName' => 'Sender MD Sailing',
        'apikey' => 'EB340283AA8C22DFB3C09FF5934A8057B81A3A0C2825C958BC0CEC2AD748C81B9E5362D4B82666311167E57855C30647',
        'subject' => $subjectHtml,
        'to' => 'info@mdsailing.rs',
        'bodyHtml' => $bodyHtml,
        'bodyText' => 'Text Body',
        'isTransactional' => false
    );
    
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $post,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
        CURLOPT_SSL_VERIFYPEER => false
    ));
    
    $result = curl_exec($ch);
    curl_close($ch);
    
    echo $result;  
} catch(Exception $ex) {
    echo $ex->getMessage();
}
?>