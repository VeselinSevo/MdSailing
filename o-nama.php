<?php session_start(); // Set the language based on the URL parameter if provided 
if (isset($_GET['lang'])) {
    $_SESSION['language'] = $_GET['lang'];  // Get the current language from the session or default to 'en'
}
$lang = isset($_SESSION['language']) ? $_SESSION['language'] : 'sr';

if (!isset($_GET['lang'])) {
    $url = $_SERVER['REQUEST_URI'];
    $urlComponents = parse_url($url);
    parse_str($urlComponents['query'] ?? '', $queryParams);
    $queryParams['lang'] = $lang;
    $newQueryString = http_build_query($queryParams);
    $newUrl = $urlComponents['path'] . '?' . $newQueryString;
    header("Location: $newUrl");
    exit();
}
?>

<!DOCTYPE html>
<?php if ($lang !== 'de'): ?>
    <html lang="sr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MD Sailing - O nama</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Sa strašću prema moru i profesionalnošću u poslovanju, nudimo Vam najkvalitetniju uslugu iznajmljivanja plovila na Jadranu. Naš tim stručnih skipera i osoblja stoji Vam na raspolaganju kako biste uživali u svakom trenutku plovidbe. Doživite čaroliju Jadranskog mora sa nama!" />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje, mdsailing, kontakt, rezervacija">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-o-nama">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"> MD Sailing </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Agencija koja vašu plovidbu čini nezaboravnom.</p>
            </div>
        </section>
        <section class="section section-contact">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> O nama </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">Sigurni smo da će Vaše iskustvo
                    plovidbe Jadranskim morem biti nezaboravno uz našu flotu katamarana i jedrilica. Sa strašću prema moru i
                    profesionalnošću u poslovanju, nudimo Vam najkvalitetniju uslugu iznajmljivanja plovila na Jadranu. Naš
                    tim stručnih skipera i osoblja stoji Vam na raspolaganju kako biste uživali u svakom trenutku plovidbe.
                    Doživite čaroliju Jadranskog mora sa nama!</p>
            </div>
            <div class="section-contact__content">
                <div class="section-contact__content__info">
                    <article class="section-contact__content__info__article">
                        <div class="section-contact__content__info__icon-body">
                            <img class="section-contact__content__info__icon" src="./assets/svgs/contact-form-icon-1.svg" />
                        </div>
                        <div class="section-contact__content__info__text-body">
                            <p class="section-contact__content__info__big-text">+381605159498</p>
                            <p class="section-contact__content__info__small-text">Naš broj telefona</p>
                        </div>
                    </article>
                    <article class="section-contact__content__info__article">
                        <div class="section-contact__content__info__icon-body">
                            <img class="section-contact__content__info__icon" src="./assets/svgs/contact-form-icon-2.svg" />
                        </div>
                        <div class="section-contact__content__info__text-body">
                            <p class="section-contact__content__info__big-text">info@mdsailing.rs</p>
                            <p class="section-contact__content__info__small-text">Naša email adresa</p>
                        </div>
                    </article>
                    <article class="section-contact__content__info__article">
                        <div class="section-contact__content__info__icon-body">
                            <img class="section-contact__content__info__icon" src="./assets/svgs/contact-form-icon-3.svg" />
                        </div>
                        <div class="section-contact__content__info__text-body">
                            <p class="section-contact__content__info__big-text">Prolaz Matice Hrvatske 1, 31000 Osijek</p>
                            <p class="section-contact__content__info__small-text">Naša adresa</p>
                        </div>
                    </article>
                    <article class="section-contact__content__info__article">
                        <div class="section-contact__content__info__icon-body">
                            <img class="section-contact__content__info__icon" id="contact-logo"
                                src="./assets/logo/logoo.svg" />
                        </div>
                        <div class="section-contact__content__info__text-body">
                            <p class="section-contact__content__info__big-text">OIB 34052814208</p>
                            <p class="section-contact__content__info__small-text">MD Solution J.D.O.O</p>
                        </div>
                    </article>
                </div>
                <form class="section-contact__content__form" id="contact-form">
                    <div class="section-form__input-section">
                        <h3 class="section-content__blog__section__heading">Popunite jednostavnu kontakt formu kako biste
                            nas kontaktirali ili to uradite putem mejla: info@mdsailing.rs</h3>
                        <hr>
                        <p class="section-form__input-title">Ime i prezime</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="name" placeholder="Bogdan Bogdanovic" />
                        </div>
                        <p class="section-form__input-warning">Ime mora imati bar 3 karaktera i ne sme sadržati brojeve!</p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Email</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="email" placeholder="bogdanbogdanovic@gmail.com" />
                        </div>
                        <p class="section-form__input-warning">Email mora biti u ispravnom formatu!</p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Telefon</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="phone" placeholder="063-456-7890" />
                        </div>
                        <p class="section-form__input-warning">Telefon mora biti u ispravnom formatu!</p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Poruka</p>
                        <div class="section-form__input-body">
                            <textarea class="section-form__input" name="message"
                                placeholder="Dodatne informacije"></textarea>
                        </div>
                        <p class="section-form__input-warning">Morate da upišete poruku!</p>
                    </div>
                    <button type="submit" class="section-form__button">
                        <a class="CTA CTA__small CTA__primary">Pošaljite poruku</a>
                    </button>
                    <div id="contact-success-msg">Uspešno ste poslali upit. Očekujte odgovor u što kraćem roku.</div>
                    <div id="contact-fail-msg">Forma se nije uspešno poslala. Pokušajte malo kasnije.</div>
                </form>

            </div>
        </section>
        <?php require 'footer.php' ?>
    </body>

    </html>
<?php else: ?>
    <html lang="de">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MD Sailing - Über uns</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Mit Leidenschaft für das Meer und professioneller Geschäftstätigkeit bieten wir Ihnen den hochwertigsten Bootsverleihservice an der Adria. Unser Team aus erfahrenen Skippern und Mitarbeitern steht Ihnen zur Verfügung, damit Sie jeden Moment des Segelns genießen können. Erleben Sie mit uns den Zauber der Adria!" />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung, mdsailing, Kontakt, Reservierung">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-o-nama">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"> MD Sailing </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Die Agentur, die Ihr Segeln unvergesslich macht.</p>
            </div>
        </section>
        <section class="section section-contact">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Über uns </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">Wir sind sicher, dass Ihr
                    Segelerlebnis in der Adria mit unserer Flotte von Katamaranen und Segelbooten unvergesslich wird. Mit
                    Leidenschaft für das Meer und professioneller Geschäftstätigkeit bieten wir Ihnen den hochwertigsten
                    Bootsverleihservice an der Adria. Unser Team aus erfahrenen Skippern und Mitarbeitern steht Ihnen zur
                    Verfügung, damit Sie jeden Moment des Segelns genießen können. Erleben Sie mit uns den Zauber der Adria!
                </p>
            </div>
            <div class="section-contact__content">
                <div class="section-contact__content__info">
                    <article class="section-contact__content__info__article">
                        <div class="section-contact__content__info__icon-body">
                            <img class="section-contact__content__info__icon" src="./assets/svgs/contact-form-icon-1.svg" />
                        </div>
                        <div class="section-contact__content__info__text-body">
                            <p class="section-contact__content__info__big-text">+381605159498</p>
                            <p class="section-contact__content__info__small-text">Unsere Telefonnummer</p>
                        </div>
                    </article>
                    <article class="section-contact__content__info__article">
                        <div class="section-contact__content__info__icon-body">
                            <img class="section-contact__content__info__icon" src="./assets/svgs/contact-form-icon-2.svg" />
                        </div>
                        <div class="section-contact__content__info__text-body">
                            <p class="section-contact__content__info__big-text">info@mdsailing.rs</p>
                            <p class="section-contact__content__info__small-text">Unsere E-Mail-Adresse</p>
                        </div>
                    </article>
                    <article class="section-contact__content__info__article">
                        <div class="section-contact__content__info__icon-body">
                            <img class="section-contact__content__info__icon" src="./assets/svgs/contact-form-icon-3.svg" />
                        </div>
                        <div class="section-contact__content__info__text-body">
                            <p class="section-contact__content__info__big-text">Prolaz Matice Hrvatske 1, 31000 Osijek</p>
                            <p class="section-contact__content__info__small-text">Unsere Adresse</p>
                        </div>
                    </article>
                    <article class="section-contact__content__info__article">
                        <div class="section-contact__content__info__icon-body">
                            <img class="section-contact__content__info__icon" id="contact-logo"
                                src="./assets/logo/logoo.svg" />
                        </div>
                        <div class="section-contact__content__info__text-body">
                            <p class="section-contact__content__info__big-text">OIB 34052814208</p>
                            <p class="section-contact__content__info__small-text">MD Solution J.D.O.O</p>
                        </div>
                    </article>
                </div>
                <form class="section-contact__content__form" id="contact-form">
                    <div class="section-form__input-section">
                        <h3 class="section-content__blog__section__heading">Füllen Sie ein einfaches Kontaktformular aus, um
                            mit uns Kontakt aufzunehmen, oder tun Sie dies
                            per E-Mail:: info@mdsailing.rs
                        </h3>
                        <hr>
                        <p class="section-form__input-title">Name und Nachname</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="name" placeholder="Bogdan Bogdanovic" />
                        </div>
                        <p class="section-form__input-warning">Der Name muss mindestens 3 Zeichen lang sein und darf keine
                            Zahlen enthalten!</p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Email</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="email" placeholder="bogdanbogdanovic@gmail.com" />
                        </div>
                        <p class="section-form__input-warning">E-Mail muss im richtigen Format vorliegen!</p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Telefon</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="phone" placeholder="063-456-7890" />
                        </div>
                        <p class="section-form__input-warning">Das Telefon muss im richtigen Format sein!</p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Nachricht</p>
                        <div class="section-form__input-body">
                            <textarea class="section-form__input" name="message"
                                placeholder="Zusätzliche Informationen"></textarea>
                        </div>
                        <p class="section-form__input-warning">Sie müssen eine Nachricht eingeben!</p>
                    </div>
                    <button type="submit" class="section-form__button">
                        <a class="CTA CTA__small CTA__primary">
                            Eine Nachricht schicken
                        </a>
                    </button>
                    <div id="contact-success-msg">Sie haben Ihre Anfrage erfolgreich versendet. Erwarten Sie
                        schnellstmöglich eine Antwort.</div>
                    <div id="contact-fail-msg">Das Formular wurde nicht erfolgreich übermittelt. Versuchen Sie es etwas
                        später.</div>
                </form>

            </div>
        </section>
        <?php require 'footer-german.php' ?>
    </body>

    </html>
<?php endif; ?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const serbianBtns = document.querySelectorAll(".serbian-language-button");
        const germanBtns = document.querySelectorAll(".german-language-button");

        serbianBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                setLanguage("sr");
            });
        });

        germanBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                setLanguage("de");
            });
        });

        function setLanguage(lang) {
            // Update the URL parameter
            const url = new URL(window.location);
            url.searchParams.set('lang', lang);

            console.log(url)
            window.location.href = url.toString();
        }
    });
</script>
<script src="./header.js">

</script>

<script src="./contact-form.js">
</script>