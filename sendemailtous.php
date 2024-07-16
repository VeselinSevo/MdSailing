<?php
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

//Mail JET

$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "sender@mdsailing.rs",
                'Name' => "Sender MD Sailing"
            ],
            'To' => [
                [
                    'Email' => "rezervacije@mdsailing.rs",
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
// $hostess = $_POST['hostess'];
// $dateString = $_POST['date'];
// $skipper = $_POST['skipper'];
// $phone = $_POST['phone'];
// $inclusive = $_POST['inclusive'];
// $people = $_POST['people'];
// $msg = $_POST['message'];
// $boatType = $_POST['boatType'];

// // Convert the input date string to a Unix timestamp using strtotime()
// $timestamp = strtotime($dateString);

// // Format the timestamp into the desired format "dd/mm/yyyy" using date()
// $formattedDate = date("d/m/Y", $timestamp);

// // Output the formatted date
// echo $formattedDate; // Output: "12/03/2024"

// $subjectHtml = "Novi upit - Korisnik $name ocekuje da ga kontaktirate"; // Subject for the email

// $bodyHtml = "
//     <h1>Novi upit!</h1>

//     Sjajne vesti, dobili ste novi upit za rezervaciju! U nastavku se nalaze detaljne informacije:
//     <br>
//     Detalji upita: 
//     <br>
//     Ime: $name
//     <br>
//     Email: $email
//     <br>
//     Datum: $formattedDate
//     <br>
//     Hostesa: $hostess
//     <br>
//     Skiper: $skipper
//     <br>
//     Telefon: $phone
//     <br>
//     Inclusive: $inclusive
//     <br>
//     Broj osoba: $people
//     <br>
//     Tip pllovila: $boatType
//     <br>
//     Poruka: $msg
//     Takodje, korisnik je isto dobio mejl i ocekuje da ga kontaktirate u sto kracem roku.
// ";

// try {
//     $post = array(
//         'from' => 'sender@mdsailing.rs',
//         'fromName' => 'Sender MD Sailing',
//         'apikey' => 'EB340283AA8C22DFB3C09FF5934A8057B81A3A0C2825C958BC0CEC2AD748C81B9E5362D4B82666311167E57855C30647',
//         'subject' => $subjectHtml,
//         'to' => 'rezervacije@mdsailing.rs',
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