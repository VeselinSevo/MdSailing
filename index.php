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
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MD Sailing - Vaš put do nezaboravnog iskustva na moru</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <meta name="description"
            content="Nezaboravno iskustvo na Jadranu. Pregledajte našu ponudu plovila koja su Vam na raspolaganju. Bez obzira tražite li luksuzan katamaran ili romantičnu jedrilicu za intimne izlete, svako plovilo nudi udobnost i sigurnost na moru uz vrhunsku uslugu i pažljivo birane destinacije." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje" />
        <link rel="manifest" href="/site.webmanifest" />
        <meta name="google-site-verification" content="UTZE3sJMxaIZnF9PhccHjEs-45vgPp8stgGUo06gbRU" />
        <link rel="canonical" href="https://mdsailing.rs" />
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero">
            <video class="section-hero__video" autoplay loop muted>
                <source src="./assets/images/home-page-video.mp4" type="video/mp4" />
            </video>
            <div class="section-hero__overlay"></div>
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading">
                    DOŽIVI. OSETI. ISTRAŽI.
                </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Nezaboravno iskustvo na Jadranu
                </p>
            </div>
            <a class="CTA CTA__default CTA__primary" id="home-CTA" href="/#sailing-form">Rezerviši plovilo</a>
        </section>
        <section class="section section-plovila">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">Naša plovila</h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Pregledajte našu ponudu plovila koja su Vam na raspolaganju.
                    Bez obzira tražite li luksuzan katamaran ili romantičnu
                    jedrilicu za intimne izlete, svako plovilo nudi udobnost i
                    sigurnost na moru uz vrhunsku uslugu i pažljivo birane
                    destinacije.
                </p>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/bali 4.5.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">
                                Katamaran
                            </p>
                            <p class="section-plovila__card__heading">
                                Bali 4.5
                            </p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toaleti 4
                            <br />
                            Dužina 13.6m &nbsp|&nbsp Širina 7.42m &nbsp|&nbsp
                            A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./plovila">Pogledaj više
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text">
                                1-10
                            </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/oceanis 46.1.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">
                                Jedrilica
                            </p>
                            <p class="section-plovila__card__heading">
                                Oceanis 46.1
                            </p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toaleti 4
                            <br />
                            Dužina 14.6m &nbsp|&nbsp Širina 4.5m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./plovila">Pogledaj više
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text">
                                1-10
                            </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/lagoon40.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">
                                Katamaran
                            </p>
                            <p class="section-plovila__card__heading">
                                LAGOON 40
                            </p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toaleti 4
                            <br />
                            Dužina 11.74m &nbsp|&nbsp Širina 6.77m &nbsp|&nbsp
                            A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./plovila">Pogledaj više
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text">
                                1-10
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section class="section section-plovila-2">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__darkmode">
                    MD Sailing Vam pruža
                </h2>
            </div>
            <div class="section-plovila-2__cards">
                <article class="section-plovila-2__card-2">
                    <!-- <img class="section-plovila-2__card-2__image" src="./assets/images/prednosti/Istrazivanje.jpg" />
                <p class="section-plovila-2__card__heading" >Istraživanje</p>
                <p class="section-plovila-2__card__paragraph" >Otkrijte magiju plovidbe brodom dok istražujete netaknuta ostrva i živopisne gradove duž obale.
                    Prepustite se avanturi i stvorite nezaboravne trenutke uz našu ekskluzivnu ponudu putovanja.</p> -->
                </article>
            </div>
            <div class="slider-btn-container">
                <a class="slider-btn CTA CTA__secondary CTA__small" id="prev">
                    <img class="CTA__icon left-arrow" src="./assets/svgs/arrow-left-secondary.svg" />
                    Prethodni
                </a>
                <a class="slider-btn CTA CTA__secondary CTA__small" id="next">Sledeći
                    <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" />
                </a>
            </div>
        </section>
        <section class="section section-form" id="sailing-form">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">
                    Rezervacija Vašeg plovila
                </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Ispunite jednostavnu kontakt formu kako biste zatražili
                    službenu ponudu. Očekujte da Vam ponuda stigne putem e-maila
                    u roku od nekoliko minuta.
                </p>
            </div>
            <form class="section-form__body" id="reservation-form">
                <div class="section-form__row">
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Ime i prezime</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="name" placeholder="Bogdan Bogdanovic" />
                        </div>
                        <p class="section-form__input-warning">
                            Ime mora imati bar 3 karaktera i ne sme sadržati
                            brojeve!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Email</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="email" placeholder="bogdanbogdanovic@email.com" />
                        </div>
                        <p class="section-form__input-warning">
                            Email mora biti u ispravnom formatu!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Telefon</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="phone" id="phone" maxlength="15"
                                placeholder="063-456-7890" />
                        </div>
                        <p class="section-form__input-warning">
                            Telefon mora biti u ispravnom formatu!
                        </p>
                    </div>
                </div>
                <div class="section-form__row">
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">
                            Datum rezervacije
                        </p>
                        <div class="section-form__input-body">
                            <input name="date" class="section-form__input" type="date" id="date" placeholder="mm/dd/yyyy" />
                        </div>
                        <p class="section-form__input">
                            Napomena: Možete izabrati samo subote.
                        </p>
                        <p class="section-form__input-warning">
                            Morate izabrati datum. Dozvoljene su samo subote jer
                            tada brodovi isplovljavaju!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">
                            Inclusive (hrana i piće)
                        </p>
                        <div class="section-form__input-body">
                            <select class="section-form__input" name="inclusive" style="margin-right: 10px">
                                <option selected disabled>DA / NE</option>
                                <option value="DA">DA</option>
                                <option value="NE">NE</option>
                            </select>
                        </div>
                        <p class="section-form__input-warning">
                            Morate odabrati neku opciju!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Broj osoba</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="people" placeholder="2" />
                        </div>
                        <p class="section-form__input-warning">
                            Morate da upišete broj osoba od 1 do 10!
                        </p>
                    </div>
                </div>
                <div class="section-form__row">
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">
                            Da li vam je potreban skiper?
                        </p>
                        <div class="section-form__input-body">
                            <select class="section-form__input" name="skipper"
                                style="margin-right: 10px; padding: 12px 16px">
                                <option selected disabled>DA / NE</option>
                                <option value="DA">DA</option>
                                <option value="NE">NE</option>
                            </select>
                        </div>
                        <p class="section-form__input-warning">
                            Morate odabrati neku opciju!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">
                            Da li vam je potrebna hostesa?
                        </p>
                        <div class="section-form__input-body">
                            <select class="section-form__input" name="hostess"
                                style="margin-right: 10px; padding: 12px 16px">
                                <option selected disabled>DA / NE</option>
                                <option value="DA">DA</option>
                                <option value="NE">NE</option>
                            </select>
                        </div>
                        <p class="section-form__input-warning">
                            Morate odabrati neku opciju!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Napomena</p>
                        <div class="section-form__input-body">
                            <textarea class="section-form__input" name="napomena"
                                placeholder="Dodatne informacije"></textarea>
                        </div>
                        <!-- <p class="section-form__input-warning">Morate da upišete !</p> -->
                    </div>
                </div>
                <p class="section-form__input-title">Izaberite plovilo</p>
                <div class="section-form__radio-section">
                    <div class="section-form__radio-body" id="radio-body-1">
                        <img class="section-form__radio-image" src="./assets/images/formimgs/Jedrilica.jpg"
                            alt="slika broda" />
                        <p class="section-form__radio-text">Jedrilica</p>
                        <input type="radio" name="type" value="jedrilica" class="section-form__radio" id="radio-button-1"
                            disabled />
                    </div>
                    <div class="section-form__radio-body" id="radio-body-2">
                        <img class="section-form__radio-image" src="./assets/images/formimgs/Katamaran.jpg"
                            alt="slika broda" />
                        <p class="section-form__radio-text">Katamaran</p>
                        <input type="radio" name="type" value="katamaran" class="section-form__radio" id="radio-button-2"
                            disabled />
                    </div>
                </div>
                <p class="section-form__input-warning" id="select-boat">
                    Morate odabrati tip plovila!
                </p>
                <button type="submit" class="section-form__button">
                    <a class="CTA CTA__small CTA__primary">
                        Pošaljite poruku
                    </a>
                </button>
                <div id="reservation-success-msg">
                    Uspešno ste poslali upit. Očekujte odgovor u što kraćem
                    roku.
                </div>
                <div id="reservation-fail-msg">
                    Forma se nije uspešno poslala. Pokušajte malo kasnije.
                </div>
            </form>
        </section>
        <section class="section section-gallery">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__darkmode">Galerija</h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__darkmode">
                    Slike sa naših avantura širom Jadrana.
                </p>
            </div>
            <div class="section-gallery__gallery">
                <div class="section-gallery__gallery__column">
                    <div class="section-gallery__gallery__row">
                        <img class="section-gallery__gallery__image-2" src="./assets/images/galerija/20230604_201346.jpg" />
                        <img class="section-gallery__gallery__image-2" src="./assets/images/galerija/20230713_201706.jpg" />
                    </div>
                    <div class="section-gallery__gallery__row-large">
                        <img class="section-gallery__gallery__image" src="./assets/images/galerija/20230719_173521.jpg" />
                    </div>
                </div>
                <div class="section-gallery__gallery__column">
                    <div class="section-gallery__gallery__row-large">
                        <img class="section-gallery__gallery__image" src="./assets/images/galerija/20230608_102703.jpg" />
                    </div>
                    <div class="section-gallery__gallery__row">
                        <img class="section-gallery__gallery__image-2" src="./assets/images/galerija/20230924_172306.jpg" />
                        <img class="section-gallery__gallery__image-2" src="./assets/images/galerija/20230618_124436.jpg" />
                    </div>
                </div>
            </div>
            <a href="/galerija" class="CTA CTA__small CTA__primary">
                Pogledajte našu galeriju
            </a>
        </section>
        <section class="section section-proces">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">
                    Kako Izgleda Ceo Proces
                </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Ovde se nalazi kratko opisan proces bukiranja plovila.
                    Molimo Vas da, za svaki korak, kliknete "Pročitaj više" i
                    tako pročitate detaljnije o procesu. Ukoliko imate dodatna
                    pitanja uvek smo dostupni na broj: +381605159498
                </p>
            </div>
            <div class="section-proces__cards">
                <article class="section-proces__card">
                    <div class="section-proces__card__body">
                        <img class="section-proces__card__icon" src="./assets/svgs/process-icon-1.svg"
                            alt="slika telefona" />
                    </div>
                    <div class="section-proces__card__content">
                        <p class="section-proces__card__heading">
                            Slanje forme
                        </p>
                        <p class="section-proces__card__paragraph">
                            Popunite i pošaljite formu nakon koje će Vam stići
                            email nekog od nas za dalji dogovor i potvrdu.
                        </p>
                        <a class="CTA CTA__small CTA__secondary" href="./vodic#blog-1">Pročitaj više
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                    </div>
                </article>
                <hr class="seperator" />
                <article class="section-proces__card section-proces__card-2">
                    <div class="section-proces__card__content">
                        <p class="section-proces__card__heading">
                            Plaćanje i otkazivanje
                        </p>
                        <p class="section-proces__card__paragraph">
                            Plaćanje može biti izvršeno jedino bankovnim
                            transferom. Podatke vezane za plaćanje dobićete u
                            predračunu.
                        </p>
                        <a class="CTA CTA__small CTA__secondary" href="./vodic#blog-1">Pročitaj više
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                    </div>
                    <div class="section-proces__card__body">
                        <img class="section-proces__card__icon" style="width: 52px; height: 52px"
                            src="./assets/svgs/process-icon-2.svg" alt="slika novcanice" />
                    </div>
                </article>
                <hr class="seperator" />
                <article class="section-proces__card">
                    <div class="section-proces__card__body">
                        <img class="section-proces__card__icon" style="width: 64px; height: 64px"
                            src="./assets/svgs/process-icon-3.svg" alt="slika sidra" />
                    </div>
                    <div class="section-proces__card__content">
                        <p class="section-proces__card__heading">
                            Potvrda i kraj procesa
                        </p>
                        <p class="section-proces__card__paragraph">
                            Nakon detaljne obrade svih potrebnih podataka i
                            potvrde o izvršenoj uplati, želimo Vas obavestiti da
                            ćemo vam poslati važne informacije putem e-maila.
                        </p>
                        <a class="CTA CTA__small CTA__secondary" href="./vodic#blog-1">Pročitaj više
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                    </div>
                </article>
            </div>
        </section>
        <?php require 'footer.php' ?>
    </body>

    </html>
<?php else: ?>


    <html lang="de">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MD Sailing – Ihr Weg zu einem unvergesslichen Erlebnis auf See</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <meta name="description"
            content="Ein unvergessliches Erlebnis an der Adria. Schauen Sie sich unser Angebot an Schiffen an, die Ihnen zur Verfügung stehen. Ganz gleich, ob Sie einen Luxuskatamaran oder ein romantisches Segelboot für private Ausflüge suchen, jedes Schiff bietet Komfort und Sicherheit auf See mit erstklassigem Service und sorgfältig ausgewählten Zielen." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung" />
        <link rel="manifest" href="/site.webmanifest" />
        <meta name="google-site-verification" content="UTZE3sJMxaIZnF9PhccHjEs-45vgPp8stgGUo06gbRU" />
        <link rel="canonical" href="https://mdsailing.rs" />
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero">
            <video class="section-hero__video" autoplay loop muted>
                <source src="./assets/images/home-page-video.mp4" type="video/mp4" />
            </video>
            <div class="section-hero__overlay"></div>
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading">
                    ERFAHRUNG. FÜHLEN. FORSCHUNG.
                </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Ein unvergessliches Erlebnis an der Adria
                </p>
            </div>
            <a class="CTA CTA__default CTA__primary" id="home-CTA" href="/#sailing-form">Buchen Sie ein Schiff</a>
        </section>
        <section class="section section-plovila">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">Unsere Schiffe</h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Durchsuchen Sie unser Angebot an Booten, die Ihnen zur Verfügung stehen. Unabhängig davon, ob Sie einen
                    Luxuskatamaran oder ein romantisches Segelboot für private Ausflüge suchen, jedes Schiff bietet Komfort
                    und Sicherheit auf See mit erstklassigem Service und sorgfältig ausgewählten Zielen.
                </p>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/bali 4.5.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">
                                Katamaran
                            </p>
                            <p class="section-plovila__card__heading">
                                Bali 4.5
                            </p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Personal 10 &nbsp|&nbsp Kabinen 4 &nbsp|&nbsp Toiletten 4
                            <br />
                            Länge 13.6m &nbsp|&nbsp Breite 7.42m &nbsp|&nbsp
                            Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./plovila">Pogledaj više
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text">
                                1-10
                            </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/oceanis 46.1.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">
                                Segelboot
                            </p>
                            <p class="section-plovila__card__heading">
                                Oceanis 46.1
                            </p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Personal 10 &nbsp|&nbsp Kabinen 4 &nbsp|&nbsp Toiletten 4
                            <br />
                            Länge 14.6m &nbsp|&nbsp Breite 4.5m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./plovila">Mehr sehen
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text">
                                1-10
                            </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/lagoon40.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">
                                Katamaran
                            </p>
                            <p class="section-plovila__card__heading">
                                LAGOON 40
                            </p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Personal 10 &nbsp|&nbsp Kabinen 4 &nbsp|&nbsp Toiletten 4
                            <br />
                            Länge 11.74m &nbsp|&nbsp Breite 6.77m &nbsp|&nbsp
                            Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./plovila">Mehr sehen
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text">
                                1-10
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section class="section section-plovila-2">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__darkmode">
                    MD Sailing bietet Ihnen alles
                </h2>
            </div>
            <div class="section-plovila-2__cards">
                <article class="section-plovila-2__card-2">
                    <!-- <img class="section-plovila-2__card-2__image" src="./assets/images/prednosti/Istrazivanje.jpg" />
                <p class="section-plovila-2__card__heading" >Istraživanje</p>
                <p class="section-plovila-2__card__paragraph" >Otkrijte magiju plovidbe brodom dok istražujete netaknuta ostrva i živopisne gradove duž obale.
                    Prepustite se avanturi i stvorite nezaboravne trenutke uz našu ekskluzivnu ponudu putovanja.</p> -->
                </article>
            </div>
            <div class="slider-btn-container">
                <a class="slider-btn CTA CTA__secondary CTA__small" id="prev">
                    <img class="CTA__icon left-arrow" src="./assets/svgs/arrow-left-secondary.svg" />
                    Zurück
                </a>
                <a class="slider-btn CTA CTA__secondary CTA__small" id="next">Weiter
                    <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" />
                </a>
            </div>
        </section>
        <section class="section section-form" id="sailing-form">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">
                    Reservierung Ihres Schiffes
                </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Füllen Sie das einfache Kontaktformular aus, um ein offizielles Angebot anzufordern. Erwarten Sie, dass
                    Sie das Angebot innerhalb weniger Minuten per E-Mail erhalten.
                </p>
            </div>
            <form class="section-form__body" id="reservation-form">
                <div class="section-form__row">
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Vor- und Nachname</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="name" placeholder="Bogdan Bogdanovic" />
                        </div>
                        <p class="section-form__input-warning">
                            Der Name muss mindestens 3 Zeichen lang sein und darf keine Zahlen enthalten!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">E-Mail</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="email" placeholder="bogdanbogdanovic@email.com" />
                        </div>
                        <p class="section-form__input-warning">
                            E-Mail muss im richtigen Format vorliegen!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Telefon</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="phone" id="phone" maxlength="15"
                                placeholder="063-456-7890" />
                        </div>
                        <p class="section-form__input-warning">
                            Das Telefon muss im richtigen Format sein!
                        </p>
                    </div>
                </div>
                <div class="section-form__row">
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">
                            Datum der Reservierung
                        </p>
                        <div class="section-form__input-body">
                            <input name="date" class="section-form__input" type="date" id="date" placeholder="mm/dd/yyyy" />
                        </div>
                        <p class="section-form__input">
                            Hinweis: Sie können nur Samstage auswählen.
                        </p>
                        <p class="section-form__input-warning">
                            Morate izabrati datum. Dozvoljene su samo subote jer
                            tada brodovi isplovljavaju!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">
                            inklusive (Essen und Getränke)
                        </p>
                        <div class="section-form__input-body">
                            <select class="section-form__input" name="inclusive" style="margin-right: 10px">
                                <option selected disabled>JA / NICHT</option>
                                <option value="DA">JA</option>
                                <option value="NE">NICHT</option>
                            </select>
                        </div>
                        <p class="section-form__input-warning">
                            Sie müssen eine Option wählen!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Anzahl der Personen</p>
                        <div class="section-form__input-body">
                            <input class="section-form__input" name="people" placeholder="2" />
                        </div>
                        <p class="section-form__input-warning">
                            Sie müssen die Anzahl der Personen von 1 bis 10 eingeben!
                        </p>
                    </div>
                </div>
                <div class="section-form__row">
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">
                            Benötigen Sie einen Skipper?
                        </p>
                        <div class="section-form__input-body">
                            <select class="section-form__input" name="skipper"
                                style="margin-right: 10px; padding: 12px 16px">
                                <option selected disabled>JA / NICHT</option>
                                <option value="DA">JA</option>
                                <option value="NE">NICHT</option>
                            </select>
                        </div>
                        <p class="section-form__input-warning">
                            Sie müssen eine Option wählen!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">
                            Brauchen Sie eine Hostess?
                        </p>
                        <div class="section-form__input-body">
                            <select class="section-form__input" name="hostess"
                                style="margin-right: 10px; padding: 12px 16px">
                                <option selected disabled>JA / NICHT</option>
                                <option value="DA">JA</option>
                                <option value="NE">NICHT</option>
                            </select>
                        </div>
                        <p class="section-form__input-warning">
                            Sie müssen eine Option wählen!
                        </p>
                    </div>
                    <div class="section-form__input-section">
                        <p class="section-form__input-title">Hinweis (Zusätzliche Informationen)
                        </p>
                        <div class="section-form__input-body">
                            <textarea class="section-form__input" name="napomena"
                                placeholder="Dodatne informacije"></textarea>
                        </div>
                    </div>
                </div>
                <p class="section-form__input-title">Wählen Sie ein Schiff</p>
                <div class="section-form__radio-section">
                    <div class="section-form__radio-body" id="radio-body-1">
                        <img class="section-form__radio-image" src="./assets/images/formimgs/Jedrilica.jpg"
                            alt="slika broda" />
                        <p class="section-form__radio-text">Segelboot</p>
                        <input type="radio" name="type" value="jedrilica" class="section-form__radio" id="radio-button-1"
                            disabled />
                    </div>
                    <div class="section-form__radio-body" id="radio-body-2">
                        <img class="section-form__radio-image" src="./assets/images/formimgs/Katamaran.jpg"
                            alt="slika broda" />
                        <p class="section-form__radio-text">Katamaran</p>
                        <input type="radio" name="type" value="katamaran" class="section-form__radio" id="radio-button-2"
                            disabled />
                    </div>
                </div>
                <p class="section-form__input-warning" id="select-boat">
                    Sie müssen einen Schiffstyp auswählen!
                </p>
                <button type="submit" class="section-form__button">
                    <a class="CTA CTA__small CTA__primary">
                        Senden Sie eine Nachricht
                    </a>
                </button>
                <div id="reservation-success-msg">
                    Sie haben Ihre Anfrage erfolgreich versendet. Erwarten Sie schnellstmöglich eine Antwort.
                </div>
                <div id="reservation-fail-msg">
                    Das Formular wurde nicht erfolgreich übermittelt. Versuchen Sie es etwas später.
                </div>
            </form>
        </section>
        <section class="section section-gallery">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__darkmode">Galerie</h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__darkmode">
                    Bilder von unseren Abenteuern rund um die Adria.
                </p>
            </div>
            <div class="section-gallery__gallery">
                <div class="section-gallery__gallery__column">
                    <div class="section-gallery__gallery__row">
                        <img class="section-gallery__gallery__image-2" src="./assets/images/galerija/20230604_201346.jpg" />
                        <img class="section-gallery__gallery__image-2" src="./assets/images/galerija/20230713_201706.jpg" />
                    </div>
                    <div class="section-gallery__gallery__row-large">
                        <img class="section-gallery__gallery__image" src="./assets/images/galerija/20230719_173521.jpg" />
                    </div>
                </div>
                <div class="section-gallery__gallery__column">
                    <div class="section-gallery__gallery__row-large">
                        <img class="section-gallery__gallery__image" src="./assets/images/galerija/20230608_102703.jpg" />
                    </div>
                    <div class="section-gallery__gallery__row">
                        <img class="section-gallery__gallery__image-2" src="./assets/images/galerija/20230924_172306.jpg" />
                        <img class="section-gallery__gallery__image-2" src="./assets/images/galerija/20230618_124436.jpg" />
                    </div>
                </div>
            </div>
            <a href="/galerija" class="CTA CTA__small CTA__primary">
                Schauen Sie sich unsere Galerie an
            </a>
        </section>
        <section class="section section-proces">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">
                    So sieht der gesamte Prozess aus
                </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Hier finden Sie eine kurze Beschreibung des Schiffsbuchungsprozesses. Bitte klicken Sie für jeden
                    Schritt auf „Weitere Informationen“, um mehr über den Prozess zu erfahren. Bei weiteren Fragen stehen
                    wir Ihnen jederzeit unter der Nummer +381605159498 zur Verfügung.
                </p>
            </div>
            <div class="section-proces__cards">
                <article class="section-proces__card">
                    <div class="section-proces__card__body">
                        <img class="section-proces__card__icon" src="./assets/svgs/process-icon-1.svg"
                            alt="slika telefona" />
                    </div>
                    <div class="section-proces__card__content">
                        <p class="section-proces__card__heading">
                            Formulareinreichung
                        </p>
                        <p class="section-proces__card__paragraph">
                            Füllen Sie das Formular aus und senden Sie es ab. Anschließend erhalten Sie eine E-Mail von
                            einem von uns zur weiteren Vereinbarung und Bestätigung.
                        </p>
                        <a class="CTA CTA__small CTA__secondary" href="./vodic#blog-1">Weiter lesen
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                    </div>
                </article>
                <hr class="seperator" />
                <article class="section-proces__card section-proces__card-2">
                    <div class="section-proces__card__content">
                        <p class="section-proces__card__heading">
                            Zahlung und Stornierung
                        </p>
                        <p class="section-proces__card__paragraph">
                            Die Zahlung kann nur per Banküberweisung erfolgen. Zahlungsinformationen erhalten Sie in der
                            Rechnung.
                        </p>
                        <a class="CTA CTA__small CTA__secondary" href="./vodic#blog-1">Weiter lesen
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                    </div>
                    <div class="section-proces__card__body">
                        <img class="section-proces__card__icon" style="width: 52px; height: 52px"
                            src="./assets/svgs/process-icon-2.svg" alt="slika novcanice" />
                    </div>
                </article>
                <hr class="seperator" />
                <article class="section-proces__card">
                    <div class="section-proces__card__body">
                        <img class="section-proces__card__icon" style="width: 64px; height: 64px"
                            src="./assets/svgs/process-icon-3.svg" alt="slika sidra" />
                    </div>
                    <div class="section-proces__card__content">
                        <p class="section-proces__card__heading">
                            Bestätigung und Ende des Prozesses
                        </p>
                        <p class="section-proces__card__paragraph">
                            Nach detaillierter Bearbeitung aller notwendigen Daten und Bestätigung der Zahlung möchten wir
                            Sie darüber informieren, dass wir Ihnen wichtige Informationen per E-Mail zusenden.
                        </p>
                        <a class="CTA CTA__small CTA__secondary" href="./vodic#blog-1">Weiter lesen
                            <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                    </div>
                </article>
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
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script src="./index.js"></script>
<script src="./form.js"></script>