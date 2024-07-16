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
        <title>MD Sailing - Makarska</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Poluostrvski grad smešten uz ivicu Jadranskog mora, koji će Vas zapanjiti svojom lepotom. Ovaj grad ima nešto za svakoga, bilo da ste ljubitelj sunca i plaže, avanturističkog duha ili pak gurman koji uživa u lokalnoj kuhinji." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje">

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="makarska">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Makarska </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Makarska </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Makarska - Poluostrvski grad
                    smešten uz ivicu Jadranskog mora.</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Biser hrvatske obale koji će Vas zapanjiti
                        svojom lepotom i raznolikošću.
                        Ovaj grad ima nešto za svakoga, bilo da ste ljubitelj sunca i plaže, avanturističkog duha ili pak
                        gurman koji uživa u lokalnoj kuhinji.
                        Zamislite se kako šetate dugim šetalištima obasjanim suncem dok udišete sveži morski vazduh i
                        uživate u pogledu na kristalno čisto more.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Makarska je upravo takvo mjesto - pravi raj za
                        ljubitelje plaže i vodenih sportova.
                        Plaže su očaravajuće, a more je osvežavajuće i idealno za plivanje ili ronjenje.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">No, Makarska je mnogo više od plaža.
                        Zahvaljujući spektakularnom planinskom lancu Biokovo, ovde ćete pronaći i prekrasne planinske staze
                        koje vode do neverovatnih vidikovaca sa kojih puca pogled na celi grad i okolinu.
                        To je prilika za avanturiste da istraže netaknutu prirodu i osete mir i tišinu koju nudi ova
                        planinska oaza.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">A kad ogladnite, ne propustite priliku da
                        uživate u bogatstvu ukusa dalmatinske kuhinje u jednom od lokalnih restorana ili konoba.
                        Ovde ćete pronaći sveže ulovljenu ribu, ukusne morske plodove, domaće maslinovo ulje i vrhunska vina
                        koja će zadovoljiti i najizbirljivije nepce.
                        Ali to nije sve! Makarska nudi i živahnu noćnu scenu sa brojnim barovima, klubovima i lounge
                        barovima koji će Vas zabaviti do kasno u noć.
                        Upoznajte lokalno stanovništvo, zaplešite uz ritam muzike i uživajte u opuštenoj atmosferi ovog
                        prekrasnog grada.</p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/makarska/1.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Ovo su naše omiljene stvari koje možete raditi u
                        Makarskoj:</h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Posetite ogradu ljubavi</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ograda ljubavi u Makarskoj predstavlja posebno mesto na kojem se posetioci i lokalci odlučuju da
                        simbolično obeleže svoju ljubav.
                        Nalazi se duž obale, a na lancima ograde su zaključani brojni katanci, svaki sa svojom pričom.
                        Ova tradicija potiče iz različitih delova sveta, a u Makarskoj je posebno omiljena.
                        Uz prelep pogled na Jadransko more i ugodnu atmosferu, ograda ljubavi postala je nezaobilazna tačka
                        za zaljubljene parove i romantične duše koje posećuju ovaj predivni grad na hrvatskoj obali.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/ograda ljubavi.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Ograda ljubavi</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Posetite astronomsku opservatoriju</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Da li ste znali da Makarska ima astronomsku opservatoriju?
                        Za one koji su zainteresovani za svemirska istraživanja ili jednostavno radoznali putnici, posetite
                        opservatoriju koja se nalazi samo 50 metara od centra grada!
                        Makarska ima sreću da doživi niske nivoe svetlosnog zagađenja i sa obzirom na svoju odličnu lokaciju
                        blizu mora, okruženu borovom šumom, preporučujemo posetu opservatoriji u sumrak.
                        Imaćete priliku da vidite spektakularno zvezdano nebo koje se može opisati samo kao vanzemaljsko!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Observatory.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Astronomska opservatorija</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Planinarenje planinom Biokovo</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Planinarenje na planini Biokovo iznad Makarske pruža nezaboravno iskustvo za sve ljubitelje prirode
                        i avanture.
                        Biokovo je impresivan planinski lanac koji se uzdiže iznad obale Dalmacije, pružajući spektakularne
                        pejzaže i neverovatne vidike.
                        Jedan od najpopularnijih staza za planinarenje je staza koja vodi do najvišeg vrha Biokova - Svetog
                        Jurea, koji se uzdiže na visinu od 1.762 metra nadmorske visine.
                        Ova staza nudi izazovno ali uzbudljivo planinarenje kroz guste borove šume i strmije delove terena.
                        Na vrhu Svetog Jurea, posetioci će biti nagrađeni zadivljujućim panoramskim pogledom na obalu
                        Jadranskog mora, Makarsku rivijeru i okolne planinske vrhove.
                        Ako je dan dovoljno vedar možda ćete videti čak i delove Italije i Bosne.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/makarska/Biokovo.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Biokovo</p>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/makarska/Sv Jure.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Najvišeg vrha Biokova - Sveti Jure</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Najbolja mesta za izlazak u Makarskoj:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Kada je reč o mestima za izlazak, Makarska možda
                        nije najpoznatija destinacija među putnicima, ali ima neke od najuzbudljivijih noćnih lokacija u
                        Hrvatskoj.
                        Od klubova u pećinama do otvorenih prostora, očekujte neočekivano od Makarske!</p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Night life.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Noćni život</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Club Deep
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Klub Deep je neosporno najpoznatiji i najpopularniji noćni klub u Makarskoj, a razlozi za to su
                        očigledni.
                        Smešten u pećini duž obale Makarske, ovaj klub privlači ljubitelje zabave iz svih krajeva koji
                        dolaze da uživaju u house ritmovima i obilju pića.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Klub deep.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Klub Deep</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Petar Pan
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Makarska je prepuna klubova na otvorenom, a jedno od omiljenih mesta za provod je Petar Pan.
                        Smešten tik uz plažu, ovaj klub nudi žurke uz zvuke rnb-a, elektronske i plesne muzike, dok se
                        družite sa saputnicima i lokalnim stanovnicima Makarske do ranih jutarnjih sati!
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image"
                        src="./assets/images/makarska/Petar Pan club.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Klub Petar Pan</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Gde jesti u Makarskoj:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Kao i u većini gradova u Hrvatskoj, restorani u Makarskoj nude ukusnu hranu koja će oduševiti vaše
                        nepce.
                        Tik uz obalu možete pronaći najsvežiji ulov dana ili se odlučiti za bogatu ponudu hrvatske kuhinje.
                        Ako Vas zanima gde se zaustaviti, svakako preporučujemo da pitate lokalce za njihove omiljene i
                        tajne preporuke!
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Domina
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ljubitelji pizze, obratite pažnju! Omiljena među turistima, Domina je poznata po odličnoj usluzi i
                        još boljoj pici.
                        Idealno mesto za opuštanje i punjenje energije uz parče po vašem izboru.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Briskula
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        U centru glavnog trga Makarske, očekuje Vas lokalni favorit koji nudi mediteransku kuhinju obogaćenu
                        tradicionalnim jelima uz hrvatska vina i domaće rakije.
                        Opustite se uz predivan pogled na Jadransko more i lokalno vino u ruci dok završavate dan!
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Freyja
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Jedinstvena i kreativna kuhinja je ono što izdvaja restoran Freyja od drugih u Makarskoj.
                        Naziv restorana inspirisan je nordijskom mitologijom, odajući počast strasti i lepoti, a to se
                        odražava i u njihovim jelima.
                        Tokom dana možete uživati u opuštenoj atmosferi i konceptu ulične hrane, dok večernje čari donose
                        sofisticiranije doživljaje sa mediteranskim sastojcima i modernim tumačenjem tradicionalnih
                        dalmatinskih recepata.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/makarska/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Posetite najlepše plaže u Makarskoj:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Obzirom da se Makarska Rivijera proteže na preko 60 kilometara duž obale, očekuje Vas niz
                        spektakularnih plaža duž njenih obala!
                        Evo nekoliko naših omiljenih koje biste trebali istražiti!
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Plaža Makarska
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Baška Voda
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Plaza Baska Voda.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Plaža Baška Voda</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Plaža Nugal
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Nugal Plaza.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Plaža Nugal</p>

                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/makarska/Night life.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/makarska/Nugal Plaza.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image"
                                src="./assets/images/makarska/ograda ljubavi.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/makarska/Biokovo.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/makarska/Plaza Baska Voda.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/makarska/Sv Jure.jpg" />
                        </div>
                    </div>
                </div>
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
        <title>MD Sailing - Makarska</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Eine Halbinselstadt am Rande der Adria, die Sie mit ihrer Schönheit in Erstaunen versetzen wird. Diese Stadt hat für jeden etwas zu bieten, egal ob Sie ein Sonnen- und Strandliebhaber, ein Abenteuerlustiger oder ein Feinschmecker sind, der die lokale Küche genießt." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung">

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="makarska">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Makarska </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Makarska </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Makarska – Halbinselstadt am Rande
                    der Adria.</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Die Perle der kroatischen Küste, die Sie mit
                        ihrer Schönheit und Vielfalt in Erstaunen versetzen wird. Diese Stadt hat für jeden etwas zu bieten,
                        egal ob Sie ein Sonnen- und Strandliebhaber, ein Abenteuerlustiger oder ein Feinschmecker sind, der
                        die lokale Küche genießt. Stellen Sie sich vor, Sie spazieren entlang der langen, sonnenbeschienenen
                        Promenaden, atmen die frische Meeresluft ein und genießen den Blick auf das kristallklare Meer.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Makarska ist genau so ein Ort – ein wahres
                        Paradies für Strand- und Wassersportliebhaber. Die Strände sind bezaubernd und das Meer erfrischend
                        und ideal zum Schwimmen oder Tauchen.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Aber Makarska ist viel mehr als nur Strände.
                        Dank des spektakulären Biokovo-Gebirges finden Sie hier auch wunderschöne Bergpfade, die zu
                        unglaublichen Aussichtspunkten führen, von denen aus Sie die gesamte Stadt und die Umgebung
                        überblicken können. Es ist eine Gelegenheit für Abenteurer, die unberührte Natur zu erkunden und die
                        Ruhe und Stille dieser Bergoase zu spüren.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Und wenn Sie Hunger verspüren, sollten Sie sich die Gelegenheit nicht entgehen lassen, die
                        reichhaltigen Aromen der dalmatinischen Küche in einem der örtlichen Restaurants oder Tavernen zu
                        genießen. Hier finden Sie fangfrischen Fisch, köstliche Meeresfrüchte, hausgemachtes Olivenöl und
                        Spitzenweine, die selbst die anspruchsvollsten Gaumen zufrieden stellen. Aber das ist nicht alles!
                        Makarska bietet auch ein lebhaftes Nachtleben mit zahlreichen Bars, Clubs und Loungebars, die Sie
                        bis spät in die Nacht unterhalten. Treffen Sie die Einheimischen, tanzen Sie zum Rhythmus der Musik
                        und genießen Sie die entspannte Atmosphäre dieser wunderschönen Stadt.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/makarska/1.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Hier sind unsere Lieblingsaktivitäten in
                        Makarska:</h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Besuchen Sie den Zaun der Liebe</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Der Liebeszaun in Makarska ist ein besonderer Ort, an dem Besucher und Einheimische beschließen,
                        ihre Liebe symbolisch zu markieren. Es liegt an der Küste und an den Ketten des Zauns sind
                        zahlreiche Vorhängeschlösser befestigt, jedes mit seiner eigenen Geschichte. Diese Tradition hat
                        ihren Ursprung in verschiedenen Teilen der Welt und ist in Makarska besonders beliebt. Mit einem
                        wunderschönen Blick auf die Adria und einer angenehmen Atmosphäre ist der Zaun der Liebe zu einem
                        unverzichtbaren Punkt für verliebte Paare und romantische Seelen geworden, die diese wunderschöne
                        Stadt an der kroatischen Küste besuchen.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/ograda ljubavi.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">
                        Zaun der Liebe</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Besuchen Sie ein astronomisches Observatorium
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Wussten Sie, dass es in Makarska ein astronomisches Observatorium gibt? Für diejenigen, die sich für
                        die Erforschung des Weltraums interessieren oder einfach nur neugierige Reisende sind, besuchen Sie
                        das Observatorium, das nur 50 Meter vom Stadtzentrum entfernt liegt! Makarska hat das Glück, eine
                        geringe Lichtverschmutzung zu haben. Aufgrund der hervorragenden Lage nahe dem Meer und umgeben von
                        Pinienwäldern empfehlen wir einen Besuch des Observatoriums in der Abenddämmerung. Sie haben die
                        Möglichkeit, einen spektakulären Sternenhimmel zu sehen, den man nur als jenseitig bezeichnen kann!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Observatory.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Astronomisches Observatorium</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Bergsteigen auf dem Berg Biokovo</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Das Wandern auf dem Berg Biokovo oberhalb von Makarska ist ein unvergessliches Erlebnis für alle
                        Natur- und Abenteuerliebhaber. Biokovo ist eine beeindruckende Bergkette, die sich über der
                        dalmatinischen Küste erhebt und spektakuläre Landschaften und unglaubliche Ausblicke bietet. Einer
                        der beliebtesten Wanderwege ist der Weg, der zum höchsten Gipfel des Biokovo – Sveti Jure – führt,
                        der eine Höhe von 1.762 Metern über dem Meeresspiegel erreicht. Dieser Weg bietet anspruchsvolle,
                        aber aufregende Wanderungen durch dichte Kiefernwälder und steileres Gelände. Auf dem Gipfel von St.
                        George werden Besucher mit einem atemberaubenden Panoramablick auf die Adriaküste, die Makarska
                        Riviera und die umliegenden Berggipfel belohnt. Wenn der Tag klar genug ist, können Sie
                        möglicherweise sogar Teile von Italien und Bosnien sehen.
                        Der höchste Gipfel von Bikova-Sveti Jure

                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/makarska/Biokovo.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Biokovo</p>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/makarska/Sv Jure.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Der höchste Gipfel von Biokovo – Sveti Jure</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Die besten Orte zum Ausgehen in Makarska:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Wenn es um Orte zum Ausgehen geht, ist Makarska
                        vielleicht nicht das berühmteste Reiseziel unter Reisenden, aber es verfügt über einige der
                        aufregendsten Ausgehmöglichkeiten in Kroatien. Von Clubs in Höhlen bis hin zu Freiflächen – erwarten
                        Sie in Makarska das Unerwartete!</p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Night life.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Nachtleben</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Club Deep
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Club Deep ist zweifellos der berühmteste und beliebteste Nachtclub in Makarska, und die Gründe dafür
                        liegen auf der Hand. Dieser Club befindet sich in einer Höhle an der Küste von Makarska und zieht
                        Partygänger aus aller Welt an, die kommen, um House-Beats und jede Menge Drinks zu genießen.

                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Klub deep.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Klub Deep</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Petar Pan
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Petar Pan Makarska ist voll von Outdoor-Clubs und einer der beliebtesten Orte zum Verweilen ist
                        Petar Pan. Dieser direkt am Strand gelegene Club bietet Partys mit den Klängen von RNB,
                        elektronischer Musik und Tanzmusik, während Sie sich bis in die frühen Morgenstunden mit
                        Mitreisenden und Einheimischen aus Makarska unterhalten!
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image"
                        src="./assets/images/makarska/Petar Pan club.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Peter Pan Club</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Wo man in Makarska essen kann:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Wie in den meisten Städten Kroatiens bieten die Restaurants in Makarska köstliche Speisen an, die
                        Ihren Gaumen erfreuen werden. Direkt an der Küste können Sie den frischesten Fang des Tages finden
                        oder sich für das reichhaltige Angebot der kroatischen Küche entscheiden. Wenn Sie wissen möchten,
                        wo Sie einkehren können, empfehlen wir Ihnen auf jeden Fall, die Einheimischen nach ihren Lieblings-
                        und Geheimtipps zu fragen!
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Domina
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Pizzaliebhaber aufgepasst! Domina's ist bei Touristen beliebt und bekannt für seinen exzellenten
                        Service und seine noch bessere Pizza. Ein idealer Ort, um sich zu entspannen und bei einem Stück
                        Ihrer Wahl neue Energie zu tanken.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Briskula
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Im Zentrum des Hauptplatzes von Makarska erwartet Sie ein lokaler Favorit, der mediterrane Küche,
                        angereichert mit traditionellen Gerichten, sowie kroatischen Weinen und lokalen Brandys bietet.
                        Entspannen Sie sich bei einem wunderschönen Blick auf die Adria und einem lokalen Wein in der Hand,
                        um den Tag ausklingen zu lassen!
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Freyja
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die einzigartige und kreative Küche unterscheidet das Restaurant Freyja von anderen in Makarska. Der
                        Name des Restaurants ist von der nordischen Mythologie inspiriert und zollt Leidenschaft und
                        Schönheit Tribut, was sich auch in den Gerichten widerspiegelt. Tagsüber können Sie die entspannte
                        Atmosphäre und das Streetfood-Konzept genießen, während der abendliche Charme anspruchsvollere
                        Erlebnisse mit mediterranen Zutaten und einer modernen Interpretation traditioneller dalmatinischer
                        Rezepte bietet.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/makarska/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Besuchen Sie die schönsten Strände in Makarska:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Wenn man bedenkt, dass sich die Riviera von Makarska über eine Länge von über 60 Kilometern entlang
                        der Küste erstreckt, erwarten Sie an ihren Ufern eine Reihe spektakulärer Strände! Hier sind einige
                        unserer Favoriten, die Sie sich unbedingt ansehen sollten!
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Plaža - Strand
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Baška Voda
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Plaza Baska Voda.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Baška Voda</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Nugal-Strand
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/makarska/Nugal Plaza.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Nugal-Strand</p>

                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/makarska/Night life.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/makarska/Nugal Plaza.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image"
                                src="./assets/images/makarska/ograda ljubavi.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/makarska/Biokovo.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/makarska/Plaza Baska Voda.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/makarska/Sv Jure.jpg" />
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