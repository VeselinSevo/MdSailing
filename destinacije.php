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
        <title>MD Sailing - Destinacije</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <meta name="description"
            content="Otkrijte čuda destinacija koje nudimo dok plovite otvorenim morem. Od skrivenih ostrvskih utočišta do čudnih primorskih gradova, otkrijte savršenu destinaciju prilagođenu vašoj avanturi." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje" />
        <link rel="manifest" href="/site.webmanifest" />
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-destinacije">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"></h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Otkrijte predivna ostrva, istorijske gradove i uživajte u
                    nezaboravnim avanturama.
                </p>
            </div>
        </section>
        <section class="section-content-destinacije section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">
                    Naše destinacije
                </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Istražite čuda destinacija koje nudimo dok jedrite otvorenim
                    morem. Od skrivenih ostrvskih utočišta do živopisnih
                    primorskih gradova, otkrijte savršenu destinaciju
                    prilagođenu vašoj avanturi.
                </p>
            </div>
            <div class="section-content-destinacije__cards">
                <div class="section-plovila__cards">
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/hvar/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Hvar
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Ostrvo Hvar, jedno je od najpoznatijih i
                                najatraktivnijih turističkih destinacija duž
                                Jadranske obale. Sa svojom bogatom istorijom,
                                predivnom prirodom i raznolikim sadržajima, Hvar
                                privlači posetioce iz celog sveta.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./hvar">Saznaj više
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/dubrovnik/dubrovnik.jpg"
                            alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Dubrovnik
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Dubrovnik, poznat kao 'biser Jadrana', očarava
                                svojom bogatom istorijom, bajkovitom
                                arhitekturom i kristalno čistim morem. Svaki
                                kutak ovog grada nosi dah prošlosti i
                                neponovljivog šarma, pružajući nezaboravan
                                doživljaj.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./dubrovnik">Saznaj više
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                </div>
                <div class="section-plovila__cards">
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/korcula/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Korčula
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Korčula, predivni grad smešten na istoimenom
                                ostrvu u Hrvatskoj, pleni svojom neodoljivom
                                lepotom i bogatom istorijom. Ovaj grad je poznat
                                po mnogobrojnim znamenitostima koje očaravaju
                                posetioce širom sveta.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./korcula">Saznaj više
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/milna/2.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Milna
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Slikovito dalmatinsko selo Milna, smešteno na
                                ostrvu Brač u Hrvatskoj, predstavlja pravu oazu
                                mira i lepote koja privlači turiste iz celog
                                sveta. Ovo malo ribarsko selo na severnoj obali
                                Brača oduševljava posetioce svojim šarmom.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./milna">Saznaj više
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                </div>
                <div class="section-plovila__cards">
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/vis/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Vis
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Ostrvo Vis nalazi se u sredini Jadranskog mora,
                                gotovo na pola puta do Italije. Predstavlja
                                najudaljenije i možda najmisterioznije od svih
                                hrvatskih ostrva. Tokom decenija bio je zatvoren
                                za ostatak sveta, čuvajući svoju jedinstvenu i
                                bogatu istoriju.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./vis">Saznaj više
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/solta/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Šolta
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Ostrvo Šolta, smešteno u Jadranskom moru
                                nedaleko od Splita, predstavlja pravu oazu mira
                                i lepote. Ovo idilično ostrvo karakteriše
                                netaknuta priroda, kristalno čisto more, pitomi
                                pejzaži i tradicionalna mediteranska atmosfera
                                koja oduzima dah.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./solta">Saznaj više
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                </div>
                <div class="section-plovila__cards">
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/makarska/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Makarska
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Poluostrvski grad smešten uz ivicu Jadranskog
                                mora, koji će Vas zapanjiti svojom lepotom. Ovaj
                                grad ima nešto za svakoga, bilo da ste ljubitelj
                                sunca i plaže, avanturističkog duha ili pak
                                gurman koji uživa u lokalnoj kuhinji.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./makarska">Saznaj više
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/lastovo/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Lastovo
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Lastovo, smeštneo u južnom Jadranu, jedno je od
                                najmanje poznatih, ali izuzetno šarmantnih
                                hrvatskih ostrva. Ovo skriveno blago privlači
                                posetioce svojom netaknutom prirodom, bogatom
                                istorijom i tradiciojom.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./lastovo">Saznaj više
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                </div>
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
        <title>MD Sailing - Destinationen</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <meta name="description"
            content="Entdecken Sie die Wunder der von uns angebotenen Reiseziele, während Sie über das offene Meer segeln. Von versteckten Rückzugsorten auf Inseln bis hin zu malerischen Küstenstädten – entdecken Sie das perfekte Reiseziel, das auf Ihr Abenteuer zugeschnitten ist." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung" />
        <link rel="manifest" href="/site.webmanifest" />
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-destinacije">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"></h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Entdecken Sie wunderschöne Inseln, historische Städte und genießen Sie unvergessliche Abenteuer.

                </p>
            </div>
        </section>
        <section class="section-content-destinacije section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">
                    Unsere Destinationen
                </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Entdecken Sie die Wunder der von uns angebotenen Reiseziele, während Sie über das offene Meer segeln.
                    Von versteckten Rückzugsorten auf Inseln bis hin zu malerischen Küstenstädten – entdecken Sie das
                    perfekte Reiseziel, das auf Ihr Abenteuer zugeschnitten ist.

                </p>
            </div>
            <div class="section-content-destinacije__cards">
                <div class="section-plovila__cards">
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/hvar/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Hvar
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Die Insel Hvar ist eines der bekanntesten und attraktivsten Touristenziele an der
                                Adriaküste. Mit seiner reichen Geschichte, der wunderschönen Natur und den vielfältigen
                                Einrichtungen zieht Hvar Besucher aus aller Welt an.

                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./hvar">Mehr herausfinden
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/dubrovnik/dubrovnik.jpg"
                            alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Dubrovnik
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Dubrovnik, bekannt als die „Perle der Adria“, verzaubert mit seiner reichen Geschichte,
                                seiner märchenhaften Architektur und seinem kristallklaren Meer. Jeder Winkel dieser Stadt
                                strahlt den Hauch der Vergangenheit und den einzigartigen Charme aus und sorgt für ein
                                unvergessliches Erlebnis.

                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./dubrovnik">Mehr herausfinden
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                </div>
                <div class="section-plovila__cards">
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/korcula/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Korčula
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Korčula, eine wunderschöne Stadt auf der gleichnamigen Insel in Kroatien, besticht durch
                                ihre unwiderstehliche Schönheit und reiche Geschichte. Diese Stadt ist bekannt für ihre
                                zahlreichen Sehenswürdigkeiten, die Besucher aus aller Welt faszinieren.

                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./korcula">Mehr herausfinden
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/milna/2.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Milna
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Das malerische dalmatinische Dorf Milna auf der Insel Brač in Kroatien ist eine wahre Oase
                                der Ruhe und Schönheit, die Touristen aus aller Welt anzieht. Dieses kleine Fischerdorf an
                                der Nordküste von Brač begeistert Besucher mit seinem Charme.

                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./milna">Mehr herausfinden
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                </div>
                <div class="section-plovila__cards">
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/vis/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Vis
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Die Insel Vis liegt mitten in der Adria, fast auf halber Strecke nach Italien. Sie ist die
                                abgelegenste und vielleicht geheimnisvollste aller kroatischen Inseln. Jahrzehntelang blieb
                                es für den Rest der Welt verschlossen und bewahrte seine einzigartige und reiche Geschichte.

                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./vis">Mehr herausfinden
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/solta/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Šolta
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Die Insel Šolta, in der Adria unweit von Split gelegen, ist eine wahre Oase der Ruhe und
                                Schönheit. Diese idyllische Insel zeichnet sich durch unberührte Natur, kristallklares Meer,
                                sanfte Landschaften und eine traditionelle mediterrane Atmosphäre aus, die Ihnen den Atem
                                raubt.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./solta">Mehr herausfinden
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                </div>
                <div class="section-plovila__cards">
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/makarska/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Makarska
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Eine Halbinselstadt am Rande der Adria, die Sie mit ihrer Schönheit in Erstaunen versetzen
                                wird. Diese Stadt hat für jeden etwas zu bieten, egal ob Sie ein Sonnen- und
                                Strandliebhaber, ein Abenteuerlustiger oder ein Feinschmecker sind, der die lokale Küche
                                genießt.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./makarska">Mehr herausfinden
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
                    <article class="section-plovila__card">
                        <img class="section-plovila__card__image" src="./assets/images/lastovo/1.jpg" alt="slika broda" />
                        <div class="section-plovila__card__text">
                            <div class="section-plovila__card__title">
                                <p class="section-plovila__card__heading">
                                    Lastovo
                                </p>
                            </div>
                            <p class="section-plovila__card__paragraph">
                                Lastovo liegt in der südlichen Adria und ist eine der am wenigsten bekannten, aber äußerst
                                reizvollen kroatischen Inseln. Dieser verborgene Schatz zieht Besucher mit seiner
                                unberührten Natur, seiner reichen Geschichte und Tradition an.
                            </p>
                        </div>
                        <div class="section-plovila__card__actions">
                            <a class="CTA CTA__small CTA__secondary" href="./lastovo">Mehr herausfinden
                                <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                            <div class="section-plovila__card__info"></div>
                        </div>
                    </article>
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