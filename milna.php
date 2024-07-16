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
        <title>MD Sailing - Milna</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Živopisno dalmatinsko selo Milna na ostrvu Braču u Hrvatskoj prava je oaza mira i ljepote koja privlači turiste iz cijelog svijeta. Ovo malo ribarsko mjesto na sjevernoj obali Brača oduševljava posjetitelje svojim šarmom." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="milna">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading" > Milna </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Milna </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Slikovito dalmatinsko selo Milna, smešteno na ostrvu Brač u Hrvatskoj, predstavlja pravu oazu mira i
                    lepote koja privlači turiste iz celog sveta.</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Ovo malo ribarsko selo na severnoj obali Brača
                        oduševljava posetioce svojim šarmom, autentičnošću i bogatom kulturnom baštinom.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Jedan od razloga zbog kojeg treba posetiti Milnu
                        je njena izvanredna prirodna lepota.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Okružena kristalno čistim morem i bujnim
                        mediteranskim zelenilom, Milna nudi prekrasne plaže, uvalice i uvale koje su raj za ljubitelje sunca
                        i mora.
                        Provesti noć na brodu u uvalama sela Milna je prava avantura koja će Vas ostaviti bez daha. </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Ovde možete uživati u opuštajućim šetnjama uz
                        obalu, ronjenju u bogatom podvodnom svetu ili jednostavno uživati u predivnim zalascima sunca.
                        Osim prirodnih lepota, Milna obiluje i kulturnim znamenitostima i tradicijom.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Posetioci mogu istražiti stare kamenite ulice,
                        tradicionalne ribarske kuće i prekrasnu crkvu sv. Ivana Krstitelja.
                        Takođe, Milna je poznata po svojoj bogatoj pomorskoj istoriji, koju možete istražiti posetom Muzeju
                        ribarstva.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Ostrvo Brač, na kojem se nalazi Milna, takođe je
                        poznat po svojoj bogatoj gastronomiji. Posetioci mogu uživati u autentičnim dalmatinskim jelima
                        poput sveže ribe, domaćeg maslinovog ulja i vrhunskih vina.
                        Ne propustite priliku da posetite lokalne restorane i konobe i uživate u istinskim ukusima
                        Mediterana.
                        Ono po čemu će posetioci pamtiti Milnu i ostrvo Brač je gostoljubivost njenih stanovnika. </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Lokalci su poznati po svojoj ljubaznosti i
                        otvorenosti prema posetiocima, uvek spremni da podele svoju kulturu, tradiciju i priče.
                        Osećaj topline i dobrodošlice koji doživite u Milni ostaće vam u trajnom sećanju kao nezaboravno
                        iskustvo.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Šarmantna marina i opuštena atmosfera Milne čine
                        je savršenim mestom za opuštanje i uranjanje u lokalnu seljačku atmosferu.
                        Najbolja stvar kod Milne je što je samo korak-dva udaljena od mirnog gradskog pristaništa prepunog
                        stvari za raditi i videti.</p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/milna/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Evo naših omiljenih aktivnosti na otoku Braču:
                    </h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Posetite Zlatni Rat</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Zlatni Rat, proglašen za treću najbolju plažnu destinaciju u Evropi, jedno je od najimpresivnijih
                        prirodnih čuda Jadranskog mora.
                        Ovo prirodno čudo sa svojim peščanim obalama koje se prostiru 500 metara u Jadransko more, stvara
                        plažu u obliku slova 'V'.
                        Ova plaža je toliko neobična zbog menjanja svog položaja i oblika u skladu sa smerom vetra i morskih
                        struja.
                        Ovakva dinamičnost plaže čini je fascinantnom i jedinstvenom destinacijom za istraživanje.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/milna/Zlatni rat plaza.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Zlatni rat</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Posetite skrivene uvale</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        U blizini sela Milna nalaze se četiri glavne plaže do kojih se može doći peške: Osibova, Maslinova,
                        Pasikova i Lučice plaža.
                        Svaka od ovih plaža ima velike šljunkovite obale, tirkizno plavo more i okružene su mirisnim
                        borovima koji pružaju utočište od letnjeg sunca.
                        Budući da su okrenute prema jugu, plaže oko Milne su zaštićene od severnih vetrova, što ih čini
                        savršenim mestom za opuštanje na suncu tokom dana ili brz osvežavajući skok u more.
                        Pored ovih poznatih plaža, na ostrvu Brač ima mnogo mesta gde možete pronaći svoj skriveni raj!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/milna/Brac uvala.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Brač uvala</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Posetite manastir Blaca</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Ovaj manastir iz 16. veka impresivno je uklesan u liticu od krečnjaka, stvarajući zadivljujući
                        prizor vredan truda potrebnog da se do njega stigne!
                        U ranim danima, monasi su pronašli mir i tišinu među liticama stene, gde su kasnije izgradili
                        impresivan manastir u i oko pećine.
                        Monasi su naseljavali manastir vekovima, sve do pre 50 godina.
                        Danas možete posetiti muzej manastira koji čuva raznovrsne zanimljive artefakte, knjige i
                        astronomski pribor.
                        Manastir Blaca je dostupan samo peške.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/milna/Blaca manastir.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Manastir Blaca</p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Uživajte u pogledu sa Vidove gore</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Vidova Gora nije samo najviša tačka na Braču, već i najviša tačka svih Dalmatinskih ostrva!
                        Ako imate dovoljno energije, možete pešačiti usponom od grada Bola do vrha planine, koji se uzdiže
                        na visinu od 778 metara iznad nivoa mora.
                        Tokom tročasovne avanture, prizori se menjaju i postaju sve impresivniji kako se penjete, a sa vrha
                        se lako vide ostrvo Hvar, hrvatsko kopno pa čak i Italija u vedrom danu!
                        Ako niste spremni za pešačenje, Vidova Gora je takođe dostupna automobilom.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/milna/Vidova gora.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Vidova gora</p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Istražite obližnja mesta</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Bol
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Supetar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Pučišća
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Bobovišća
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
                    <h3 class="section-content-ostrvo-1__content__heading">Gde jesti u Milni:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Ovo su samo neka od mnogobrojnih lokacija gde
                        možete jesti ukusnu hranu.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Gajeta konoba
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Restoran Bago
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Picerija Slika
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
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/milna/2.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/milna/Blaca manastir.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/milna/Brac uvala.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/milna/Milna.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/milna/Vidova gora.jpg" />
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/milna/Zlatni rat plaza.jpg" />
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
        <title>MD Sailing - Milna</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Das malerische dalmatinische Dorf Milna auf der Insel Brač in Kroatien ist eine wahre Oase der Ruhe und Schönheit, die Touristen aus aller Welt anzieht. Dieses kleine Fischerdorf an der Nordküste von Brač begeistert Besucher mit seinem Charme." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="milna">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading" > Milna </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Milna </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode">
                    Das malerische dalmatinische Dorf Milna auf der Insel Brač in Kroatien ist eine wahre Oase der Ruhe und
                    Schönheit, die Touristen aus aller Welt anzieht.</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Dieses kleine Fischerdorf an der Nordküste von
                        Brac begeistert Besucher mit seinem Charme, seiner Authentizität und seinem reichen kulturellen
                        Erbe.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Einer der Gründe, Milna zu besuchen, ist seine
                        außergewöhnliche Naturschönheit.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Umgeben von kristallklarem Meer und üppiger
                        mediterraner Vegetation bietet Milna wunderschöne Strände und Buchten, die ein Paradies für Sonnen-
                        und Meeresliebhaber sind. Eine Übernachtung auf einem Boot in den Buchten des Dorfes Milna ist ein
                        echtes Abenteuer, das Ihnen den Atem rauben wird.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Hier können Sie entspannte Spaziergänge entlang
                        der Küste unternehmen, in der reichen Unterwasserwelt tauchen oder einfach die wunderschönen
                        Sonnenuntergänge genießen. Neben natürlicher Schönheit ist Milna auch reich an kulturellen
                        Sehenswürdigkeiten und Traditionen.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Besucher können alte Steinstraßen, traditionelle
                        Fischerhäuser und die wunderschöne Kirche St. Johannes der Täufer. Außerdem ist Milna für seine
                        reiche Seefahrtsgeschichte bekannt, die Sie bei einem Besuch des Fischereimuseums erkunden können.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Die Insel Brac, auf der Milna liegt, ist auch
                        für ihre reichhaltige Gastronomie bekannt. Besucher können authentische dalmatinische Gerichte wie
                        frischen Fisch, hausgemachtes Olivenöl und Spitzenweine genießen. Verpassen Sie nicht die
                        Gelegenheit, lokale Restaurants und Tavernen zu besuchen und die wahren Aromen des Mittelmeers zu
                        genießen. Was den Besuchern Milna und die Insel Brač in Erinnerung bleiben wird, ist die
                        Gastfreundschaft ihrer Bewohner.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Die Einheimischen sind für ihre Freundlichkeit
                        und Offenheit gegenüber Besuchern bekannt und immer bereit, ihre Kultur, Traditionen und Geschichten
                        zu teilen. Das Gefühl der Herzlichkeit und Gastfreundschaft, das Sie in Milna erleben, wird Ihnen
                        für immer als unvergessliches Erlebnis in Erinnerung bleiben.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Der charmante Yachthafen und die entspannte
                        Atmosphäre von Milne machen es zum perfekten Ort zum Entspannen und Eintauchen in die ländliche
                        Atmosphäre vor Ort. Das Beste an Milna ist, dass es nur einen Steinwurf vom ruhigen Pier der Stadt
                        entfernt ist, an dem es jede Menge zu unternehmen und zu sehen gibt.</p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/milna/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Hier sind unsere Lieblingsaktivitäten auf der
                        Insel Brač
                    </h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Besuchen Sie Zlatni Rat </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Zlatni Rat, das zum drittbesten Strandziel Europas gewählt wurde, ist eines der beeindruckendsten
                        Naturwunder der Adria. Dieses Naturwunder mit seinen Sandstränden, die sich 500 Meter in die Adria
                        hinein erstrecken, bildet einen V-förmigen Strand. Dieser Strand ist so ungewöhnlich, weil er seine
                        Position und Form je nach Windrichtung und Meeresströmungen ändert. Diese Dynamik des Strandes macht
                        ihn zu einem faszinierenden und einzigartigen Ziel zum Erkunden.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/milna/Zlatni rat plaza.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Zlatni rat</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Besuchen Sie versteckte Buchten</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        In der Nähe des Dorfes Milna gibt es vier Hauptstrände, die zu Fuß erreichbar sind: die Strände
                        Osibova, Maslinova, Pasikova und Lucice. Jeder dieser Strände hat große Kiesstrände, türkisblaues
                        Meer und ist von duftenden Pinien umgeben, die Schutz vor der Sommersonne bieten. Durch die
                        Südausrichtung sind die Strände rund um Milna vor den Nordwinden geschützt und somit der perfekte
                        Ort, um tagsüber in der Sonne zu entspannen oder ein kurzes erfrischendes Bad im Meer zu nehmen.
                        Zusätzlich zu diesen berühmten Stränden gibt es auf der Insel Brac viele Orte, an denen Sie Ihr
                        verborgenes Paradies finden können

                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/milna/Brac uvala.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Bucht von Brac</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Besuchen Sie das Blaca-Kloster </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dieses Kloster aus dem 16. Jahrhundert ist eindrucksvoll in einen Kalksteinfelsen gehauen und bietet
                        einen atemberaubenden Anblick, der die Mühe wert ist, dorthin zu gelangen! In den frühen Tagen
                        fanden die Mönche Ruhe und Frieden zwischen den Felsklippen, wo sie später in und um die Höhle ein
                        beeindruckendes Kloster errichteten. Mönche bewohnten das Kloster jahrhundertelang, bis vor 50
                        Jahren. Heute können Sie das Museum des Klosters besuchen, das eine Vielzahl interessanter
                        Artefakte, Bücher und astronomischer Geräte aufbewahrt. Das Kloster Blaca ist nur zu Fuß erreichbar.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/milna/Blaca manastir.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Blaca-Kloster</p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Genießen Sie die Aussicht von Vidova gora
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Vidova gora ist nicht nur der höchste Punkt auf Brač, sondern auch der höchste Punkt aller
                        dalmatinischen Inseln! Wenn Sie genug Energie haben, können Sie von der Stadt Bol aus auf den Gipfel
                        des Berges wandern, der eine Höhe von 778 Metern über dem Meeresspiegel erreicht. Während des
                        dreistündigen Abenteuers verändert sich die Landschaft und wird mit zunehmendem Aufstieg immer
                        beeindruckender. Von oben können Sie problemlos die Insel Hvar, das kroatische Festland und an
                        klaren Tagen sogar Italien sehen! Wenn Sie nicht zum Wandern bereit sind, ist Vidova Gora auch mit
                        dem Auto erreichbar.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/milna/Vidova gora.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Vidova gora</p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Erkunden Sie Orte in der Nähe</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Bol
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Supetar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Pučišća
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Bobovišća
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
                    <h3 class="section-content-ostrvo-1__content__heading">Wo man in Milna essen kann:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Dies sind nur einige der vielen Orte, an denen
                        Sie köstliches Essen genießen können

                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Gajeta konoba
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Restaurant Bago
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Pizzeria Slika
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
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/milna/2.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/milna/Blaca manastir.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/milna/Brac uvala.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/milna/Milna.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/milna/Vidova gora.jpg" />
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/milna/Zlatni rat plaza.jpg" />
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