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
        <title>MD Sailing - Šolta</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <link rel="manifest" href="/site.webmanifest" />
        <meta name="description"
            content="Ostrvo Šolta, smešteno u Jadranskom moru nedaleko od Splita, predstavlja pravu oazu mira i lepote. Ovo idilično ostrvo karakteriše netaknuta priroda, kristalno čisto more, pitomi pejzaži i tradicionalna mediteranska atmosfera koja oduzima dah." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje" />

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="solta">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Šolta </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">Šolta</h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Ostrvo Šolta, smešteno u Jadranskom moru nedaleko od Splita,
                    predstavlja pravu oazu mira i lepote koja privlači pažnju
                    turista iz celog sveta.
                </p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ovo idilično ostrvo karakteriše netaknuta priroda,
                        kristalno čisto more, pitomi pejzaži i tradicionalna
                        mediteranska atmosfera koja oduzima dah. Šolta nudi
                        raznolike atrakcije i znamenitosti koje će zadovoljiti
                        ukuse svih posetilaca.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Za ljubitelje prirode, ostrvo nudi obilje staza za
                        šetnje i planinarenje koje vode kroz bujne šume,
                        maslinjake i vinograde. Posetioci takođe mogu istražiti
                        slikovita sela i obalu ostrva, upoznati se sa bogatom
                        istorijom i tradicijom ovog kraja, kao i uživati u
                        autentičnoj gastronomiji.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Možete posetiti brojne manje uvale i plaže koje pružaju
                        mir i tišinu, idealne za opuštanje i uživanje u sunčanju
                        i kupanju. Za one koji vole aktivni odmor, Šolta nudi
                        različite mogućnosti za sportske aktivnosti poput
                        ronjenja, jedrenja, vožnje biciklom i ribolova.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Takođe, posetioci mogu istražiti brojne arheološke
                        lokalitete, crkve, palate i muzeje koji svedoče o
                        bogatoj istoriji ostrva. Uz to, Šolta je poznata po
                        svojoj tradicionalnoj proizvodnji maslinovog ulja i
                        vina, pa se posetiocima pruža prilika da degustiraju
                        lokalne specijalitete i upoznaju se sa lokalnom kulturom
                        i načinom života.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/solta/1.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Posetite najlepše plaže ostrva:
                    </h3>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        1. Plaža Šešula
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ova divlja plaža nalazi se na jugoistočnoj obali ostrva
                        i karakteriše je kristalno čisto more i okolne stene
                        obrasle borovima. Pristup plaži je moguć samo peške ili
                        brodom, što je čini mirnom i netaknutom.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        2. Plaža Maslinica
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Smeštena u istoimenom mestu na zapadnoj obali, plaža
                        Maslinica je popularna zbog svoje šljunkovite obale i
                        plitkog, tirkiznog mora. Uz predivan pogled na marinu,
                        ova plaža je idealna za porodične izlete i opuštanje.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        3. Plaža Livka
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ova skrivena uvala nalazi se na južnoj obali ostrva i
                        pruža intimnu atmosferu sa svojom šljunkovitim obalom i
                        tirkiznim morem. Plaža Livka je idealna za one koji
                        traže mir i tišinu daleko od gužve.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        4. Plaža Nečujam
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Najveća plaža na ostrvu, Nečujam, nalazi se na istočnoj
                        obali i karakteriše je široka peščana obala i plitko
                        more, čineći je savršenom destinacijom za porodice sa
                        decom. Ova plaža takođe nudi razne vodene aktivnosti
                        poput ronjenja i vožnje čamcem.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        5. Plaža Zaglav
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Smeštena na jugoistočnoj obali, plaža Zaglav je poznata
                        po svojoj kristalno čistoj vodi i prirodnoj lepoti.
                        Okružena borovima i stenama, ova plaža je idealna za one
                        koji traže mir i netaknutu prirodu.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/solta/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Gde jesti na Šolti:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Kopačina
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ovaj restoran nudi autentičnu dalmatinsku kuhinju, sa
                        jelima pripremljenim od lokalnih sastojaka, kao što su
                        sveže ribe, morski plodovi, jagnjetina i maslinovo ulje.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Pasarela
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Smeštena u slikovitom mestu Maslinica, ova konoba nudi
                        prelepe poglede na more i marinu, uz ukusna jela od
                        sveže ulovljene ribe i morskih plodova.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Restoran Škoj
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ovaj restoran se nalazi u starom delu grada Stomorska i
                        specijalizovan je za tradicionalna dalmatinska jela, kao
                        i specijalitete od mesa i domaće testenine.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Restoran Maslin
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Smješten pored mora u mestu Rogač, ovaj restoran nudi
                        predivnu atmosferu i jelovnik inspirisan lokalnom
                        kuhinjom, sa naglaskom na sveže pripremljene riblje
                        specijalitete i plodove mora.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 5. Konoba Špica
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ova konoba se nalazi u malom ribarskom mestu Nečujam i
                        poznata je po svojim tradicionalnim dalmatinskim jelima,
                        kao što su riblje čorbe, pečena riba i domaći prilozi.
                    </p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Najbolji barovi na Šolti:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Caffe Bar Grmas
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Smešten uz obalu u mestu Maslinica, ovaj kafić nudi
                        prelepe poglede na more i marinu, uz širok izbor pića i
                        opuštenu atmosferu.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Caffe Bar Porat
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Smešten uz obalu u mestu Maslinica, ovaj kafić nudi
                        prelepe poglede na more i marinu, uz širok izbor pića i
                        opuštenu atmosferu.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Beach Bar Mul
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Smešten na plaži u mestu Nečujam, ovaj bar je savršeno
                        mesto za opuštanje tokom dana i uživanje u osvežavajućim
                        pićima dok gledate zalazak sunca.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Bar Plaža Livka
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ovaj bar se nalazi na istoimenoj plaži Livka i nudi
                        opuštenu atmosferu uz muziku i koktele, savršeno za
                        večernje druženje sa prijateljima.
                    </p>
                </article>

                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Maslinica
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Grad Maslinica, smešten na zapadnoj obali ostrva Šolta,
                        poznat je po svojoj autentičnoj mediteranskoj atmosferi,
                        prelepim pejzažima i luksuznim marinama. Ovo slikovito
                        ribarsko mesto privlači turiste svojim šarmom,
                        tradicionalnom arhitekturom i bogatom istorijom. Jedna
                        od glavnih atrakcija u Maslinici je njegova prelepa
                        luka, koja je okružena tradicionalnim kamenim kućama i
                        borovom šumom. Ova luka je omiljena među nautičarima
                        zbog svoje zaštićene pozicije i kristalno čistog mora.
                        Turisti mogu istražiti brojne marine, gde se mogu diviti
                        luksuznim jahtama ili uživati u lokalnoj ribarskoj
                        kuhinji u obližnjim restoranima. Pored marine, Maslinica
                        nudi i brojne druge atrakcije, uključujući prelepe
                        plaže, pešačke staze kroz netaknutu prirodu, kao i
                        fascinantne istorijske znamenitosti. Posetioci mogu
                        istražiti dvorac Martinis-Marchi, koji datira iz 18.
                        veka i pruža fantastičan pogled na okolna ostrva i more.
                        Način života u Maslinici je spor i opušten, sa naglaskom
                        na tradicionalnim vrednostima i gostoprimstvu. Posetioci
                        mogu uživati u šetnjama duž obale, istraživati ​​uske
                        ulice i trgove, ili jednostavno sedeti u lokalnim
                        kafićima i uživati ​​u jedinstvenoj atmosferi mesta.
                    </p>
                </article>

                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/solta/Maslinica.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">
                    Maslinica
                </p>

                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/solta/1.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/solta/2.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/solta/5.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/solta/4.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/solta/3.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/solta/Maslinica.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require 'footer-german.php' ?>
    </body>

    </html>
<?php else: ?>
    <html lang="de">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MD Sailing - Šolta</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
        <link rel="manifest" href="/site.webmanifest" />
        <meta name="description"
            content="Die Insel Šolta, in der Adria unweit von Split gelegen, ist eine wahre Oase der Ruhe und Schönheit. Diese idyllische Insel zeichnet sich durch unberührte Natur, kristallklares Meer, sanfte Landschaften und eine traditionelle mediterrane Atmosphäre aus, die Ihnen den Atem raubt." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung" />

        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="solta">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Šolta </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode">Šolta</h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Die Insel Šolta, in der Adria unweit von Split gelegen, ist eine wahre Oase der Ruhe und Schönheit, die
                    die Aufmerksamkeit von Touristen aus aller Welt auf sich zieht.
                </p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Diese idyllische Insel zeichnet sich durch unberührte Natur, kristallklares Meer, sanfte
                        Landschaften und eine traditionelle mediterrane Atmosphäre aus, die Ihnen den Atem raubt. Solta
                        bietet eine Vielzahl an Attraktionen und Sehenswürdigkeiten, die den Geschmack aller Besucher
                        befriedigen.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Für Naturliebhaber bietet die Insel zahlreiche Spazier- und Wanderwege, die durch üppige Wälder,
                        Olivenhaine und Weinberge führen. Besucher können auch die malerischen Dörfer und die Küste der
                        Insel erkunden, etwas über die reiche Geschichte und Traditionen dieser Region erfahren und
                        authentische Gastronomie genießen.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Sie können zahlreiche kleinere Buchten und Strände besuchen, die Ruhe und Frieden bieten und sich
                        ideal zum Entspannen, Sonnenbaden und Schwimmen eignen. Für diejenigen, die einen aktiven Urlaub
                        mögen, bietet Šolta verschiedene Möglichkeiten für sportliche Aktivitäten wie Tauchen, Segeln,
                        Radfahren und Angeln.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Außerdem können Besucher zahlreiche archäologische Stätten, Kirchen, Paläste und Museen erkunden,
                        die von der reichen Geschichte der Insel zeugen. Darüber hinaus ist Solta für seine traditionelle
                        Herstellung von Olivenöl und Wein bekannt, sodass Besucher die Möglichkeit haben, lokale
                        Spezialitäten zu probieren und die lokale Kultur und Lebensweise kennenzulernen.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/solta/1.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Besuchen Sie die schönsten Strände der Insel:
                    </h3>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        1. Šešula-Strand
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dieser wilde Strand liegt an der Südostküste der Insel und zeichnet sich durch kristallklares Meer
                        und umliegende, mit Pinien bewachsene Felsen aus. Der Zugang zum Strand ist nur zu Fuß oder mit dem
                        Boot möglich, was ihn ruhig und unberührt macht.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        2. Maslinica-Strand
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Der Strand von Maslinica liegt am gleichnamigen Ort an der Westküste und ist bekannt für seine
                        Kiesküste und das flache, türkisfarbene Meer. Mit einem herrlichen Blick auf den Yachthafen ist
                        dieser Strand ideal für Familienausflüge und Entspannung.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        3. Livka-Strand
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Diese versteckte Bucht liegt an der Südküste der Insel und bietet mit ihrem Kieselstrand und dem
                        türkisfarbenen Meer eine intime Atmosphäre. Der Strand Livka ist ideal für diejenigen, die Ruhe
                        abseits der Menschenmassen suchen.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        4. Nečujam-Strand
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Der größte Strand der Insel, Necujam, liegt an der Ostküste und zeichnet sich durch ein breites
                        Sandufer und flaches Meer aus, was ihn zu einem perfekten Reiseziel für Familien mit Kindern macht.
                        Dieser Strand bietet auch verschiedene Wasseraktivitäten wie Tauchen und Bootfahren.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        5. Zaglav-Strand
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Der an der Südostküste gelegene Strand von Zaglav ist für sein kristallklares Wasser und seine
                        natürliche Schönheit bekannt. Umgeben von Pinien und Felsen ist dieser Strand ideal für alle, die
                        Ruhe und unberührte Natur suchen.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/solta/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Wo man auf Solta essen kann:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Kopačina
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dieses Restaurant bietet authentische dalmatinische Küche mit Gerichten, die aus lokalen Zutaten wie
                        frischem Fisch, Meeresfrüchten, Lamm und Olivenöl zubereitet werden.

                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Pasarela
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Diese Taverne liegt in der malerischen Stadt Maslinica und bietet einen wunderschönen Blick auf das
                        Meer und den Yachthafen sowie köstliche Gerichte aus fangfrischem Fisch und Meeresfrüchten.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Restaurant Škoj
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dieses Restaurant befindet sich in der Altstadt von Stomorska und ist auf traditionelle
                        dalmatinische Gerichte sowie Fleischspezialitäten und hausgemachte Pasta spezialisiert.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Restaurant Maslin
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Direkt am Meer in Rogač gelegen, bietet dieses Restaurant eine wunderbare Atmosphäre und eine von
                        der lokalen Küche inspirierte Speisekarte mit Schwerpunkt auf frisch zubereiteten Fischspezialitäten
                        und Meeresfrüchten.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 5. Konoba Špica
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Diese Taverne befindet sich im kleinen Fischerdorf Nečujam und ist berühmt für ihre traditionellen
                        dalmatinischen Gerichte wie Fischeintopf, gebackenen Fisch und hausgemachte Beilagen.
                    </p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Die besten Bars auf Solta:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Caffe Bar Grmas
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dieses an der Küste in Maslinica gelegene Café bietet einen wunderschönen Blick auf das Meer und
                        d en Yachthafen sowie eine große Auswahl an Getränken und eine entspannte Atmosphäre.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Caffe Bar Porat
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dieses an der Küste in Maslinica gelegene Café bietet einen wunderschönen Blick auf das Meer und den
                        Yachthafen sowie eine große Auswahl an Getränken und eine entspannte Atmosphäre.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Beach Bar Mul
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Diese Bar am Strand von Nechujam ist der perfekte Ort, um tagsüber zu entspannen und erfrischende
                        Getränke zu genießen, während man den Sonnenuntergang beobachtet.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Strandbar Livka
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Diese Bar liegt am gleichnamigen Livka-Strand und bietet eine entspannte Atmosphäre mit Musik und
                        Cocktails, perfekt für ein abendliches Treffen mit Freunden.
                    </p>
                </article>

                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Maslinica
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Stadt Maslinica an der Westküste der Insel Solta ist für ihre authentische mediterrane
                        Atmosphäre, wunderschöne Landschaften und luxuriösen Yachthäfen bekannt. Dieses malerische
                        Fischerdorf lockt Touristen mit seinem Charme, seiner traditionellen Architektur und seiner reichen
                        Geschichte an. Eine der Hauptattraktionen von Maslinica ist der wunderschöne Hafen, der von
                        traditionellen Steinhäusern und Pinienwäldern umgeben ist. Dieser Hafen ist wegen seiner geschützten
                        Lage und dem kristallklaren Meer bei Bootsfahrern beliebt. Touristen können die zahlreichen
                        Yachthäfen erkunden, wo sie Luxusyachten bewundern oder in nahegelegenen Restaurants lokale
                        Fischküche genießen können. Neben dem Yachthafen bietet Maslinica zahlreiche weitere Attraktionen,
                        darunter wunderschöne Strände, Wanderwege durch unberührte Natur sowie faszinierende historische
                        Sehenswürdigkeiten. Besucher können das Schloss Martinis-Marchi erkunden, das aus dem 18.
                        Jahrhundert stammt und fantastische Ausblicke auf die umliegenden Inseln und das Meer bietet. Der
                        Lebensstil in Maslinica ist langsam und entspannt, wobei der Schwerpunkt auf traditionellen Werten
                        und Gastfreundschaft liegt. Besucher können Spaziergänge entlang der Küste unternehmen, die engen
                        Gassen und Plätze erkunden oder einfach in den örtlichen Cafés sitzen und die einzigartige
                        Atmosphäre des Ortes genießen.
                    </p>
                </article>

                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/solta/Maslinica.jpg" />
                </div>
                <p class="section-content-ostrvo-1__desc desc-more">
                    Maslinica
                </p>

                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/solta/1.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/solta/2.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/solta/5.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/solta/4.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/solta/3.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/solta/Maslinica.jpg" />
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
<script src="./header.js"></script>