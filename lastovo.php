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
        <title>MD Sailing - Lastovo</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Lastovo, smeštneo u južnom Jadranu, jedno je od najmanje poznatih, ali izuzetno šarmantnih hrvatskih ostrva. Ovo skriveno blago privlači posetioce svojom netaknutom prirodom, bogatom istorijom i tradiciojom." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje">

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="lastovo">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Lastovo </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Lastovo </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Lastovo, smeštneo u južnom Jadranu,
                    jedno je od najmanje poznatih, ali izuzetno šarmantnih hrvatskih ostrva. </p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Ovo skriveno blago privlači posetioce svojom
                        netaknutom prirodom, bogatom istorijom i tradicionalnom mediteranskom atmosferom.
                        Ostrvo Lastovo nudi nezaboravno iskustvo za ljubitelje prirode.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Sa svojim gustim borovim šumama, kristalno
                        čistim morem i slikovitim uvalama, ovo ostrvo je raj za istraživače i avanturiste.
                        Posetioci mogu uživati u brojnim aktivnostima na otvorenom, poput planinarenja, biciklizma, ronjenja
                        ili jednostavno opuštanja na prelepim plažama.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Izvanredna tišina i spokoj koju nudi Lastovo
                        daju vam priliku da se povežete sa prirodom i da se oslobodite stresa i užurbanosti svakodnevnog
                        života.
                        Ostrvo koje nije podleglo vrevi turizma, utočište je za one koji tragaju za istinskim, autentičnim
                        iskustvom.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Poseta Lastovu je kao putovanje kroz vreme,
                        vraća Vas u neko prošlo doba kada su mir i jednostavnost bili najveće bogatstvo.
                        Ovde, svaki trenutak je prilika za dublje uživanje u životu i otkrivanje skrivenih dragulja koji
                        čekaju da budu otkriveni.
                        Zato, dozvolite sebi luksuz spokojnog odmora i upustite se u avanturu istraživanja Lastova - ovo
                        malo ostrvo krije više nego što možete i zamisliti.</p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/lastovo/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Evo nekoliko najlepših plaža koje vredi posetiti:
                    </h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Plaža Saplun</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ova divlja plaža nalazi se na zapadnoj obali ostrva i poznata je po svom miru i netaknutoj prirodi.
                        Okružena je bujnim zelenilom i tirkiznim morem, pruža idealno mesto za opuštanje i uživanje u
                        tišini.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/lastovo/Plaza Saplun.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Plaža Saplun</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Plaža Mihajla</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Smeštena u slikovitom zalivu, plaža Mihajla očarava svojim belim šljunkom i kristalno čistim morem.
                        Mirna i skrivena, ova plaža je idealna za one koji traže intimnost i tišinu.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Plaža Lučica</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Sa svojim plitkim i toplim vodama, plaža Lučica je omiljeno mesto za kupanje i sunčanje.
                        Okružena je borovom šumom koja pruža prirodnu hladovinu i čini je idealnom destinacijom za porodične
                        izlete.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Plaža Pasadur</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ova šarmantna plaža nalazi se u istoimenom malom mestu i poznata je po svojoj netaknutoj lepoti i
                        kristalno čistim vodama.
                        Okružena je bujnom vegetacijom i pruža savršeno okruženje za opuštanje i uživanje u prirodi.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/lastovo/Pasadur plaza.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Plaža Pasadur</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Svaka od ovih plaža ima svoj jedinstveni šarm i privlačnost, nudeći posetiocima priliku da se
                        oslobode stresa i uživaju u miru i lepoti prirode na ostrvu Lastovo.
                    </p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Na ostrvu Lastovo možete uživati u autentičnoj dalmatinskoj kuhinji u brojnim restoranima i konobama
                        koji nude sveže pripremljene lokalne specijalitete.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">Evo nekoliko najboljih mesta za jelo na ostrvu
                        Lastovo:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Restoran Fumari
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ovaj restoran se nalazi u centru grada Lastova i poznat je po svojoj izvrsnoj ribljoj kuhinji.
                        Nudeći sveže ulovljenu ribu i plodove mora, restoran "Fumari" je omiljeno mesto među posetiocima
                        koji žele da probaju autentične dalmatinske specijalitete.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Augusta Insula
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Smeštena u slikovitom zalivu Zaklopatica, konoba "Augusta Insula" nudi tradicionalna jela
                        pripremljena po starim receptima.
                        Specijaliteti poput jagnjetine ispod sača, domaćih testenina i sveže salate od lokalnih sastojaka
                        čine ovu konobu nezaobilaznom destinacijom za gurmane.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Konoba Tramontana
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ova tradicionalna konoba smeštena je u selu Pasadur i poznata je po svojoj autentičnoj atmosferi i
                        domaćoj kuhinji.
                        Posetioci mogu uživati u raznovrsnim jelima, uključujući tradicionalne dalmatinske specijalitete
                        poput pašticade, brudeta i lignji na žaru.
                    </p>
                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/lastovo/1.jpg" />
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/lastovo/Pasadur plaza.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/lastovo/lastovo-otok2.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/lastovo/lastovo-otok.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/lastovo/Plaza Saplun.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/lastovo/2.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require 'footer.php' ?>
        </script>
    </body>

    </html>
<?php else: ?>
    <html lang="de">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MD Sailing - Lastovo</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Lastovo liegt in der südlichen Adria und ist eine der am wenigsten bekannten, aber äußerst reizvollen kroatischen Inseln. Dieser verborgene Schatz lockt Besucher mit seiner unberührten Natur, seiner reichen Geschichte und Tradition." />
        <meta name="keywords"
            content="
Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung">

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="lastovo">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Lastovo </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Lastovo </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">Lastovo liegt in der südlichen Adria
                    und ist eine der am wenigsten bekannten, aber äußerst reizvollen kroatischen Inseln. </p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Dieser verborgene Schatz lockt Besucher mit
                        seiner unberührten Natur, seiner reichen Geschichte und der traditionellen mediterranen Atmosphäre.
                        Die Insel Lastovo bietet Naturliebhabern ein unvergessliches Erlebnis.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Mit ihren dichten Pinienwäldern, dem
                        kristallklaren Meer und den malerischen Buchten ist diese Insel ein Paradies für Entdecker und
                        Abenteurer. Besucher können zahlreiche Outdoor-Aktivitäten wie Wandern, Radfahren, Tauchen genießen
                        oder einfach an den wunderschönen Stränden entspannen.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Tourismus erlegen ist, ist sie ein Paradies für
                        diejenigen, die ein echtes, authentisches Erlebnis suchen.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Ein Besuch in Lastovo ist wie eine Zeitreise,
                        er führt Sie zurück in eine vergangene Zeit, als Frieden und Einfachheit der größte Reichtum waren.
                        Hier ist jeder Moment eine Gelegenheit, das Leben noch intensiver zu genießen und verborgene Schätze
                        zu entdecken, die nur darauf warten, entdeckt zu werden. Gönnen Sie sich daher den Luxus eines
                        ruhigen Urlaubs und begeben Sie sich auf das Abenteuer, Lastovo zu erkunden – diese kleine Insel
                        verbirgt mehr, als Sie sich vorstellen können.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/lastovo/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Hier sind einige der schönsten Strände, die
                        einen Besuch wert sind:
                    </h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Saplun-Strand</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dieser wilde Strand liegt an der Westküste der Insel und ist für seine Ruhe und unberührte Natur
                        bekannt. Umgeben von üppigem Grün und türkisfarbenem Meer ist es ein idealer Ort zum Entspannen und
                        Genießen der Stille.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/lastovo/Plaza Saplun.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Saplun-Strand</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Mihajla-Strand</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Der Mihajla-Strand liegt in einer malerischen Bucht und bezaubert mit seinen weißen Kieselsteinen
                        und dem kristallklaren Meer. Dieser friedliche und versteckte Strand ist ideal für diejenigen, die
                        Intimität und Stille suchen.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Lučica-Strand
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Mit seinem flachen und warmen Wasser ist der Strand Lučica ein beliebter Ort zum Schwimmen und
                        Sonnenbaden. Es ist von einem Pinienwald umgeben, der natürlichen Schatten spendet und es zu einem
                        idealen Ziel für Familienausflüge macht.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Plaža Pasadur</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ova šarmantna plaža nalazi se u istoimenom malom mestu i poznata je po svojoj netaknutoj lepoti i
                        kristalno čistim vodama.
                        Okružena je bujnom vegetacijom i pruža savršeno okruženje za opuštanje i uživanje u prirodi.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/lastovo/Pasadur plaza.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Pasadur-Strand</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dieser bezaubernde Strand liegt in der gleichnamigen Kleinstadt und ist für seine unberührte
                        Schönheit und das kristallklare Wasser bekannt. Es ist von üppiger Vegetation umgeben und bietet die
                        perfekte Umgebung zum Entspannen und Genießen der Natur.
                    </p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Jeder dieser Strände hat seinen eigenen Charme und Reiz und bietet Besuchern die Möglichkeit, Stress
                        abzubauen und die Ruhe und Schönheit der Natur auf der Insel Lastovo zu genießen. Auf der Insel
                        Lastovo können Sie authentische dalmatinische Küche in zahlreichen Restaurants und Tavernen
                        genießen, die frisch zubereitete lokale Spezialitäten anbieten.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">Hier sind einige der besten Restaurants auf der
                        Insel Lastovo:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Restaurant Fumari
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dieses Restaurant liegt im Zentrum von Lastovo und ist für seine ausgezeichnete Fischküche bekannt.
                        Das Restaurant „Fumari“ bietet frisch gefangenen Fisch und Meeresfrüchte und ist ein beliebter Ort
                        für Besucher, die authentische dalmatinische Spezialitäten probieren möchten.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Augusta Insula
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        In der malerischen Bucht von Zaklopatica gelegen, bietet die Taverne „Augusta Insula“ traditionelle
                        Gerichte an, die nach alten Rezepten zubereitet werden. Spezialitäten wie Lamm vom Kamm,
                        hausgemachte Pasta und frische Salate aus lokalen Zutaten machen diese Taverne zu einem
                        unverzichtbaren Ziel für Feinschmecker.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Konoba Tramontana
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Diese traditionelle Taverne befindet sich im Dorf Pasadur und ist für ihre authentische Atmosphäre
                        und lokale Küche bekannt. Besucher können eine Vielzahl von Gerichten genießen, darunter
                        traditionelle dalmatinische Spezialitäten wie Pašticada, Brudeto und gegrillter Tintenfisch.

                    </p>
                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/lastovo/1.jpg" />
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/lastovo/Pasadur plaza.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/lastovo/lastovo-otok2.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/lastovo/lastovo-otok.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/lastovo/Plaza Saplun.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/lastovo/2.jpg" />
                        </div>
                    </div>
                </div>
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