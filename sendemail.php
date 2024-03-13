<?php
$url = 'https://api.elasticemail.com/v2/email/send';

$customerEmail = $_POST['email'];

// Format email
$dateString = $_POST['date'];
$timestamp = strtotime($dateString);
$formattedDate = date("d/m/Y", $timestamp);

$subjectHtml = "Uspesno ste poslali upit - {$_POST['name']}, $formattedDate";

$bodyHtml = "
    <h1>Hvala vam što ste odabrali našu firmu za iznajmljivanje jedrilica i katamarana. Vaš upit je uspešno primljen.</h1>
    <p>Detalji upita: Ime: {$_POST['name']}, Datum: $formattedDate, Hostesa: {$_POST['hostess']}</p>
    <p>Očekujte naš odgovor u narednih sat vremena kako bismo potvrdili vašu rezervaciju i pružili vam dodatne informacije o daljim koracima.</p>
    <p>U međuvremenu, slobodno nas kontaktirajte ukoliko imate bilo kakvih dodatnih pitanja ili zahteva.</p>
    <p>Srdačan pozdrav,<br>MD SAILING<br>mdsailing@gmail.com</p>
";

try {
    $post = array(
        'from' => 'rezervacije@mdsailing.rs',
        'fromName' => 'Rezervacije MD Sailing',
        'apikey' => 'EB340283AA8C22DFB3C09FF5934A8057B81A3A0C2825C958BC0CEC2AD748C81B9E5362D4B82666311167E57855C30647',
        'subject' => $subjectHtml,
        'to' => $customerEmail,
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
