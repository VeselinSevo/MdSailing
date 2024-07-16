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
        <title>MD Sailing - Vis</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Ostrvo Vis nalazi se u sredini Jadranskog mora, gotovo na pola puta do Italije. Predstavlja najudaljenije i možda najmisterioznije od svih hrvatskih ostrva. Tokom decenija bio je zatvoren za ostatak sveta, čuvajući svoju jedinstvenu i bogatu istoriju." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje">

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="vis">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Vis </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Vis </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Ostrvo Vis nalazi se u sredini
                    Jadranskog mora, gotovo na pola puta do Italije.</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Ovo ostrvo je raj sa slikovitim gradovima koji
                        su se smestili u uvale, obiluje skrivenim pećinama i plažama, dok ga okružuje more koje varira u
                        svim nijansama plave boje.
                        Vis je idealna destinacija za istraživanje, uživanje u hrani i prihvatanje dalmatinskog ritma
                        života, polako i bez žurbe.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Ostrvo ima fascinantnu istoriju koja datira
                        unazad hiljadama godina.
                        Ostrvo je bilo naseljeno još u praistorijskim vremenima, a kroz istoriju je bilo pod vlašću
                        različitih civilizacija, uključujući Grke, Rimljane, Veneciju i Austro-Ugarsku.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Ova duga i raznolika istorija ostavila je
                        tragove širom ostrva, uključujući arheološka nalazišta, tvrđave, crkve i tradicionalne kamenite
                        kuće.
                        Ono što mnoge turiste privlači da posete ostrvo Vis jeste opuštena atmosfera i spokoj koji se oseća
                        na ostrvu.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Odsustvo masovnog turizma i očuvana priroda
                        čine ga idealnom destinacijom za odmor i beg od svakodnevnog stresa.</p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Sve što možete raditi na ostrvu Vis:</h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Istržite Titovu pećinu i bunker</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Titova pećina i bunker na ostrvu Vis predstavljaju značajne vojne objekte koji svedoče o
                        turbulentnoj prošlosti ostrva.
                        Pećina je bila sklonište i operativna baza za Josipa Broza Tita, vođu Jugoslavije, tokom Drugog
                        svetskog rata.
                        Ova pećina je isklesana u stenovitu stranu brda, skrivena od pogleda sa vazduha, što ju je činilo
                        idealnim mestom za vojne operacije i skrivanje od neprijateljskih snaga.
                        U njoj se nalazio Titoov bunker, koji je bio opremljen za potrebe vođenja ratnih operacija i zaštite
                        visokih zvaničnika.
                        Istražite ove fascinantne vojne objekte i saznajte više o ulozi koju su imali tokom ratnih godina.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/Titov bunker.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Titov bunker</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Pogledajte film u bioskopu na otvorenom</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Da li ste ikada bili u bioskopu na otvorenom tik uz obalu?
                        Ovaj jedinstveni bioskop na otvorenom nalazi se u malom selu Komiža i smešten je tik uz ivicu mora.
                        Bioskop radi još od 1964. godine i godinama prikazuje najnovije naslove na originalnom jeziku sa
                        hrvatskim titlovima.
                        Uzmite malo kokica iz mini bara i udobno se smestite dok zvuk vode udara o obalu.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/vis/Bioskop na otvorenom Vis.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Bioskop na otvorenom</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Popnite se na vrh Hum</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Kao jedno od najizolovanijih ostrva u srednjem delu Dalmacije, uspon na najviši vrh ostrva nagradiće
                        Vas zadivljujućim pogledom na otvoreno more!
                        Na zapadnoj strani ostrva nalazi se staza za planinarenje koja vodi do impozantnog vrha Hum, s
                        pogledom na grad Komižu.
                        Najviši vrh planine Hum dostiže visinu od 587 metara nadmorske visine i pruža spektakularne poglede
                        na grad ispod sebe i ostrvo Biševo, poznato po čuvenoj Plavoj pećini!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/Hum Vis.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Vrh Hum</p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Posetite Plavu pećinu</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Plava pećina je jedna od najupečatljivijih prirodnih lepota u Dalmaciji.
                        Poznata je po svojoj jedinstvenoj plavoj svetlosti koja se stvara kada sunčeva svetlost prolazi kroz
                        vodu i osvetljava unutrašnjost pećine.
                        Ranije su pećinu mogli posetiti samo ronioci, ali je sada dostupna turistima kratkom vožnjom brodom,
                        koji mora da se nagne kako bi uplovio unutar pećine.
                        Nakon što prođete kroz uski ulaz, pećina se otvara u očaravajući potok plavog svetla.
                        Iako nije dozvoljeno plivanje unutar pećine, impresivne boje i svetla su jedan od onih fenomena koje
                        jednostavno treba videti da bi se poverovalo!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/vis/Blue Cave Bisevo.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Plava Pećina</p>
                    <h3 class="section-content-ostrvo-1__content__heading">5. Zaplivajte u Zelenoj pećini</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Iako nije toliko poznata kao čuvena Plava pećina, Zelena pećina na ostrvu Vis svakako je destinacija
                        koju ne treba zanemariti!
                        Ova prelepa pećina nalazi se na ostrvu Ravnik, nedaleko od Visa, i može se pristupiti kroz dva
                        prirodna otvora.
                        Unutar Zelene pećine dozvoljeno je plivanje, ronjenje, pa čak i skakanje sa njenog krova pravo u
                        more!
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image"
                        src="./assets/images/vis/Zelena Pecina Ravnik.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Zelena Pećina</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Najbolji barovi na Visu:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Lambik
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Caffe bar Bejbi
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Caffe bar Biliba
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Corto Maltese Cocktail bar
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
                    <h3 class="section-content-ostrvo-1__content__heading">Gde jesti na ostrvu Vis:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Bako
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Kantun
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Rokis
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
                    <h3 class="section-content-ostrvo-1__content__heading">Posetite najlepše plaže na Visu:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Plaža Stiniva
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Plaža Stončica
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Srebrna plaža
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Smokova
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 5. Zaglav plaža
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

                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Komiža</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Grad Komiža, smešten na zapadnoj obali ostrva Visa, predstavlja jedno od najživopisnijih i
                        najzanimljivijih mesta na Jadranu.
                        Ovaj prelep grad ima bogatu istoriju i tradiciju ribarstva, koja seže unazad vekovima.
                        Ono što čini Komižu posebnom je njen šarmantni ambijent, tradicionalne drvene ribarske kuće, uske
                        kaldrmisane ulice i živopisna luka koja oživljava tokom celog dana.
                        Turisti koji posete Komižu imaju priliku da uživaju u predivnim prirodnim lepotama ovog grada.
                        Okolina Komiže obiluje spektakularnim plažama, tirkiznim vodama i skrivenim uvalama koje pružaju
                        savršeno mesto za opuštanje i uživanje u prirodi.
                        Pored toga, Komiža je poznata po svojim impresivnim planinama i pejzažima, koji nude brojne
                        mogućnosti za planinarenje, istraživanje i avanturu.
                        Uz to, Komiža je domaćin raznih kulturnih događaja, festivala i manifestacija tokom cele godine, što
                        doprinosi bogatom turističkom iskustvu posetilaca.
                        Bilo da uživate u lokalnoj kuhinji, istražujete istorijske spomenike ili jednostavno šetate obalom i
                        uživate u lepoti prirode, Komiža će Vas očarati svojom autentičnom atmosferom i neodoljivim šarmom.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/Komiza grad.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Komiža</p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/Komiza grad 2.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Komiža</p>
                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/vis/1.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/vis/2.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/vis/3.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/vis/4.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/vis/Hum Vis.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/vis/Komiza grad 2.jpg" />
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
        <title>MD Sailing - Vis</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Die Insel Vis liegt mitten in der Adria, fast auf halber Strecke nach Italien. Sie ist die abgelegenste und vielleicht geheimnisvollste aller kroatischen Inseln. Jahrzehntelang blieb es für den Rest der Welt verschlossen und bewahrte seine einzigartige und reiche Geschichte." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung">

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="vis">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Vis </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Vis </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Die Insel Vis liegt mitten in der
                    Adria, fast auf halber Strecke nach Italien.</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Diese Insel ist ein Paradies mit malerischen
                        Städten in Buchten, vielen versteckten Höhlen und Stränden und umgeben von einem Meer, das in allen
                        Blautönen variiert. Vis ist ein ideales Reiseziel zum Erkunden, Genießen des Essens und Genießen des
                        dalmatinischen Lebensrhythmus, langsam und ohne Eile. Die Insel hat eine faszinierende Geschichte,
                        die Jahrtausende zurückreicht. </p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Die Insel war seit prähistorischen Zeiten
                        bewohnt und stand im Laufe der Geschichte unter der Herrschaft verschiedener Zivilisationen,
                        darunter der Griechen, Römer, Venedigs und Österreich-Ungarns</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> . Diese lange und abwechslungsreiche Geschichte
                        hat überall auf der Insel Spuren hinterlassen, darunter archäologische Stätten, Festungen, Kirchen
                        und traditionelle Steinhäuser. Was viele Touristen auf die Insel Vis lockt, ist die entspannte
                        Atmosphäre und Ruhe, die man auf der Insel spüren kann. </p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Das Fehlen von Massentourismus und die
                        erhaltene Natur machen es zu einem idealen Urlaubsziel, um dem Alltagsstress zu entfliehen.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Alles, was Sie auf der Insel Vis tun können:</h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Erkunden Sie Titos Höhle und Bunker</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Titos Höhle und Bunker auf der Insel Vis sind wichtige militärische Einrichtungen, die von der
                        turbulenten Vergangenheit der Insel zeugen. Die Höhle diente Josip Broz Tito, dem Führer
                        Jugoslawiens, während des Zweiten Weltkriegs als Unterschlupf und Operationsbasis. Diese Höhle wurde
                        in die felsige Seite des Hügels gehauen und ist aus der Luft nicht sichtbar, was sie zu einem
                        idealen Ort für militärische Operationen und zum Verstecken vor feindlichen Streitkräften macht. Es
                        beherbergte Titos Bunker, der zur Durchführung von Kriegseinsätzen und zum Schutz hochrangiger
                        Beamter ausgestattet war. Erkunden Sie diese faszinierenden Militäranlagen und erfahren Sie mehr
                        über die Rolle, die sie während der Kriegsjahre spielten.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/Titov bunker.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Titos Bunker</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Sehen Sie sich einen Film im Freiluftkino an
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Waren Sie schon einmal in einem Freilichtkino direkt an der Küste? Dieses einzigartige Open-Air-Kino
                        befindet sich im kleinen Dorf Komiža und liegt direkt am Meer. Das Kino ist seit 1964 in Betrieb und
                        zeigt seit Jahren die neuesten Titel in der Originalsprache mit kroatischen Untertiteln. Schnappen
                        Sie sich etwas Popcorn aus der Minibar und machen Sie es sich gemütlich, während das Rauschen des
                        Wassers ans Ufer schlägt.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/vis/Bioskop na otvorenom Vis.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Open-Air-Kino</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Erklimmen Sie den Gipfel des Hum</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Da es sich um eine der abgelegensten Inseln im zentralen Teil Dalmatiens handelt, werden Sie beim
                        Aufstieg auf den höchsten Gipfel der Insel mit einem atemberaubenden Blick auf das offene Meer
                        belohnt! Auf der Westseite der Insel gibt es einen Wanderweg, der zum imposanten Gipfel Hum mit
                        Blick auf die Stadt Komiža führt. Der höchste Gipfel des Mount Hum erreicht eine Höhe von 587 Metern
                        über dem Meeresspiegel und bietet spektakuläre Ausblicke auf die Stadt darunter und die Insel
                        Biševo, die für ihre berühmte Blaue Höhle bekannt ist!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/Hum Vis.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Top Brummen</p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Besuchen Sie die Blaue Höhle</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Blaue Höhle (Grotte) ist eine der beeindruckendsten Naturschönheiten Dalmatiens. Sie ist bekannt
                        für ihr einzigartiges blaues Licht, das entsteht, wenn Sonnenlicht durch das Wasser dringt und das
                        Innere der Höhle beleuchtet. Früher konnte die Höhle nur von Tauchern besichtigt werden, heute ist
                        sie für Touristen über eine kurze Bootsfahrt erreichbar, die sich neigen muss, um in die Höhle zu
                        gelangen. Nachdem Sie den schmalen Eingang passiert haben, öffnet sich die Höhle in einem
                        bezaubernden Strom aus blauem Licht. Obwohl das Schwimmen in der Höhle nicht gestattet ist, gehören
                        die beeindruckenden Farben und Lichter zu den Phänomenen, die man einfach gesehen haben muss, um es
                        zu glauben!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/vis/Blue Cave Bisevo.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Blaue Höhle</p>
                    <h3 class="section-content-ostrvo-1__content__heading">5. Schwimmen Sie in der Grünen Höhle
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Obwohl sie nicht so berühmt ist wie die berühmte Blaue Höhle, ist die Grüne Höhle auf der Insel Vis
                        definitiv ein Reiseziel, das man nicht übersehen sollte! Diese wunderschöne Höhle befindet sich auf
                        der Insel Ravnik, nicht weit von Vis entfernt und ist durch zwei natürliche Öffnungen zugänglich. In
                        der Grünen Höhle ist Schwimmen, Tauchen und sogar der Sprung vom Dach direkt ins Meer erlaubt!
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image"
                        src="./assets/images/vis/Zelena Pecina Ravnik.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">Grüne Höhle</p>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Die besten Bars in Vis:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Lambik
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Caffe bar Bejbi
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Caffe bar Biliba
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Corto Maltese Cocktail bar
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
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Wo man auf der Insel Vis essen kann:
                        :</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Bako
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Kantun
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Rokis
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
                    <h3 class="section-content-ostrvo-1__content__heading">Besuchen Sie die schönsten Strände auf Vis:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Stiniva-Strand
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Stončica-Strand
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Srebrna-Strand
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Smokova
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 5. Zaglav-Strand

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

                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Komiža</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Stadt Komiža an der Westküste der Insel Vis ist einer der malerischsten und interessantesten
                        Orte an der Adria. Diese wunderschöne Stadt hat eine reiche Geschichte und Fischereitradition, die
                        Jahrhunderte zurückreicht. Das Besondere an Komiža ist das charmante Ambiente, die traditionellen
                        hölzernen Fischerhäuser, die engen Kopfsteinpflasterstraßen und der malerische Hafen, der den ganzen
                        Tag über belebt ist. Touristen, die Komiža besuchen, haben die Möglichkeit, die wunderbare
                        Naturschönheit dieser Stadt zu genießen. Die Umgebung von Komiža ist reich an spektakulären
                        Stränden, türkisfarbenem Wasser und versteckten Buchten, die den perfekten Ort zum Entspannen und
                        Genießen der Natur bieten. Darüber hinaus ist Komiža für seine beeindruckenden Berge und
                        Landschaften bekannt, die zahlreiche Möglichkeiten zum Wandern, Erkunden und Abenteuern bieten.
                        Darüber hinaus finden in Komiža das ganze Jahr über verschiedene kulturelle Veranstaltungen,
                        Festivals und Veranstaltungen statt, was zu einem reichhaltigen touristischen Erlebnis für die
                        Besucher beiträgt. Ob Sie die lokale Küche genießen, historische Denkmäler erkunden oder einfach nur
                        an der Küste entlang spazieren und die Schönheit der Natur genießen, Komiža wird Sie mit seiner
                        authentischen Atmosphäre und seinem unwiderstehlichen Charme verzaubern.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/Komiza grad.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Komiža</p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/vis/Komiza grad 2.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Komiža</p>
                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/vis/1.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/vis/2.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/vis/3.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/vis/4.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/vis/Hum Vis.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/vis/Komiza grad 2.jpg" />
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