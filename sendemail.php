<?php
session_start();
$customerEmail = $_POST['email'];
// Format email
$dateString = $_POST['date'];
$timestamp = strtotime($dateString);
$formattedDate = date("d/m/Y", $timestamp);

$lang = isset($_SESSION['language']) ? $_SESSION['language'] : 'sr';

var_dump($lang);

if ($lang == 'de') {
    $subjectHtml = "Sie haben Ihre Anfrage erfolgreich gesendet, $formattedDate";

    $bodyHtml = "
        <h1>Vielen Dank, dass Sie sich für unser Unternehmen entschieden haben, um Yachten und Katamarane zu mieten. Ihre Anfrage wurde erfolgreich entgegengenommen.</h1>
        <p>Anfragedetails: Name: {$_POST['name']}, Datum: $formattedDate, Hostess: {$_POST['hostess']}</p>
        <p>Erwarten Sie unsere Antwort in der nächsten Stunde, um Ihre Reservierung zu bestätigen und Ihnen weitere Informationen zu den nächsten Schritten zu geben.</p>
        <p>Kontaktieren Sie uns in der Zwischenzeit gerne, wenn Sie weitere Fragen oder Wünsche haben.</p>
        <p>Mit freundlichen Grüßen,<br>MD SAILING<br>mdsailing@gmail.com</p>
    ";

    $bodyHtml = "
    <!DOCTYPE html>
    <html lang='de'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Email</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                color: #0f172a;
                background-color: #ffffff;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #e2e8f0;
                border-radius: 8px;
                background-color: #ffffff;
            }
            .header {
                background-color: #0f172a;
                color: #ffffff;
                padding: 10px 20px;
                border-radius: 8px 8px 0 0;
                text-align: center;
            }
            .content {
                padding: 20px;
            }
            .footer {
                padding: 10px 20px;
                border-top: 1px solid #e2e8f0;
                text-align: center;
                color: #94a3b8;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>MD Sailing</h1>
            </div>
            <div class='content'>
                <h2>Sehr geehrte Damen und Herren,</h2>
                <p>Vielen Dank, dass Sie sich für MD Sailing für Ihr Abenteuer in der Adria entschieden haben.</p>
                <p>Wir möchten Ihnen mitteilen, dass wir Ihre Reservierung für die Anmietung eines Katamarans/einer Yacht erhalten haben. Ihre Reservierung wurde erfolgreich in unserem System erfasst.</p>
                <p>Unser Team wird Ihre Reservierung überprüfen und wir werden Sie bald kontaktieren, um die Bestätigung und weitere Details zu besprechen. Bitte bleiben Sie unter der angegebenen Kontaktinformation erreichbar, damit wir alle Details besprechen können und sicherstellen, dass Ihre Reise mit uns so angenehm wie möglich wird.</p>
                <p>Wenn Sie weitere Fragen oder Wünsche haben, zögern Sie bitte nicht, uns zu kontaktieren. Unser Ziel ist es, Ihnen ein unvergessliches Erlebnis mit unseren Booten zu bieten.</p>
                <p>Nochmals vielen Dank für Ihr Vertrauen, und wir freuen uns darauf, Teil Ihrer Reise zu sein.</p>
                <p>Mit freundlichen Grüßen,</p>
                <p>Nikola Jančić</p>
                <p>MD Sailing</p>
                <p>+381605159498</p>
            </div>
            <div class='footer'>
                <p>&copy; 2024 MD Sailing. Alle Rechte vorbehalten.</p>
            </div>
        </div>
    </body>
    </html>
    ";
} else {
    $subjectHtml = "Uspešno ste poslali upit, $formattedDate";

    $bodyHtml = "
        <h1>Hvala vam što ste odabrali našu firmu za iznajmljivanje jedrilica i katamarana. Vaš upit je uspešno primljen.</h1>
        <p>Detalji upita: Ime: {$_POST['name']}, Datum: $formattedDate, Hostesa: {$_POST['hostess']}</p>
        <p>Očekujte naš odgovor u narednih sat vremena kako bismo potvrdili vašu rezervaciju i pružili vam dodatne informacije o daljim koracima.</p>
        <p>U međuvremenu, slobodno nas kontaktirajte ukoliko imate bilo kakvih dodatnih pitanja ili zahteva.</p>
        <p>Srdačan pozdrav,<br>MD SAILING<br>mdsailing@gmail.com</p>
    ";

    $bodyHtml = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Email</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                color: #0f172a;
                background-color: #ffffff;
                margin: 0;
                padding: 0;
            }
            .container {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #e2e8f0;
                border-radius: 8px;
                background-color: #ffffff;
            }
            .header {
                background-color: #0f172a;
                color: #ffffff;
                padding: 10px 20px;
                border-radius: 8px 8px 0 0;
                text-align: center;
            }
            .content {
                padding: 20px;
            }
            .footer {
                padding: 10px 20px;
                border-top: 1px solid #e2e8f0;
                text-align: center;
                color: #94a3b8;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>MD Sailing</h1>
            </div>
            <div class='content'>
                <h2>Poštovani,</h2>
                <p>Hvala Vam što ste odabrali MD Sailing za Vašu avanturu na Jadranskom moru.</p>
                <p>Želimo Vas obavestiti da smo primili Vašu rezervaciju za iznajmljivanje katamarana/jedrilice. Vaša rezervacija je uspešno evidentirana u našem sistemu.</p>
                <p>Naš tim će pregledati Vašu rezervaciju i uskoro ćemo Vas kontaktirati radi potvrde i daljih detalja. Molimo Vas da ostanete dostupni na navedenoj kontakt informaciji kako bismo zajedno dogovorili sve pojedinosti i osigurali da Vaše putovanje s nama bude što ugodnije.</p>
                <p>Ukoliko imate bilo kakvih dodatnih pitanja ili zahteva, slobodno nas kontaktirajte. Naš cilj je osigurati Vam nezaboravno iskustvo sa našim plovilima.</p>
                <p>Još jednom, hvala Vam na poverenju i radujemo se što ćemo biti deo Vašeg putovanja.</p>
                <p>Srdačan pozdrav,</p>
                <p>Nikola Jančić</p>
                <p>MD Sailing</p>
                <p>+381605159498</p>
            </div>
            <div class='footer'>
                <p>&copy; 2024 MD Sailing. Sva prava zadržana.</p>
            </div>
        </div>
    </body>
    </html>
    ";
}

//MailJet

$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "rezervacije@mdsailing.rs",
                'Name' => "Rezervacije MD Sailing"
            ],
            'To' => [
                [
                    'Email' => "$customerEmail",
                    // 'Name' => "RECIPIENT_NAME"
                ]
            ],
            'Subject' => "$subjectHtml",
            'HTMLPart' => "$bodyHtml"
        ]
    ]
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.mailjet.com/v3.1/send");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt(
    $ch,
    CURLOPT_HTTPHEADER,
    array(
        'Content-Type: application/json'
    )
);
curl_setopt($ch, CURLOPT_USERPWD, "bd37ce81ea72d8514188fc0be30415cb:c41f80b4f8c79a94c030e8204a588230");
$server_output = curl_exec($ch);
curl_close($ch);

$response = json_decode($server_output);
if ($response->Messages[0]->Status == 'success') {
    echo "Email sent successfully.";
}




//ELASTIC EMAIL
// $url = 'https://api.elasticemail.com/v2/email/send';

// $customerEmail = $_POST['email'];

// // Format email
// $dateString = $_POST['date'];
// $timestamp = strtotime($dateString);
// $formattedDate = date("d/m/Y", $timestamp);

// $subjectHtml = "Uspesno ste poslali upit - {$_POST['name']}, $formattedDate";

// $bodyHtml = "
//     <h1>Hvala vam što ste odabrali našu firmu za iznajmljivanje jedrilica i katamarana. Vaš upit je uspešno primljen.</h1>
//     <p>Detalji upita: Ime: {$_POST['name']}, Datum: $formattedDate, Hostesa: {$_POST['hostess']}</p>
//     <p>Očekujte naš odgovor u narednih sat vremena kako bismo potvrdili vašu rezervaciju i pružili vam dodatne informacije o daljim koracima.</p>
//     <p>U međuvremenu, slobodno nas kontaktirajte ukoliko imate bilo kakvih dodatnih pitanja ili zahteva.</p>
//     <p>Srdačan pozdrav,<br>MD SAILING<br>mdsailing@gmail.com</p>
// ";

// try {
//     $post = array(
//         'from' => 'rezervacije@mdsailing.rs',
//         'fromName' => 'Rezervacije MD Sailing',
//         'apikey' => 'EB340283AA8C22DFB3C09FF5934A8057B81A3A0C2825C958BC0CEC2AD748C81B9E5362D4B82666311167E57855C30647',
//         'subject' => $subjectHtml,
//         'to' => $customerEmail,
//         'bodyHtml' => $bodyHtml,
//         'bodyText' => 'Text Body',
//         'isTransactional' => false
//     );

//     $ch = curl_init();
//     curl_setopt_array($ch, array(
//         CURLOPT_URL => $url,
//         CURLOPT_POST => true,
//         CURLOPT_POSTFIELDS => $post,
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_HEADER => false,
//         CURLOPT_SSL_VERIFYPEER => false
//     ));

//     $result = curl_exec($ch);
//     curl_close($ch);

//     echo $result;  
// } catch(Exception $ex) {
//     echo $ex->getMessage();
// }
?>