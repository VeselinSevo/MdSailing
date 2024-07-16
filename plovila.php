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
        <title>MD Sailing - Plovila</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Osetite uzbuđenje jedrenja s našom flotom modernih i udobnih jedrilica i katamarana." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje, bali, oceanis, lagoon, dofour, bavaria, hanse">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-plovila">
            <div class="section-hero__text">
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Osetite uzbuđenje jedrenja s našom flotom modernih i udobnih jedrilica i katamarana.
                </p>
            </div>
        </section>
        <section class="section section-plovila">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Naša plovila </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">Pregledajte našu ponudu plovila koja
                    su vam na raspolaganju. Bez obzira tražite li luksuzan katamaran ili romantičnu jedrilicu za intimne
                    izlete, svako plovilo nudi udobnost i sigurnost na moru uz vrhunsku uslugu i pažljivo
                    birane destinacije.</p>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/bali 4.5.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">Bali 4.5</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toaleti 4
                            <br>
                            Dužina 13.6m &nbsp|&nbsp Širina 7.42m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/oceanis 46.1.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Jedrilica</p>
                            <p class="section-plovila__card__heading">Oceanis 46.1</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toaleti 4
                            <br>
                            Dužina 14.6m &nbsp|&nbsp Širina 4.5m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/lagoon40.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">LAGOON 40</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toaleti 4
                            <br>
                            Dužina 11.74m &nbsp|&nbsp Širina 6.77m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/lagoon 42.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">LAGOON 42</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 12 &nbsp|&nbsp Kabine 6 &nbsp|&nbsp Toaleti 4
                            <br>
                            Dužina 12.8m &nbsp|&nbsp Širina 7.7m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-12 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image"
                        src="./assets/images/plovila/catamaran-dufour-catamaran-48-per-sito1.jpg" alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">DUFOUR 48</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 5 &nbsp|&nbsp Toaleti 5
                            <br>
                            Dužina 15m &nbsp|&nbsp Širina 8m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/lagoon 46.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">LAGOON 46</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 8 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toaleti 4
                            <br>
                            Dužina 13.99m &nbsp|&nbsp Širina 7.96m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-8 </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/bavaria 42.jpeg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Jedrilica</p>
                            <p class="section-plovila__card__heading">Bavaria 42</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 7 &nbsp|&nbsp Kabine 3 &nbsp|&nbsp Toaleti 4
                            <br>
                            Dužina 12.8m &nbsp|&nbsp Širina 3.99m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-7 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/dufour 460.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">DUFOUR 460</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toaleti 2
                            <br>
                            Dužina 14.85m &nbsp|&nbsp Širina 4.74m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/dufour 470.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">DUFOUR 470</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toaleti 2
                            <br>
                            Dužina 14.85m &nbsp|&nbsp Širina 4.74m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/hanse 455.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Jedrilica</p>
                            <p class="section-plovila__card__heading">HANSE 455</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 8 &nbsp|&nbsp Kabine 3 &nbsp|&nbsp Toaleti 2
                            <br>
                            Dužina 13.95m &nbsp|&nbsp Širina 4.38m &nbsp|&nbsp A/C
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-8 </p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <?php require 'footer.php' ?>
    </body>

    </html>
<?php else: ?>
    <html lang="sr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MD Sailing - Schiffe</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Spüren Sie den Nervenkitzel des Segelns mit unserer Flotte moderner und komfortabler Segelboote und Katamarane." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung, Bali, Oceanis, Lagune, Dofour, Bayern, Hanse">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-plovila">
            <div class="section-hero__text">
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Spüren Sie den Nervenkitzel des Segelns mit unserer Flotte moderner und komfortabler Segelboote und
                    Katamarane.
                </p>
            </div>
        </section>
        <section class="section section-plovila">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Unsere Schiffe </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">Stöbern Sie in unserem Angebot an
                    Booten, die Ihnen zur Verfügung stehen. Ganz gleich, ob Sie auf der Suche nach einem luxuriösen
                    Katamaran oder einem romantischen Segelboot für zu zweit sind
                    Bei unseren Ausflügen bietet jedes Schiff Komfort und Sicherheit auf See mit erstklassigem Service und
                    sorgfältig ausgewählten Zielen.</p>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/bali 4.5.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">Bali 4.5</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Personal 10 &nbsp|&nbsp Kabinen 4 &nbsp|&nbsp Toiletten 4
                            <br>
                            Länge 13.6m &nbsp|&nbsp Breite 7.42m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/oceanis 46.1.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">
                                Segelboot</p>
                            <p class="section-plovila__card__heading">Oceanis 46.1</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Personal 10 &nbsp|&nbsp Kabinen 4 &nbsp|&nbsp Toiletten 4
                            <br>
                            Länge 14.6m &nbsp|&nbsp Breite 4.5m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/lagoon40.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">LAGOON 40</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Personal 10 &nbsp|&nbsp Kabinen 4 &nbsp|&nbsp Toiletten 4
                            <br>
                            Länge 11.74m &nbsp|&nbsp Breite 6.77m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/lagoon 42.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">LAGOON 42</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Personal 12 &nbsp|&nbsp Kabinen 6 &nbsp|&nbsp Toiletten 4
                            <br>
                            Länge 12.8m &nbsp|&nbsp Breite 7.7m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-12 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image"
                        src="./assets/images/plovila/catamaran-dufour-catamaran-48-per-sito1.jpg" alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">DUFOUR 48</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Personal 10 &nbsp|&nbsp Kabinen 5 &nbsp|&nbsp Toiletten 5
                            <br>
                            Länge 15m &nbsp|&nbsp Breite 8m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/lagoon 46.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">LAGOON 46</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Personal 8 &nbsp|&nbsp Kabinen 4 &nbsp|&nbsp Toiletten 4
                            <br>
                            Länge 13.99m &nbsp|&nbsp Breite 7.96m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-8 </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/bavaria 42.jpeg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">
                                Segelboot</p>
                            <p class="section-plovila__card__heading">Bavaria 42</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 7 &nbsp|&nbsp Kabine 3 &nbsp|&nbsp Toiletten 4
                            <br>
                            Länge 12.8m &nbsp|&nbsp Breite 3.99m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-7 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/dufour 460.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">DUFOUR 460</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toiletten 2
                            <br>
                            Länge 14.85m &nbsp|&nbsp Breite 4.74m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/dufour 470.webp"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">Katamaran</p>
                            <p class="section-plovila__card__heading">DUFOUR 470</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 10 &nbsp|&nbsp Kabine 4 &nbsp|&nbsp Toiletten 2
                            <br>
                            Länge 14.85m &nbsp|&nbsp Breite 4.74m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Rezerviši plovilo <img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-10 </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="section-plovila__cards">
                <article class="section-plovila__card">
                    <img class="section-plovila__card__image" src="./assets/images/plovila/hanse 455.jpg"
                        alt="slika broda" />
                    <div class="section-plovila__card__text">
                        <div class="section-plovila__card__title">
                            <p class="section-plovila__card__subheading">
                                Segelboot</p>
                            <p class="section-plovila__card__heading">HANSE 455</p>
                        </div>
                        <p class="section-plovila__card__paragraph">
                            Ljudi 8 &nbsp|&nbsp Kabine 3 &nbsp|&nbsp Toaleti 2
                            <br>
                            Länge 13.95m &nbsp|&nbsp Breite 4.38m &nbsp|&nbsp Klimaanlage
                        </p>
                    </div>
                    <div class="section-plovila__card__actions">
                        <a class="CTA CTA__small CTA__secondary" href="./#sailing-form">Buchen Sie ein Schiff<img
                                class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                        <div class="section-plovila__card__info">
                            <img class="section-plovila__card__info__icon" src="./assets/svgs/users.svg" />
                            <p class="section-plovila__card__info__text"> 1-8 </p>
                        </div>
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
<script src="./header.js">

</script>