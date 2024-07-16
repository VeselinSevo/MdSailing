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
        <title>MD Sailing - Korčula</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Korčula, predivni grad smešten na istoimenom ostrvu u Hrvatskoj, pleni svojom neodoljivom lepotom i bogatom istorijom. Ovaj grad je poznat po mnogobrojnim znamenitostima koje očaravaju posetioce širom sveta." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje">

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="korcula">
            <div class="section-hero__text">

            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Korčula </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Ovaj grad je poznat po mnogobrojnim
                    znamenitostima koje očaravaju posetioce širom sveta.</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Jedna od najznačajnijih atrakcija grada je stari
                        grad Korčula, čije su uske popločane ulice inspiracija za istraživanje i otkrivanje skrivenih
                        dragulja. U samom srcu starog grada nalazi se Katedrala sv. Marka, remek-delo venecijanskog
                        renesansnog stila, koja oduzima dah svojom arhitekturom i umetničkim delima.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Korčula je takođe poznata kao rodno mesto
                        slavnog istraživača Marka Pola, a posetioci mogu istražiti njegovu rodnu kuću koja sada služi kao
                        muzej posvećen njegovom životu i avanturama.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Osim istoriskih znamenitosti, Korčula nudi i
                        prelepe plaže i kristalno čisto more, idealne za opuštanje i uživanje u suncu. Za ljubitelje
                        aktivnog odmora, otok nudi brojne mogućnosti za planinarenje, biciklizam i vodene sportove.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Jedna od nezaobilaznih aktivnosti tokom posete
                        Korčuli je degustacija lokalnih specijaliteta i vina. Ovaj region je poznat po svojim vinogradima i
                        proizvodnji kvalitetnih vina, a posetioci mogu uživati u autentičnoj dalmatinskoj kuhinji u
                        šarmantnim restoranima i konobama.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Ukratko, Korčula je destinacija koja ima sve -
                        fascinantnu istoriju, prelepu prirodu, bogatu gastronomsku ponudu i nezaboravne aktivnosti. Posetom
                        ovom čarobnom gradu, sigurno ćete stvoriti uspomene koje će trajati čitav život.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image"
                        src="./assets/images/korcula/old town korcula.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Stari Grad</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Aktivnosti na ostrvu Korčula:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Na Korčuli postoji obilje stvari koje možete raditi, videti i probati tokom posete ostrvu.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Poseta pećini Vela Spila</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Nad gradom Vela Luka uzdiže se pećina Vela Spila, veliki otvoreni prostor sa kupolastim svodom.
                        Prošetajte kratko do brda Pinski Rat, koje se uzdiže na oko 130 metara iznad nivoa mora, i očarajte
                        se eliptično oblikovanom pećinom visokom 17 metara i širokom oko 40 metara. Kao jedno od
                        najznačajnijih praistorijskih pećinskih staništa u Evropi, ovo je mesto koje jednostavno morate
                        posetiti!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/korcula/vela spila.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Vela Spila</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Probajte lokalna vina</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Vinogradi blizu sela Lumbarda odgovorni su za proizvodnju poznate sorte vina Grk, koja se ne može
                        naći nigde drugde na ostrvu, a kamoli u zemlji. Obiđite vinarije i probajte autohtone sorte, čak
                        možete uzeti bicikl i napraviti avanturu od toga, zaustavljajući se da probate lokalne proizvode i
                        okusite najbolje kapi koje domaćin ima da ponudi. Popularne korčulanske vinarije koje nude
                        degustacije su Vinarija Grk, Vinarija Popić, Vinarija Bire i Vinarija Lovrić, sve smeštene u
                        Lumbardi.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ako ste raspoloženi za avanturu, možete posetiti i obližnje poluostrvo Pelješac da biste posetili
                        neke od najvećih i najstarijih vinarija u Dalmaciji.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/korcula/Korcula vinograd.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Vinogradi</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Pogledajte Morešku mačevalačku igru</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ako se nalazite na ostrvu tokom meseca jula ili avgusta, ne propustite tradicionalnu Morešku
                        mačevalačku igru. Tu su plesanje, pevanje i mačevanje - i mačevanje je pravo! Ovaj ples se nekada
                        izvodio širom Mediterana, ali danas ga možete videti samo na ostrvu Korčula, gde neguju ovu
                        tradiciju već više od 400 godina!
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Predstava se igra dva puta nedeljno i većinom je rasprodata, pa se pobrinite da unapred rezervišete
                        svoje karte i dođete barem sat vremena ranije kako biste dobili dobro mesto!
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/korcula/korcula ples.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Tradiciono plesanje</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Najbolji barovi u Korčuli:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Koktel bar "Massimo"
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Dos Locos
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Koktel bar Privi Zal Lumbarda
                    </p>
                    <!-- <ul class="section-content__blog__section__list" >
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Carpe Diem</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Nautica Bar</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Hula Hula Bar</p>
                        </li>
                    </ul> -->
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Gde jesti na Korčuli:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Ovo su samo neka od mnogobrojnih lokacija gde
                        možete jesti ukusnu hranu.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Belin
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Vinski bar Bokar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Aterina
                    </p>
                    <!-- <ul class="section-content__blog__section__list" >
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Mizarola</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Apetti</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Divino</p>
                        </li>
                    </ul> -->
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Posetite najlepše plaže na Korčuli:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Vela Pržina
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Bilin Žal
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Pupnatska luka
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/korcula/Pupnatska Luka.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Pupnatska luka</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Plaža Vaja
                    </p>
                    <!-- <ul class="section-content__blog__section__list" >
                    <li class="section-content__blog__section__item" >
                        <p class="section-content__blog__section__paragraph" >Pokonji dol</p>
                    </li>
                    <li class="section-content__blog__section__item" >
                        <p class="section-content__blog__section__paragraph" >Mekičevica plaža</p>
                    </li>
                    <li class="section-content__blog__section__item" >
                        <p class="section-content__blog__section__paragraph" >Dubovica</p>
                    </li>
                </ul> -->

                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/korcula/1.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/korcula/korcula ples.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image"
                                src="./assets/images/korcula/Korcula vinograd.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image"
                                src="./assets/images/korcula/old town korcula.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/korcula/Pupnatska Luka.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/korcula/vela spila.jpg" />
                        </div>
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
        <title>MD Sailing - Korčula</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description" content="Korčula, eine wunderschöne Stadt auf der gleichnamigen Insel in Kroatien, besticht durch ihre unwiderstehliche Schönheit und reiche Geschichte. Diese Stadt ist bekannt für ihre zahlreichen Sehenswürdigkeiten, die Besucher aus aller Welt faszinieren.
" />
        <meta name="keywords"
            content="
Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung">

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="korcula">
            <div class="section-hero__text">

            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Korčula </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Diese Stadt ist bekannt für ihre
                    zahlreichen Sehenswürdigkeiten, die Besucher aus aller Welt faszinieren. </p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Eine der wichtigsten Sehenswürdigkeiten der
                        Stadt ist die Altstadt von Korčula, deren enge, gepflasterte Gassen eine Inspiration für die
                        Erkundung und Entdeckung verborgener Schätze sind. Im Herzen der Altstadt befindet sich die
                        Kathedrale St. Marka, ein Meisterwerk des venezianischen Renaissancestils, das Ihnen mit seiner
                        Architektur und Kunstwerken den Atem raubt.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Korčula ist auch als Geburtsort des berühmten
                        Entdeckers Marco Polo bekannt, und Besucher können seinen Geburtsort erkunden, der heute als Museum
                        dient, das seinem Leben und seinen Abenteuern gewidmet ist.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Neben historischen Sehenswürdigkeiten bietet
                        Korčula auch wunderschöne Strände und kristallklares Meer, ideal zum Entspannen und Genießen der
                        Sonne. Für Liebhaber eines aktiven Urlaubs bietet die Insel zahlreiche Möglichkeiten zum Wandern,
                        Radfahren und Wassersport.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Eine der unverzichtbaren Aktivitäten bei einem
                        Besuch in Korčula ist die Verkostung lokaler Spezialitäten und Weine. Diese Region ist für ihre
                        Weinberge und die Produktion hochwertiger Weine bekannt und Besucher können authentische
                        dalmatinische Küche in charmanten Restaurants und Tavernen genießen.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Kurz gesagt, Korčula ist ein Reiseziel, das
                        alles zu bieten hat – faszinierende Geschichte, wunderschöne Natur, reichhaltiges gastronomisches
                        Angebot und unvergessliche Aktivitäten. Wenn Sie diese magische Stadt besuchen, werden Sie mit
                        Sicherheit Erinnerungen schaffen, die ein Leben lang anhalten.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image"
                        src="./assets/images/korcula/old town korcula.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">
                    Alte Stadt</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Aktivitäten auf der Insel Korčula:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Auf Korčula gibt es während Ihres Inselbesuchs viel zu tun, zu sehen und auszuprobieren
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Besuch der Höhle Vela Spila</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Über der Stadt Vela Luka erhebt sich die Höhle Vela Spila, ein großer offener Raum mit einem
                        Kuppelgewölbe. Machen Sie einen kurzen Spaziergang zum Hügel Pinski Rat, der etwa 130 Meter über dem
                        Meeresspiegel liegt, und lassen Sie sich von der elliptisch geformten Höhle mit einer Höhe von 17
                        Metern und einer Breite von etwa 40 Metern verzaubern. Als einer der bedeutendsten prähistorischen
                        Höhlenlebensräume Europas ist dies ein Ort, den Sie einfach besuchen müssen!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/korcula/vela spila.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Vela Spila</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Probieren Sie lokale Weine</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Weinberge in der Nähe des Dorfes Lumbarda sind für die Produktion der berühmten Grk-Weinsorte
                        verantwortlich, die nirgendwo anders auf der Insel, geschweige denn im Land, zu finden ist. Besuchen
                        Sie Weingüter und probieren Sie einheimische Rebsorten. Sie können sogar mit dem Fahrrad ein
                        Abenteuer erleben und anhalten, um lokale Produkte zu probieren und die besten Tropfen zu probieren,
                        die der Gastgeber zu bieten hat. Beliebte Weingüter in Korčula, die Verkostungen anbieten, sind
                        Vinarija Grk, Vinarija Popić, Vinarija Bire und Vinarija Lovrić, alle in Lumbarda gelegen.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Wenn Sie Lust auf Abenteuer haben, können Sie auch die nahe gelegene Halbinsel Pelješac besuchen, um
                        einige der größten und ältesten Weingüter Dalmatiens zu besuchen.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/korcula/Korcula vinograd.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Weinberge
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Schauen Sie sich das Fechtspiel von Moreška an
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Wenn Sie in den Monaten Juli oder August auf der Insel sind, sollten Sie sich das traditionelle
                        maurische Fechtspiel nicht entgehen lassen. Es wird getanzt, gesungen und gefechtet – und das
                        Fechten ist echt! Früher wurde dieser Tanz im gesamten Mittelmeerraum aufgeführt, doch heute kann
                        man ihn nur noch auf der Insel Korčula sehen, wo diese Tradition seit mehr als 400 Jahren gepflegt
                        wird!
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Show findet zweimal pro Woche statt und ist größtenteils ausverkauft. Buchen Sie Ihre Tickets
                        also unbedingt im Voraus und kommen Sie mindestens eine Stunde früher an, um einen guten Platz zu
                        ergattern!
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/korcula/korcula ples.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Traditionelles tanzen</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Die besten Bars in Korčula:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Koktel bar "Massimo"
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Dos Locos
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Koktel bar Privi Zal Lumbarda
                    </p>
                    <!-- <ul class="section-content__blog__section__list" >
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Carpe Diem</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Nautica Bar</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Hula Hula Bar</p>
                        </li>
                    </ul> -->
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Wo man auf Korčula essen kann:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Dies sind nur einige der vielen Orte, an denen
                        Sie köstliches Essen genießen können.

                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Belin
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Vinski bar Bokar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Aterina
                    </p>
                    <!-- <ul class="section-content__blog__section__list" >
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Mizarola</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Apetti</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Divino</p>
                        </li>
                    </ul> -->
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Besuchen Sie die schönsten Strände auf Korčula:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Vela Pržina
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Bilin Žal
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Pupnatska luka
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/korcula/Pupnatska Luka.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Pupnatska luka</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Vaja-Strand
                    </p>
                    <!-- <ul class="section-content__blog__section__list" >
                    <li class="section-content__blog__section__item" >
                        <p class="section-content__blog__section__paragraph" >Pokonji dol</p>
                    </li>
                    <li class="section-content__blog__section__item" >
                        <p class="section-content__blog__section__paragraph" >Mekičevica plaža</p>
                    </li>
                    <li class="section-content__blog__section__item" >
                        <p class="section-content__blog__section__paragraph" >Dubovica</p>
                    </li>
                </ul> -->

                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/korcula/1.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/korcula/korcula ples.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image"
                                src="./assets/images/korcula/Korcula vinograd.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image"
                                src="./assets/images/korcula/old town korcula.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/korcula/Pupnatska Luka.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/korcula/vela spila.jpg" />
                        </div>
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