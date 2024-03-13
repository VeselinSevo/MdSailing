<?php
$url = 'https://api.elasticemail.com/v2/email/send';

// Extracting values from $_POST (not recommended, but retained for your reference)
// extract($_POST);

// Accessing $_POST variables directly
$name = $_POST['name'];
$email = $_POST['email'];
$hostess = $_POST['hostess'];
$dateString = $_POST['date'];
$skipper = $_POST['skipper'];
$phone = $_POST['phone'];
$inclusive = $_POST['inclusive'];
$people = $_POST['people'];
$msg = $_POST['message'];
$boatType = $_POST['boatType'];

// Convert the input date string to a Unix timestamp using strtotime()
$timestamp = strtotime($dateString);

// Format the timestamp into the desired format "dd/mm/yyyy" using date()
$formattedDate = date("d/m/Y", $timestamp);

// Output the formatted date
echo $formattedDate; // Output: "12/03/2024"

$subjectHtml = "Novi upit - Korisnik $name ocekuje da ga kontaktirate"; // Subject for the email

$bodyHtml = "
    <h1>Novi upit!</h1>

    Sjajne vesti, dobili ste novi upit za rezervaciju! U nastavku se nalaze detaljne informacije:
    <br>
    Detalji upita: 
    <br>
    Ime: $name
    <br>
    Email: $email
    <br>
    Datum: $formattedDate
    <br>
    Hostesa: $hostess
    <br>
    Skiper: $skipper
    <br>
    Telefon: $phone
    <br>
    Inclusive: $inclusive
    <br>
    Broj osoba: $people
    <br>
    Tip pllovila: $boatType
    <br>
    Poruka: $msg
    Takodje, korisnik je isto dobio mejl i ocekuje da ga kontaktirate u sto kracem roku.
";

try {
    $post = array(
        'from' => 'sender@mdsailing.rs',
        'fromName' => 'Sender MD Sailing',
        'apikey' => 'EB340283AA8C22DFB3C09FF5934A8057B81A3A0C2825C958BC0CEC2AD748C81B9E5362D4B82666311167E57855C30647',
        'subject' => $subjectHtml,
        'to' => 'rezervacije@mdsailing.rs',
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
