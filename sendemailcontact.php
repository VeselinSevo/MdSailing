<?php


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





// Mail JET

//MailJet

$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "sender@mdsailing.rs",
                'Name' => "Sender MD Sailing"
            ],
            'To' => [
                [
                    'Email' => "info@mdsailing.rs",
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



// $url = 'https://api.elasticemail.com/v2/email/send';

// // Extracting values from $_POST (not recommended, but retained for your reference)
// // extract($_POST);

// // Accessing $_POST variables directly
// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $msg = $_POST['message'];

// $subjectHtml = "Nova poruka iz kontakt forme - Korisnik $name ocekuje da ga kontaktirate"; // Subject for the email

// $bodyHtml = "
//     <h1>Poruka iz kontakt forme!</h1>

//     Dobili ste novu poruku iz kontakta! U nastavku se nalaze detaljne informacije:
//     <br>
//     Detalji upita: 
//     <br>
//     Ime: $name
//     <br>
//     Email: $email
//     <br>
//     Telefon: $phone
//     <br>
//     Poruka: $msg
//     <br>
// ";

// try {
//     $post = array(
//         'from' => 'sender@mdsailing.rs',
//         'fromName' => 'Sender MD Sailing',
//         'apikey' => 'EB340283AA8C22DFB3C09FF5934A8057B81A3A0C2825C958BC0CEC2AD748C81B9E5362D4B82666311167E57855C30647',
//         'subject' => $subjectHtml,
//         'to' => 'info@mdsailing.rs',
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