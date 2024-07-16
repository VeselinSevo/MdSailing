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
        <title>MD Sailing - Pustolovine</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <meta name="description" content="Nezaboravno iskustvo istraživanja prelepog Jadranskog mora." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje, privatna tura, iznajmljivasnje kabine, flotila, prijatelji, posada, skiper">
        <link rel="manifest" href="/site.webmanifest">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-pustolovine">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"> Pustolovine </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Nezaboravno iskustvo istraživanja prelepog Jadranskog mora.</p>
            </div>
        </section>
        <section class="section-content">
            <ul class="section-content__navigation">
                <div class="section-content__group">
                    <li class="section-content__navigation__item section-content__navigation__item__selected"
                        id="navigation-link-1">
                        <button class="section-content__navigation__button" id="link-1">
                            <p class="section-content__navigation__text">Privatna tura</p>
                        </button>
                    </li>
                    <li class="section-content__navigation__item" id="navigation-link-2">
                        <button class="section-content__navigation__button" id="link-2">
                            <p class="section-content__navigation__text">Iznajmljivanje kabine</p>
                        </button>
                    </li>
                </div>
                <div class="section-content__group">
                    <li class="section-content__navigation__item" id="navigation-link-3">
                        <button class="section-content__navigation__button" id="link-3">
                            <p class="section-content__navigation__text">Flotila</p>
                        </button>
                    </li>
                </div>
            </ul>
            <hr class="section-content__seperator">
            <div class="section-content__blog section-content__blog__show" id="blog-1">
                <h2 class="section-content__blog__heading">Privatna tura na brodu</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Savršen paket za porodice, grupe prijatelja ili
                            poslovne događaje!</h3>
                        <p class="section-content__blog__section__paragraph">Privatna tura na katamaranu pruža nezaboravno
                            iskustvo istraživanja prelepog Jadranskog mora na jedinstven način.
                            Sa luksuznim katamaranom kao vašim privatnim brodom, doživećete nezaboravno putovanje kroz
                            tirkizne vode, slikovite uvale i skrivena ostrva Hrvatske.</p>
                    </div>
                    <a class="CTA CTA__secondary CTA__small" href="/#sailing-form">Rezerviši plovilo
                        <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg">
                    </a>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Katamarani su prostrani, imaju više kabina,
                            dnevni boravak, trpezariju i prostrane palube za sunčanje, pružajući <span
                                class="section-content__blog__section__span">savršen spoj udobnosti i avanture.</span>
                            Takođe, imaju stabilnost na vodi, što čini putovanje udobnijim i sigurnijim, posebno za one koji
                            imaju sklonost ka morskoj bolesti.</p>
                    </div>
                    <video id="pustolovineVideo" controls autoplay loop>
                        <source src="./assets/videos/Video za Private Tour.mp4" type="video/mp4">
                        Tvoj browser ne podrzava video tag.
                    </video>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Fleksibilnost je još jedan veliki benefit
                            privatnih tura, <span class="section-content__blog__section__span">možete kreirati svoj
                                sopstveni plan putovanja i istraživati različite destinacije i uvale u skladu sa vašim
                                željama i interesovanjima.</span></p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Takođe, možete <span
                                class="section-content__blog__section__span">birati koliko dugo želite da provedete na
                                određenim mestima, bez ograničenja standardnih tura.</span>
                            Privatne ture brodom dolaze sa mnoštvom uključenih usluga kako biste mogli samo da se opustite i
                            istražite prelepu obalu kada stignete u Hrvatsku.
                        </p>
                    </div>
                    <h3 class="section-content__blog__section__heading center-subheading">Šta je sve uključeno u cenu:</h3>
                    <div class="section-content__blog__images-includes">
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Aerodrom transfer.jpg" alt="Image 1">
                            <div class="image-overlay">Transfer sa aerodroma</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Fleksibilna ruta plovidbe.jpg" alt="Image 1">
                            <div class="image-overlay">Fleksibilna ruta plovidbe</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Gorivo.jpg" alt="Image 1">
                            <div class="image-overlay">Gorivo</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Lokalne takse.jpg" alt="Image 1">
                            <div class="image-overlay">Lokalne takse</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Skiper.jpg" alt="Image 1">
                            <div class="image-overlay">Skiper</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Wifi.jpg" alt="Image 1">
                            <div class="image-overlay">Besplatan Wifi</div>
                        </div>

                        <!-- Repeat for other images with different descriptions -->
                    </div>

                </article>
                <!-- <div class="section-content__blog__images">
                <img class="section-content__blog__image" src="./assets/images/vodic-image-5.jpg" />
            </div> -->
            </div>
            <div class="section-content__blog" id="blog-2">
                <h2 class="section-content__blog__heading">Iznajmljivanje kabine</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Jedrite na katamaranu u vašim kabinama!</h3>
                        <p class="section-content__blog__section__paragraph">
                            <span class="section-content__blog__section__span">
                                Avantura za parove i samostalne putnike kroz čarobni svet hrvatskih ostrva.
                            </span>
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Uživajte u nezaboravnom iskustvu plovidbe morem na katamaranu sa našim iskusnim skiperom, gde
                            svaka kabina nudi udobnost i privatnost dok istražujete prekrasne destinacije duž Jadrana.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Sa širokim palubama za sunčanje i prostranim unutrašnjim prostorima, naš brod pruža savršen spoj
                            udobnosti i avanture.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Bilo da želite istražiti skrivene uvale, uživati u ronjenju kristalno čistim morem ili
                            jednostavno opuštati se uz zalazak sunca, naša putovanja pružaju nezaboravne trenutke i
                            mogućnost za istinsko povezivanje sa morem i prirodom.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            <span class="section-content__blog__section__span">Prepustite se magiji plovidbe, stvorite nova
                                prijateljstva i uspomene koje ćete pamtiti čitav život!</span>
                        </p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Rezervišite svoju kabinu i zajedno zaplovite
                            daleko od svakodnevnice!</h3>
                        <p class="section-content__blog__section__paragraph">
                            Na katamaranu gosti su <span class="section-content__blog__section__span">deo tima</span>,
                            ukoliko žele aktivno mogu učestvovati u različitim zadacima na brodu u skladu sa svojim
                            sposobnostima.
                            Mogu doprineti navigaciji, pa čak i preuzeti kormilo uz nadzor skipera, bez obzira na to da li
                            imaju prethodnog iskustva u jedrenju ili ne.
                        </p>
                    </div>
                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image"
                            src="./assets/images/pustolovine/iznajmljivanjekabine/unutrasnjost kabine bali 4.6.jpg" />
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Život na brodu</h3>
                        <p class="section-content__blog__section__paragraph">
                            Na brodu sve je usmereno ka slavljenju života i zajedništvu, svaki dan donosi novo iskustvo i
                            novu avanturu.
                            Jutra počinju uz miris sveže kafe i pogled na beskrajno plavo more koji se pruža iz kabine.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            U svakoj kabini pronaći ćete dovoljno prostora da se povučete, osećate udobno i potpuno
                            opustite.
                            U salonu sa potpuno opremljenom kuhinjom se okupljamo radi zajedničkog druženja i pripreme
                            doručka, ručka, malih poslastica ili koktela.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Tokom dana, putnici mogu uživati u raznovrsnim aktivnostima.
                            Neki se opuštaju na sunčanim ležaljkama ili u hladovini, čitajući omiljene knjige ili uživajući
                            u razgovoru sa drugim putnicima.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Drugi se možda odluče za ronjenje u tirkiznim vodama ili istraživanje skrivenih uvala i plaža.
                            Večeri su rezervisane za romantične zalaske sunca i večere pod zvezdanim nebom.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Uz zvuke blagih talasa i šum vetra, svako veče postaje prilika za povezivanje sa prirodom i sa
                            sobom.
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Tipičan dnevni raspored na zajedničkom jedrenju
                        </h3>
                        <p class="section-content__blog__section__paragraph">
                            Jutro počinje skokom u kristalno čisto more u jednoj od brojnih uvala, nakon čega se doručak
                            poslužuje na palubi uz osvežavajući povetarac i zvuke morskih ptica.
                            Dan se obično planira tako da ostane dovoljno vremena za izlete na kopno, plivanje, ronjenje,
                            veslanje, sunčanje, opuštanje i naravno, jedrenje.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Ručak se služi na palubi ili na obali, gde se uz miris sveže pripremljenih lokalnih
                            specijaliteta i osvežavajućih napitaka, možete prepustiti čarima okoline. A nakon ručka pravo je
                            vreme za opuštanje i uživanje u laganoj vožnji katamaranom.
                            Nakon otprilike dva do tri sata vožnje, obično se stiže do sledeće destinacije na ostrvu ili
                            sledeće uvale gde ponovno ima puno toga za istraživanje.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Večera se obično jede van broda, u brojnim tradicionalnim malim restoranima i ribarskim mestima,
                            gde se poslužuju fini dalmatinski specijaliteti, a uživa se u mediteranskom šarmu šetajući se
                            uskim uličicama slikovitih antičkih ostrvskih mesta.
                        </p>
                    </div>

                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image" src="./assets/images/bali46/bali 4.6.jpeg" />
                    </div>

                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Dobrodošli na brod BALI 4.6</h3>
                        <p class="section-content__blog__section__paragraph">
                            Moderan katamaran Bali 4.6 opremljen je sa 4 dvokrevetne gostinjske sobe, svaka sa sopstvneim
                            kupatilom, za maksimalno 8 gostiju, kao i sa kabinom za vašeg skipera.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Ove kabine pružaju udoban smeštaj za putnike, sa dovoljno prostora za odmor i opuštanje.
                            Salon je prostran i svetao prostor, opremljen sofama i trpezarijskim stolom, idealan za
                            zajedničke obroke ili druženje tokom plovidbe.
                            Takođe, ovde se nalazi potpuno opremljena kuhinja.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Na palubi možete pronaći više prostora za sunčanje i opuštanje.
                            Postoji veći otvoreni prostor sa sunčanim jastucima gde se možete opustiti i uživati u predivnom
                            pogledu dok plovite.
                            Takođe, možete pronaći i prostor za obedovanje na otvorenom, savršen za obroke pod vedrim nebom.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Bali 4.6 je opremljen najsavremenijom opremom za navigaciju i sigurnost, uključujući GPS
                            uređaje, sonare, VHF radio stanice, kao i klima uređajem, wifi i generatorom.
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Plan broda i izbor kabine</h3>


                        <div class="section-content__blog__images">
                            <img class="section-content__blog__image" src="./assets/images/bali46/bali 4.6 bridge.jpg" />
                        </div>
                        <div class="section-content__blog__images">
                            <img class="section-content__blog__image"
                                src="./assets/images/bali46/BALI-4.6-Nacelle-scaled.jpg" />
                        </div>
                        <div class="section-content__blog__images">
                            <img class="section-content__blog__image"
                                src="./assets/images/pustolovine/iznajmljivanjekabine/Raspored kabina NOVA SLIKA.jpg" />
                        </div>



                        <br>
                        <h3 class="section-content__blog__section__heading">Termini putovanja i cene</h3>
                        <hr class="section-content__seperator">
                        <p class="section-content__blog__section__paragraph">
                            Od subote 01.06. do subote 08.06.
                            <br>
                            <br>
                            Dvokrevetna kabina (1, 2) za 2 osobe
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            EUR 2.490,00
                        </p>
                        <br>
                        <p class="section-content__blog__section__paragraph">
                            Dvokrevetna kabina (3, 4) za 2 osobe
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            EUR 2.290,00
                        </p>
                        <hr class="section-content__seperator">
                        <p class="section-content__blog__section__paragraph">
                            Od subote 21.09. do subote 28.09.
                            <br>
                            <br>
                            Dvokrevetna kabina (1, 2) za 2 osobe
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            EUR 2.490,00
                        </p>
                        <br>
                        <p class="section-content__blog__section__paragraph">
                            Dvokrevetna kabina (3, 4) za 2 osobe
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            EUR 2.290,00
                        </p>
                        <hr class="section-content__seperator">
                        <h4 class="section-content__blog__section__paragraph">
                            U cenu je uključeno:
                        </h4>
                        <p class="section-content__blog__section__paragraph">
                            1. &nbsp&nbsp Brod
                            <br>
                            2. &nbsp Završno čišćenje(posteljina, peškiri, kuhinjsko posuđe, motor za pomoćni čamac i drugo)
                            <br>
                            3. &nbsp Skiper
                            <br>
                            4. &nbsp Gorivo
                            <br>
                            5. &nbsp Boravišna taksa
                            <br>
                            6. &nbsp 3 noći veza u Marini
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Brodska kasa je fond koji se formira za sve dodatne tekuće troškove.
                            <br>
                            Svaki gost doprinosi jednakim delom. Po tradicionalnom morskom običaju skipper se hrani iz
                            brodske kase.
                            <br>
                            Savetujemo Vam da napravite brodsku kasu sa početnim depozitom od 100,00 EUR po osobi za hranu,
                            piće, vezove u marinama ili neke druge troškove!
                        </p>
                    </div>
                </article>
                <div class="section-content__blog__section">
                    <p class="section-content__blog__section__paragraph">
                        <span class="section-content__blog__section__span">Napomena:</span> pitajte nas za dodatne termine
                    </p>
                </div>
                <div class="route-container">
                    <div class="text-content">
                        <h2 class="itinerary-title">Plan plovidbe</h2>
                        <ul class="itinerary-list">
                            <li class="itinerary-item">
                                Check-in - Split
                            </li>
                            <li class="itinerary-item">
                                Dan 1 - <a href="./solta">Šolta</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 2 - <a href="./vis">Vis</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 3 - <a href="./vis">Vis (Komiža)</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 4 - <a href="./korcula">Korčula</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 5 - <a href="./hvar">Hvar (Stari Grad)</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 6 - <a href="./milna">Milna (Brač)</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 7 - Split
                            </li>
                            <li class="itinerary-item">
                                Check-out - Split
                            </li>
                        </ul>
                    </div>
                    <div class="image-content">
                        <img src="./assets/images/pustolovine/iznajmljivanjekabine/Ruta Mapa za Kabine.jpg"
                            alt="Croatia Luxury Cruise">
                    </div>
                </div>
            </div>
            <!-- <div class="section-content__blog__images">
                <img class="section-content__blog__image" src="./assets/images//pustolovine/iznajmljivanjekabine/Ruta Mapa za Kabine.jpg" />
            </div> -->
            </div>
            <div class="section-content__blog" id="blog-3">
                <h2 class="section-content__blog__heading">Flotila</h2>
                <article class="section-content__blog__article">
                    <h3 class="section-content__blog__section__heading">Pripremite se za nezaboravnu nedelju na našoj
                        7-dnevnoj jedriličarskoj flotili!</h3>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Ako volite istraživati skrivene uvale, kristalno čisto more i popularne destinacije Hrvatske,
                            ovo je idealna avantura za vas!
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Pridružite se kao <span class="section-content__blog__section__span">pojedinac ili grupa</span>
                            na našoj flotili jedrilica i doživite čari samostalnog upravljanja brodom, podizanja jedara i
                            osvežavajućih skokova u plavetnilo skrivenih uvala!
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Ponesite sa sobom hranu i piće i kuvajte u kuhinji na brodu ili istražite raznoliku ponudu
                            restorana u novom gradu svake večeri - sve je na vama!
                            Izaberite jedrilicu koja odgovara vašim željama i budžetu i zaplovite u nezaboravnu avanturu
                            jedrenja duž obala Hrvatske!
                        </p>
                    </div>
                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image" src="./assets/images/flotilla/flotila-slika1.jpg" />
                    </div>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Poseta flotili je sjajan izbor za mlade i studente iz više razloga.
                            Prvo, omogućava Vam da se udaljite od uobičajenih turističkih destinacija i istražite manje
                            poznate, ali jednako spektakularne lokacije.
                            Takođe, pruža priliku za povezivanje sa drugim istomišljenicima iz celog sveta, stvarajući nove
                            prijateljske veze i razmenu iskustava.
                        </p>
                    </div>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Flotila takođe nudi izuzetnu priliku za učenje i razvijanje veština povezanih s jedrenjem,
                            navigacijom i timskim radom.
                            Za studente koji žele da se opuste i odmore od užurbanog studentskog života, flotila nudi
                            jedinstvenu kombinaciju avanture, opuštanja i nezaboravnih iskustava na moru.
                        </p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/flotilla/flotila-slika2.jpg" />
                </div>
            </div>
        </section>
        <?php require './footer.php' ?>
    </body>

    </html>

<?php else: ?>
    <html lang="de">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MD Sailing – Abenteuer</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <meta name="description" content="Ein unvergessliches Erlebnis beim Erkunden der wunderschönen Adria." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung, private Tour, Kabinenvermietung, Flottille, Freunde, Crew, Kapitän">
        <link rel="manifest" href="/site.webmanifest">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-pustolovine">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"> ABENTEUER </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Ein unvergessliches Erlebnis der Erkundung der wunderschönen Adria.</p>
            </div>
        </section>
        <section class="section-content">
            <ul class="section-content__navigation">
                <div class="section-content__group">
                    <li class="section-content__navigation__item section-content__navigation__item__selected"
                        id="navigation-link-1">
                        <button class="section-content__navigation__button" id="link-1">
                            <p class="section-content__navigation__text">Privattour</p>
                        </button>
                    </li>
                    <li class="section-content__navigation__item" id="navigation-link-2">
                        <button class="section-content__navigation__button" id="link-2">
                            <p class="section-content__navigation__text">Kabinenvermietung</p>
                        </button>
                    </li>
                </div>
                <div class="section-content__group">
                    <li class="section-content__navigation__item" id="navigation-link-3">
                        <button class="section-content__navigation__button" id="link-3">
                            <p class="section-content__navigation__text">Flotille</p>
                        </button>
                    </li>
                </div>
            </ul>
            <hr class="section-content__seperator">
            <div class="section-content__blog section-content__blog__show" id="blog-1">
                <h2 class="section-content__blog__heading">Private Bootstour
                </h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Das perfekte Paket für Familien, Freundesgruppen
                            oder geschäftliche Veranstaltungen!</h3>
                        <p class="section-content__blog__section__paragraph">Eine private Katamaran-Tour bietet ein
                            unvergessliches Erlebnis, die wunderschöne Adria auf einzigartige Weise zu erkunden. Mit einem
                            Luxuskatamaran als privatem Schiff erleben Sie eine unvergessliche Reise durch das türkisfarbene
                            Wasser, malerische Buchten und versteckte Inseln Kroatiens.</p>
                    </div>
                    <a class="CTA CTA__secondary CTA__small" href="/#sailing-form">Buchen Sie ein Schiff
                        <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg">
                    </a>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Katamarane sind geräumig, mit mehreren Kabinen,
                            einem Lounge, einem Essbereich und geräumigen Sonnendecks und bieten die perfekte Mischung <span
                                class="section-content__blog__section__span">aus Komfort und Abenteuer.</span>
                            Außerdem verfügen sie über eine Stabilität auf dem Wasser, was das Reisen komfortabler und
                            sicherer macht, insbesondere für diejenigen, die anfällig für Seekrankheit sind.</p>
                    </div>
                    <video id="pustolovineVideo" controls autoplay loop>
                        <source src="./assets/videos/Video za Private Tour.mp4" type="video/mp4">
                        Tvoj browser ne podrzava video tag.
                    </video>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Flexibilität ist ein weiterer großer Vorteil
                            privater Touren; <span class="section-content__blog__section__span">možete kreirati svoj
                                Sie können Ihren eigenen Reiseplan erstellen und verschiedene Ziele und Buchten ganz nach
                                Ihren Wünschen und Interessen erkunden.
                            </span></p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Zusätzlich können <span
                                class="section-content__blog__section__span">Sie wählen, wie lange Sie an bestimmten Orten
                                verbringen möchten, ohne die Einschränkungen von Standardtouren. </span>
                            Bei privaten Bootstouren sind zahlreiche Serviceleistungen inbegriffen, sodass Sie nach Ihrer
                            Ankunft in Kroatien einfach entspannen und die wunderschöne Küste erkunden können.

                        </p>
                    </div>
                    <h3 class="section-content__blog__section__heading center-subheading">Was im Preis inbegriffen ist:</h3>
                    <div class="section-content__blog__images-includes">
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Aerodrom transfer.jpg" alt="Image 1">
                            <div class="image-overlay">Flughafentransfer</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Fleksibilna ruta plovidbe.jpg" alt="Image 1">
                            <div class="image-overlay">flexible Segelroute</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Gorivo.jpg" alt="Image 1">
                            <div class="image-overlay">Treibstoff</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Lokalne takse.jpg" alt="Image 1">
                            <div class="image-overlay">lokale Steuern</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Skiper.jpg" alt="Image 1">
                            <div class="image-overlay">Skipper</div>
                        </div>
                        <div class="section-content__blog__image-includes">
                            <img src="./assets/images/included/Wifi.jpg" alt="Image 1">
                            <div class="image-overlay">kostenloses Wi-Fi</div>
                        </div>

                        <!-- Repeat for other images with different descriptions -->
                    </div>

                </article>
                <!-- <div class="section-content__blog__images">
            <img class="section-content__blog__image" src="./assets/images/vodic-image-5.jpg" />
        </div> -->
            </div>
            <div class="section-content__blog" id="blog-2">
                <h2 class="section-content__blog__heading">Vermietung einer Kabine</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Segeln Sie auf einem Katamaran in Ihren Kabinen!
                        </h3>
                        <p class="section-content__blog__section__paragraph">
                            <span class="section-content__blog__section__span">
                                Ein Abenteuer für Paare und Einzelreisende durch die magische Welt der kroatischen Inseln.

                            </span>
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Genießen Sie ein unvergessliches Erlebnis beim Segeln auf einem Katamaran mit unserem erfahrenen
                            Skipper, wobei jede Kabine Komfort und Privatsphäre bietet, während Sie die wunderschönen
                            Reiseziele entlang der Adria erkunden.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Mit breiten Sonnendecks und geräumigen Innenräumen bietet unser Schiff die perfekte Mischung aus
                            Komfort und Abenteuer.
                        </p>
                        <p class="section-content__blog__section__paragraph">

                            Egal, ob Sie versteckte Buchten erkunden, im kristallklaren Wasser schnorcheln oder einfach nur
                            den Sonnenuntergang genießen möchten – unsere Reisen bieten unvergessliche Momente und die
                            Möglichkeit, sich wirklich mit dem Meer und der Natur zu verbinden.

                        </p>
                        <p class="section-content__blog__section__paragraph">
                            <span class="section-content__blog__section__span">Geben Sie sich der Magie des Segelns hin,
                                schließen Sie neue Freundschaften und Erinnerungen, an die Sie sich ein Leben lang erinnern
                                werden!</span>
                        </p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Reservieren Sie Ihre Kabine und entfliehen Sie
                            gemeinsam dem Alltag!
                        </h3>
                        <p class="section-content__blog__section__paragraph">
                            Auf einem Katamaran sind Gäste Teil eines Teams und können auf Wunsch je nach ihren Fähigkeiten
                            aktiv an verschiedenen Aufgaben an Bord teilnehmen. Sie können bei der Navigation mithelfen und
                            unter der Aufsicht des Skippers sogar das Ruder übernehmen, unabhängig davon, ob sie bereits
                            über Segelerfahrung verfügen oder nicht.
                        </p>
                    </div>
                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image"
                            src="./assets/images/pustolovine/iznajmljivanjekabine/unutrasnjost kabine bali 4.6.jpg" />
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Leben an Bord</h3>
                        <p class="section-content__blog__section__paragraph">
                            Auf dem Schiff ist alles darauf ausgerichtet, das Leben und das Miteinander zu feiern; jeder Tag
                            bringt ein neues Erlebnis und ein neues Abenteuer. Der Morgen beginnt mit dem Duft von frischem
                            Kaffee und dem Blick auf das endlose blaue Meer, das sich von der Hütte aus erstreckt.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            In jeder Kabine finden Sie ausreichend Platz zum Rückzug, zum Wohlfühlen und zum vollkommenen
                            Entspannen. Wir treffen uns im Wohnzimmer mit voll ausgestatteter Küche, um Kontakte zu knüpfen
                            und Frühstück, Mittagessen, kleine Leckereien oder Cocktails zuzubereiten.

                        </p>
                        <p class="section-content__blog__section__paragraph">

                            Tagsüber können Reisende eine Vielzahl von Aktivitäten genießen. Manche entspannen auf
                            Sonnenliegen oder im Schatten, lesen ihre Lieblingsbücher oder unterhalten sich mit anderen
                            Reisenden.

                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Andere entscheiden sich vielleicht dafür, im türkisfarbenen Wasser zu schnorcheln oder
                            versteckte Buchten und Strände zu erkunden. Die Abende sind romantischen Sonnenuntergängen und
                            Abendessen unter dem Sternenhimmel vorbehalten.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Mit dem Rauschen sanfter Wellen und dem Rauschen des Windes wird jeder Abend zu einer
                            Gelegenheit, sich mit der Natur und sich selbst zu verbinden.
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Typischer Tagesplan für gemeinsames Segeln

                        </h3>
                        <p class="section-content__blog__section__paragraph">
                            Der Morgen beginnt mit einem Sprung ins kristallklare Meer in einer der vielen Buchten.
                            Anschließend wird das Frühstück auf dem Deck bei einer erfrischenden Brise und den Geräuschen
                            der Seevögel serviert. Der Tag ist normalerweise so geplant, dass genügend Zeit für
                            Landausflüge, Schwimmen, Tauchen, Paddeln, Sonnenbaden, Entspannen und natürlich Segeln bleibt.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Das Mittagessen wird auf dem Deck oder am Ufer serviert, wo Sie bei dem Duft frisch zubereiteter
                            lokaler Spezialitäten und erfrischender Getränke den Charme der Umgebung genießen können. Und
                            nach dem Mittagessen ist die richtige Zeit, um sich zu entspannen und eine gemütliche
                            Katamaranfahrt zu genießen. Nach etwa zwei bis drei Stunden Fahrt erreicht man meist das nächste
                            Ziel auf der Insel oder die nächste Bucht, wo es wieder viel zu entdecken gibt.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Das Abendessen wird überwiegend außerhalb des Schiffes in zahlreichen traditionellen kleinen
                            Restaurants und Fischerdörfern eingenommen, wo feine dalmatinische Spezialitäten serviert
                            werden, und man kann den mediterranen Charme bei einem Spaziergang durch die engen Gassen der
                            malerischen alten Inselstädte genießen.
                        </p>
                    </div>

                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image" src="./assets/images/bali46/bali 4.6.jpeg" />
                    </div>

                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Willkommen an Bord BALI 4.6</h3>
                        <p class="section-content__blog__section__paragraph">
                            Der moderne Katamaran Bali 4.6 ist mit 4 Doppelzimmern mit jeweils eigenem Bad für maximal 8
                            Gäste sowie einer Kabine für Ihren Skipper ausgestattet.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Diese Kabinen bieten den Passagieren eine komfortable Unterbringung und viel Platz zum Ausruhen
                            und Entspannen. Der Salon ist ein geräumiger und heller Raum, ausgestattet mit Sofas und einem
                            Esstisch, ideal für gemeinsame Mahlzeiten oder geselliges Beisammensein während des Segelns.
                            Hier gibt es auch eine voll ausgestattete Küche.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Auf dem Deck finden Sie mehr Platz zum Sonnenbaden und Entspannen. Es gibt einen größeren
                            Außenbereich mit Sonnenliegen, wo Sie sich entspannen und beim Segeln die schöne Aussicht
                            genießen können. Außerdem gibt es einen Essbereich im Freien, der sich perfekt zum Essen im
                            Freien eignet.
                        </p>
                        <p class="section-content__blog__section__paragraph">

                            Der Bali 4.6 ist mit modernster Navigations- und Sicherheitsausrüstung ausgestattet, darunter
                            GPS, Sonar, UKW-Funk sowie Klimaanlage, WI-FI und einem Generator.

                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Schiffsplan und Kabinenauswahl</h3>


                        <div class="section-content__blog__images">
                            <img class="section-content__blog__image" src="./assets/images/bali46/bali 4.6 bridge.jpg" />
                        </div>
                        <div class="section-content__blog__images">
                            <img class="section-content__blog__image"
                                src="./assets/images/bali46/BALI-4.6-Nacelle-scaled.jpg" />
                        </div>
                        <div class="section-content__blog__images">
                            <img class="section-content__blog__image"
                                src="./assets/images/pustolovine/iznajmljivanjekabine/Raspored kabina NOVA SLIKA.jpg" />
                        </div>



                        <br>
                        <h3 class="section-content__blog__section__heading">Reisedaten und Preise
                        </h3>
                        <hr class="section-content__seperator">
                        <p class="section-content__blog__section__paragraph">
                            Ab Samstag 01.06. bis Samstag 08.06.
                            <br>
                            <br>
                            Doppelkabine (1, 2) für 2 Personen
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            EUR 2.490,00
                        </p>
                        <br>
                        <p class="section-content__blog__section__paragraph">
                            Doppelkabine (3, 4) für 2 Personen

                        </p>
                        <p class="section-content__blog__section__paragraph">
                            EUR 2.290,00
                        </p>
                        <hr class="section-content__seperator">
                        <p class="section-content__blog__section__paragraph">
                            Ab Samstag 21.09. bis Samstag 28.09.
                            <br>
                            <br>
                            Doppelkabine (1, 2) für 2 Personen
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            EUR 2.490,00
                        </p>
                        <br>
                        <p class="section-content__blog__section__paragraph">
                            Doppelkabine (3, 4) für 2 Personen
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            EUR 2.290,00
                        </p>
                        <hr class="section-content__seperator">
                        <h4 class="section-content__blog__section__paragraph">
                            Der Preis beinhaltet:
                        </h4>
                        <p class="section-content__blog__section__paragraph">
                            1. &nbsp&nbsp Schiff
                            <br>
                            2. &nbsp Endreinigung (Bettwäsche, Handtücher, Küchenutensilien, Außenbordmotor und mehr)
                            <br>
                            3. &nbsp Skipper
                            <br>
                            4. &nbsp Kraftstoff
                            <br>
                            5. &nbsp Aufenthaltssteuer
                            <br>
                            6. &nbsp 3 Übernachtungen in der Marina
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Der Schifffahrtsfonds ist ein Fonds, der für alle zusätzlichen laufenden Ausgaben gebildet wird.

                            <br>
                            Jeder Gast trägt einen gleichen Teil bei. Nach traditionellem maritimen Brauch wird der Skipper
                            aus der Schiffskasse verpflegt.

                            <br>
                            Wir empfehlen Ihnen, an der Bootskasse eine Anzahlung von 100,00 EUR pro Person für Speisen,
                            Getränke, Liegeplätze in Yachthäfen oder andere Ausgaben zu leisten!
                        </p>
                    </div>
                </article>
                <div class="section-content__blog__section">
                    <p class="section-content__blog__section__paragraph">
                        <span class="section-content__blog__section__span">Hinweis:</span> Fragen Sie uns nach weiteren
                        Terminen

                    </p>
                </div>
                <div class="route-container">
                    <div class="text-content">
                        <h2 class="itinerary-title">Navigationsplan</h2>
                        <ul class="itinerary-list">
                            <li class="itinerary-item">
                                Check-in - Split
                            </li>
                            <li class="itinerary-item">
                                Dan 1 - <a href="./solta">Šolta</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 2 - <a href="./vis">Vis</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 3 - <a href="./vis">Vis (Komiža)</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 4 - <a href="./korcula">Korčula</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 5 - <a href="./hvar">Hvar (Stari Grad)</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 6 - <a href="./milna">Milna (Brač)</a>
                            </li>
                            <li class="itinerary-item">
                                Dan 7 - Split
                            </li>
                            <li class="itinerary-item">
                                Check-out - Split
                            </li>
                        </ul>
                    </div>
                    <div class="image-content">
                        <img src="./assets/images/pustolovine/iznajmljivanjekabine/Ruta Mapa za Kabine.jpg"
                            alt="Croatia Luxury Cruise">
                    </div>
                </div>
            </div>
            <!-- <div class="section-content__blog__images">
            <img class="section-content__blog__image" src="./assets/images//pustolovine/iznajmljivanjekabine/Ruta Mapa za Kabine.jpg" />
        </div> -->
            </div>
            <div class="section-content__blog" id="blog-3">
                <h2 class="section-content__blog__heading">Flottille</h2>
                <article class="section-content__blog__article">
                    <h3 class="section-content__blog__section__heading">Machen Sie sich bereit für eine unvergessliche Woche
                        auf unserer 7-tägigen Segelflottille!
                    </h3>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Wenn Sie gerne versteckte Buchten, kristallklares Meer und beliebte Reiseziele Kroatiens
                            erkunden, ist dies das ideale Abenteuer für Sie!
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Nehmen Sie als <span class="section-content__blog__section__span">Einzelperson oder Gruppe
                            </span>
                            an unserer Segelbootflotte teil und erleben Sie die Magie des selbständigen Fahrens eines
                            Bootes, des Hissens der Segel und erfrischender Sprünge ins Blau versteckter Buchten!
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Nehmen Sie Essen und Getränke mit und kochen Sie in der Bordküche oder erkunden Sie jeden Abend
                            das vielfältige Restaurantangebot einer neuen Stadt – es liegt ganz bei Ihnen! Wählen Sie ein
                            Segelboot, das Ihren Wünschen und Ihrem Budget entspricht, und segeln Sie zu einem
                            unvergesslichen Segelabenteuer entlang der Küste Kroatiens!
                        </p>
                    </div>
                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image" src="./assets/images/flotilla/flotila-slika1.jpg" />
                    </div>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Der Besuch der Flottille ist aus mehreren Gründen eine gute Wahl für junge Leute und Studenten.
                            Erstens ermöglicht es Ihnen, den üblichen Touristenzielen zu entfliehen und weniger bekannte,
                            aber ebenso spektakuläre Orte zu erkunden. Es bietet auch die Möglichkeit, mit anderen
                            Gleichgesinnten aus der ganzen Welt in Kontakt zu treten, neue Freundschaften zu schließen und
                            Erfahrungen auszutauschen.
                        </p>
                    </div>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Die Flottille bietet auch eine außergewöhnliche Gelegenheit, Fähigkeiten im Zusammenhang mit
                            Segeln, Navigation und Teamarbeit zu erlernen und zu entwickeln. Für Studierende, die sich
                            entspannen und eine Auszeit vom hektischen Studentenleben nehmen möchten, bietet die Flottille
                            eine einzigartige Kombination aus Abenteuer, Entspannung und unvergesslichen Erlebnissen auf dem
                            Meer.
                        </p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/flotilla/flotila-slika2.jpg" />
                </div>
            </div>
        </section>
        <?php require './footer-german.php' ?>
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
<script src="./navigation-pustolovine.js">
</script>