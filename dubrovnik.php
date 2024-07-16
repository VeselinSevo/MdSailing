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
        <title>MD Sailing - Dubrovnik</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Dubrovnik, poznat kao 'biser Jadrana', očarava svojom bogatom istorijom, bajkovitom arhitekturom i kristalno čistim morem. Svaki kutak ovog grada nosi dah prošlosti i neponovljivog šarma, pružajući nezaboravan doživljaj." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="dubrovnik">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Dubrovnik </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Dubrovnik </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Dubrovnik, biser Jadrana i jedan od
                    najčarobnijih gradova na svetu! </p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Sa svojim impresivnim zidinama Starog grada,
                        crvenim krovovima koji blistaju pod suncem i kristalno čistim plavim morem, Dubrovnik je prava
                        poslastica za sve avanturiste i ljubitelje kulture.
                        Ovaj grad, često nazvan "biserom Jadrana", svojom istorijom koja seže duboko u prošlost, osvaja srca
                        posetilaca iz celog sveta.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Šetajući kamenim ulicama Starog grada, osećaćete
                        se kao da ste zakoračili u bajku iz prošlosti.
                        Posetite zidine koje su vekovima čuvale grad od napada, istražite uske prolaze prepune istorijskih
                        znamenitosti i uživajte u fantastičnim pogledima sa starih tvrđava.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Ali Dubrovnik nije samo grad sa bogatom
                        istorijom - to je i grad koji obiluje životom i energijom.
                        Uživajte u ukusnoj hrani i lokalnim specijalitetima u brojnim restoranima i konobama, istražite
                        živopisne pijace i tržnice, ili jednostavno sedite u nekom od brojnih kafića uz obalu i posmatrajte
                        živopisni svet koji prolazi.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Ne zaboravite da se osvežite u kristalno čistom
                        moru, istražite obližnje plaže i uživajte u suncu i pesku.
                        Dubrovnik ima sve što vam je potrebno za savršen odmor - od fascinantne istorije do predivnih plaža,
                        od ukusne hrane do uzbudljive atmosfere.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Istorija Dubrovnika</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Dubrovnik ima bogatu i fascinantnu istoriju koja
                        se proteže kroz vekove.
                        Ovaj grad, osnovan u drevnim vremenima, postao je značajna trgovačka luka u srednjem veku.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Tokom 15. veka Dubrovnik je razvio Republiku
                        koja je bila rival Mlečanima i koja je cvetala kao centar trgovine i kulture.
                        Grad je bio poznat po svojoj naprednoj kulturi i demokratskim vrednostima, uključujući i rano
                        ukidanje ropstva. </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Tokom vekova, Dubrovnik je bio poprište brojnih
                        istorijskih događaja, a danas je jedan od najposećenijih turističkih destinacija na Jadranskoj obali
                        zbog svoje bogate istorije, impresivne arhitekture i spektakularne prirodne lepote.</p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/1.jpg" />
                </div>

                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Aktivnosti u Dubrovniku:</h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Posetite tvrđavu Minčeta</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Jedan od najimpresivnijih bedema, odmah iza onog u Kini, okružuje Stari Grad Dubrovnika.
                        Izgrađen isključivo u svrhu odbrane grada od Mletačke Republike, danas je zid glavna atrakcija zbog
                        koje desetine hiljada turista posećuje grad svakog meseca.
                        Na zidu se nalazi nekoliko tvrđava, a najveća među njima je tvrđava Minčeta, koja pruža zadivljujući
                        pogled na unutrašnjost grada.
                        Iako zidovi mogu biti poprilično zauzeti, poseta tvrđavi Minčeta svakako vredi truda i plaćanja
                        ulaznice.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/minceta.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Minčeta</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Prošetajte gradskim bedemima</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Upustite se u avanturu hodanja duž bedema Dubrovnika i otkrijte čaroliju prošlosti koja živi u
                        svakom kamenu.
                        Ovi impozantni zidovi, podignuti još u 15. veku, svedoci su bogate istorije grada, odbranjenog od
                        brojnih izazova kroz vekove.
                        Prošetajte iznad terakotnih krovova Starog grada i uživajte u spektakularnim pogledima na kristalno
                        čisto Jadransko more.
                        Svaki korak na ovim bedemima nosi sa sobom osećaj pustolovine i otkrivanja skrivenih dragulja
                        Dubrovnika.
                        Ne propustite priliku da doživite jedinstvenu atmosferu ovih istorijskih zidina i stvorite
                        nezaboravne uspomene koje će Vas pratiti zauvek.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/gradski bedemi.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Gradski bedemi</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Vožnja dubrovačkom gondolom</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Za potpun doživljaj Dubrovnika, ne propustite priliku da posetite planinu Srđ, najvišu tačku grada.
                        Put do vrha možete započeti vožnjom kabinskom žičarom koja polazi sa spoljne strane gradskih bedema
                        i vodi do starog utvrđenja na planini Srđ.
                        Na vrhu ćete biti nagrađeni prelepim pogledom na grad i njegove karakteristične terakotne krovove.
                        U blizini se nalazi i restoran gde možete uživati u hrani i piću dok posmatrate pejzaž, bilo da je
                        to uz šoljicu kafe ili opušteni ručak.
                        U daljini možete primetiti ostrva Lokrum i Elafit, dva bisera Jadranskog mora koje vredi posetiti
                        tokom boravka u Dubrovniku.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/gondola.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Dubrovačka Gondola</p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Prošetajte Stradunom</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Stradun je nezaobilazna destinacija u Dubrovniku, budući da je glavna ulica grada.
                        Popločana drevnim mermernim pločama, Stradun je dom nekih od najimpresivnijih građevina Dubrovnika.
                        Srednjovekovna crkva Svetog Vlaha i Dubrovačka katedrala su arhitektonski dragulji Straduna, dok se
                        ispod ulice nalazi neverovatan vodovodni sistem star čak 600 godina.
                        Ne zaboravite posetiti Franjevački manastir i istražiti najstariju apoteku u Evropi!
                        Nakon što ste upoznali znamenitosti, opustite se u jednoj od brojnih bočnih ulica koje se seku sa
                        Dubrovačkim Stradunom.
                        Te uličice su ispunjene autentičnim restoranima, barovima i kafićima, savršenim za odmor uz kafu
                        između istraživanja!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/stradun.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Stradun</p>
                    <h3 class="section-content-ostrvo-1__content__heading">5. Posetite Buža Bar</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dok šetate kroz uske uličice Starog grada, uživajući u njegovoj lepoti i atmosferi srednjovekovnog
                        doba, možda ćete slučajno naići na Buža Bar.
                        Nazvan po svom neobičnom ulazu - maloj rupi u gradskim zidinama (Buža), ovaj bar smešten je na
                        litici s pogledom na more.
                        Buža Bar je savršeno mesto za opuštanje i uživanje u mirnoj atmosferi koja karakteriše život u
                        Dubrovniku.
                        Ako ga ne pronađete slučajno, možete ga potražiti gledajući prema strani gradskih zidina koja gleda
                        na ostrvo Lokrum.
                        Tražite znak s natpisom "Hladna pića" i nećete pogrešiti!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Buza bar.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Buža Bar</p>
                    <h3 class="section-content-ostrvo-1__content__heading">6. Istražite lokacije snimanja Igre prestola</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Snimanje serije "Igra prestola" u Dubrovniku bilo je izuzetno značajno za ovaj grad na jadranskoj
                        obali.
                        Dubrovnik je poslužio kao spektakularna kulisa za Kraljevu Luku, glavni grad Sedam kraljevstava.
                        Ova drevna mediteranska luka, sa svojim impozantnim zidinama i istorijskim građevinama, savršeno je
                        odgovarala viziji autora Džordža R. R. Martina.
                        Lokacije kao što su "sramne" stepenice, Crkva Svetog Spasa i Lovrijenac tvrđava postale su ikonične
                        destinacije za fanove širom sveta.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Game of thrones stepenice.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Lokacija Igre Prestola</p>
                    <h3 class="section-content-ostrvo-1__content__heading">7. Posetite najstariju apoteku u Evropi</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Datira iz 1317. godine i smatra se trećom najstarijom apotekom na svetu.
                        Nalazi se unutar dominikanskog manastira iz 14. veka.
                        Ova apoteka, koja je bila u upotrebi tokom doba Raguse, pružala je medicinske usluge lokalnom
                        stanovništvu i stranim posetiocima.
                        Danas, posetioci mogu da posete ovu istorijsku znamenitost i da vide staru farmaceutsku opremu,
                        medicinske knjige i druge artefakte iz perioda.
                        Takođe, unutar manastira nalazi se i Muzej apoteke koji čuva značajne artefakte iz 15. veka i pruža
                        uvid u bogatu istoriju ovog mesta.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Stara apoteka.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Najstarija Apoteka</p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Najbolja mesta za zabavu u Dubrovniku:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Copacabana Beach Club</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Nema luksuznije opcije od Copacabane! Ova
                        ekskluzivna plaža nalazi se duž obale u obliku polumeseca, pružajući posetiocima spektakularne
                        poglede na Jadransko more.
                        Klub je osmišljen tako da gostima pruži vrhunsko iskustvo, uključujući luksuzne kabine, šampanjac i
                        trendi muziku.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Sky Bar</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Sky Bar je popularno noćno mesto smešteno blizu
                        Pile kapije, jednog od glavnih ulaza u Stari grad.
                        Ovaj bar privlači posetioce svojim trendi dizajnom, modernim ambijentom i uzbudljivom atmosferom.
                        Vrata bara otvaraju se tek u ponoć, a zabava traje do ranih jutarnjih sati, što ga čini savršenim
                        mestom za one koji traže zabavu do kasno u noć.
                        Sky Bar poznat je po svojim spektakularnim žurkama i elektronskoj muzici koja će Vas držati na
                        plesnom podijumu celu noć.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Revelin Culture Club</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Revelin Culture Club je jedan od najpoznatijih i
                        najekskluzivnijih klubova u Dubrovniku, smešten unutar zidina stare gradske tvrđave, koja datira iz
                        15. veka.
                        Ovaj klub je postao simbol noćnog života grada te privlači posetioce iz celog sveta.
                        Svojim jedinstvenim ambijentom i energičnom atmosferom, Revelin je nezaobilazna destinacija za sve
                        ljubitelje zabave i elektronske muzike.</p>
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
                    <h3 class="section-content-ostrvo-1__content__heading">Gde jesti u Dubrovniku?</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Dubrovnik je raj za ljubitelje hrane, sa
                        mnoštvom renomiranih restorana koji nude bogat izbor jela.
                        Bez obzira da li se nalazite unutar zidina Starog grada ili duž Straduna, očekuje Vas izvanredno
                        gastronomsko iskustvo.
                        Evo nekoliko naših preporuka koje biste mogli posetiti tokom boravka u ovom prelepom gradu.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Restoran 360</p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Restoran 360.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Restoran 360</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Nalazi se na spektakularnoj lokaciji na zidinama
                        UNESCO-ve tvrđave, pružajući predivan pogled na luku i more.
                        Ovaj restoran ističe se svojim vrhunskim jelima inspirisanim mediteranskom kuhinjom, kao i modernim
                        interpretacijama tradicionalnih hrvatskih recepata.
                        Dobitnik je Michelinove zvezde, što dodatno potvrđuje kvalitet njegove kuhinje.
                        Poseta restoranu 360 pruža priliku da uživate u vrhunskoj usluzi, prefinjenom ambijentu i
                        gastronomskom iskustvu koje će ostati urezano u pamćenju.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Nautika</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Nautika je luksuzni restoran smešten uz samu
                        obalu Dubrovnika, nedaleko od Pile kapije.
                        Ovaj ugledni restoran poznat je po svojoj izuzetnoj kuhinji i vrhunskoj usluzi.
                        Restoran je često posećivan od strane poznatih ličnosti, uključujući i pape i članove kraljevskih
                        porodica, što dodatno potvrđuje njegov ugled i kvalitet.
                        Ambijent restorana je elegantan, sa prekrasnim pogledom na more, što ga čini idealnim mestom za
                        romantične večere ili posebne događaje.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Restoran Nautica.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Restoran Nautika</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Nishta</p>
                    <p class="section-content-ostrvo-1__content__paragraph">U moru restorana, Nishta se ističe kao mesto za
                        vegetarijansku i vegansku hranu!
                        Prvi takav restoran u Dubrovniku, Nishta kombinuje ukuse zapadnih zemalja, uključujući Bliski Istok,
                        Kinu, Indiju i Meksiko, stvarajući zaista jedinstveni spoj istoka i zapada.
                        Uživajte u jelima koja variraju od falafela do samosa, kao i u bogatom izboru ukusnih salata u ovom
                        restoranu u Starom Gradu.</p>
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
                    <h3 class="section-content-ostrvo-1__content__heading">Atrakcije Starog grada:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Pile kapija
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Pile kapija je jedan od glavnih ulaza u Stari grad Dubrovnika.
                        To je impozantan kameni luk koji se nalazi na zapadnom kraju Straduna, glavne ulice u Dubrovniku.
                        Ova kapija je izgrađena u 15. veku i služila je kao glavni prolaz kroz srednjovekovne zidine grada.
                        Danas je Pile kapija popularna turistička atrakcija i simbol grada. Posetioci mogu proći kroz ovu
                        kapiju i istražiti Stari grad sa svojim brojnim istorijskim znamenitostima, restoranima i
                        prodavnicama.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Pile kapija.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Pile Kapija</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dubrovačka katedrala
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Dubrovačka katedrala, poznata i kao Katedrala Velike Gospe, jedna je od najvažnijih sakralnih
                        građevina u Dubrovniku.
                        Nalazi se u samom centru Starog grada Dubrovnika, blizu glavnog trga.
                        Ova impozantna crkva posvećena je Velikoj Gospi, a njena izgradnja započela je u 12. veku, iako je
                        više puta pretrpela različite obnove i dogradnje tokom istorije.
                        Unutrašnjost katedrale bogato je ukrašena umetničkim delima, uključujući slike i skulpture poznatih
                        majstora poput Tiziana, Rafaela i drugih.
                        Posebno je impresivan Glavni oltar katedrale, koji je ukrašen srebrom i pozlaćenim reljefima, kao i
                        relikvijama svetaca.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Katedrala Dubrovnik.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Dubrovačka katedrala</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Tvrđava Lovrijenac
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Tvrđava Lovrijenac se nalazi izvan Dubrovnika, duž njegove obale na stenovitom vrhu brda.
                        Smatra se jednim od najznačajnijih bedema u Dubrovačkoj odbrambenoj strukturi, zajedno sa zidinama
                        grada.
                        Izgrađena je u 11. veku kao odgovor na rastuću pretnju od morskih napadača.
                        Visoka preko 37 metara, Tvrđava Lovrijenac dominira obalom i pruža impresivan pogled na Jadransko
                        more i okolne oblasti.
                        Posetioci mogu istražiti unutrašnjost tvrđave, prošetati se po zidinama i uživati u panoramskom
                        pogledu na grad i more.
                        Takođe je često korišćena kao lokacija za različite kulturne događaje, poput pozorišnih predstava i
                        koncerata, što doprinosi njenom šarmu i privlačnosti.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Lovrijenac tvrdjava.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Tvrđava Lovrijenac</p>
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
                            <img class="section-gallery__gallery__image-2" src="./assets/images/dubrovnik/1.jpg" />
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/dubrovnik/Pile kapija.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/dubrovnik/2.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/dubrovnik/stradun.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/dubrovnik/Buza bar.jpg" />
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/dubrovnik/Game of thrones stepenice.jpg" />
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
        <title>MD Sailing - Dubrovnik</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Dubrovnik, bekannt als die „Perle der Adria“, verzaubert mit seiner reichen Geschichte, seiner märchenhaften Architektur und seinem kristallklaren Meer. Jeder Winkel dieser Stadt strahlt den Hauch der Vergangenheit und den einzigartigen Charme aus und sorgt für ein unvergessliches Erlebnis." />
        <meta name="keywords" content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung
">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="dubrovnik">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading"> Dubrovnik </h1> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Dubrovnik </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Dubrovnik, die Perle der Adria und
                    eine der magischsten Städte der Welt!</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <p class="section-content-ostrvo-1__content__paragraph">Mit seinen beeindruckenden Mauern der Altstadt,
                        den roten Dächern, die in der Sonne glitzern, und dem kristallklaren blauen Meer ist Dubrovnik ein
                        wahrer Genuss für alle Abenteurer und Kulturliebhaber. Die oft als „Perle der Adria“ bezeichnete
                        Stadt erobert mit ihrer weit in die Vergangenheit reichenden Geschichte die Herzen von Besuchern aus
                        aller Welt.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Bei einem Spaziergang durch die Steinstraßen der
                        Altstadt werden Sie sich fühlen, als wären Sie in ein Märchen aus der Vergangenheit eingetreten.
                        Besuchen Sie die Mauern, welche die Stadt jahrhundertelang vor Angriffen schützten, erkunden Sie die
                        engen Gänge voller historischer Sehenswürdigkeiten und genießen Sie fantastische Ausblicke von den
                        alten Festungen.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Aber Dubrovnik ist nicht nur eine Stadt mit
                        einer reichen Geschichte, sondern auch eine Stadt voller Leben und Energie. Genießen Sie leckeres
                        Essen und lokale Spezialitäten in den vielen Restaurants und Tavernen (Konobas), erkunden Sie die
                        farbenfrohen Märkte oder sitzen Sie einfach in einem der vielen Cafés am Wasser und beobachten Sie
                        die bunte Welt, die an Ihnen vorbeizieht.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Vergessen Sie nicht, sich im kristallklaren Meer
                        zu erfrischen, die nahegelegenen Strände zu erkunden und die Sonne und den Sand zu genießen.
                        Dubrovnik hat alles, was Sie für einen perfekten Urlaub brauchen – von faszinierender Geschichte bis
                        hin zu wunderschönen Stränden, von köstlichem Essen bis hin zu einer aufregenden Atmosphäre.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Die Geschichte Dubrovniks</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Dubrovnik hat eine reiche und faszinierende
                        Geschichte, die Jahrhunderte zurückreicht. Die in der Antike gegründete Stadt entwickelte sich im
                        Mittelalter zu einem wichtigen Handelshafen.</p>
                    <p class="section-content-ostrvo-1__content__paragraph"> Im 15. Jahrhundert entwickelte sich in
                        Dubrovnik eine Republik, die mit den Venezianern konkurrierte und als Handels- und Kulturzentrum
                        florierte. Die Stadt war bekannt für ihre fortschrittliche Kultur und ihre demokratischen Werte,
                        einschließlich der frühen Abschaffung der Sklaverei.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Im Laufe der Jahrhunderte war Dubrovnik
                        Schauplatz zahlreicher historischer Ereignisse und heute ist es aufgrund seiner reichen Geschichte,
                        beeindruckenden Architektur und spektakulären Naturschönheit eines der meistbesuchten Touristenziele
                        an der Adriaküste.</p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/1.jpg" />
                </div>

                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Aktivitäten in Dubrovnik:</h3>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Besuchen Sie die Festung Minčeta</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Eine der beeindruckendsten Stadtmauern, gleich nach der in China, umgibt die Altstadt von Dubrovnik.
                        Die Mauer wurde ausschließlich zur Verteidigung der Stadt gegen die Republik Venedig erbaut und ist
                        heute die Hauptattraktion, die jeden Monat Zehntausende Touristen anzieht. An der Mauer befinden
                        sich mehrere Festungen, von denen die größte die Minceta-Festung ist, die einen atemberaubenden
                        Blick auf das Innere der Stadt bietet. Obwohl auf den Mauern recht viel los sein kann, ist ein
                        Besuch der Minceta-Festung auf jeden Fall die Mühe und den Eintrittspreis wert.

                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/minceta.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Minčeta</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Machen Sie einen Spaziergang entlang der
                        Stadtmauern</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Begeben Sie sich auf das Abenteuer eines Spaziergangs entlang der Stadtmauern von Dubrovnik und
                        entdecken Sie den Zauber der Vergangenheit, der in jedem Stein lebt. Diese imposanten Mauern aus dem
                        15. Jahrhundert zeugen von der reichen Geschichte der Stadt, die im Laufe der Jahrhunderte gegen
                        zahlreiche Herausforderungen verteidigt wurde. Spazieren Sie über die Terrakottadächer der Altstadt
                        und genießen Sie die spektakuläre Aussicht auf die kristallklare Adria. Jeder Schritt auf diesen
                        Stadtmauern weckt ein Gefühl von Abenteuer und der Entdeckung der verborgenen Schätze von Dubrovnik.
                        Verpassen Sie nicht die Gelegenheit, die einzigartige Atmosphäre dieser historischen Mauern zu
                        erleben und unvergessliche Erinnerungen zu schaffen, die Ihnen für immer in Erinnerung bleiben
                        werden.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/gradski bedemi.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Stadtmauern</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Gondelfahrt in Dubrovnik</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Um ein umfassendes Erlebnis von Dubrovnik zu erleben, sollten Sie sich die Gelegenheit nicht
                        entgehen lassen, den Berg Srđ, den höchsten Punkt der Stadt, zu besuchen. Sie können die Reise nach
                        oben mit der Seilbahn beginnen, die außerhalb der Stadtmauern zur alten Festung auf dem Berg Srđ
                        führt. Oben angekommen werden Sie mit einem wunderschönen Ausblick auf die Stadt und ihre
                        charakteristischen Terrakottadächer belohnt. In der Nähe gibt es auch ein Restaurant, in dem Sie
                        Speisen und Getränke genießen und dabei die Landschaft genießen können, sei es bei einer Tasse
                        Kaffee oder einem zwanglosen Mittagessen. In der Ferne können Sie die Inseln Lokrum und Elafit
                        sehen, zwei Perlen der Adria, die während Ihres Aufenthalts in Dubrovnik einen Besuch wert sind.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/gondola.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Dubrovnik-Gondel</p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Schlendern Sie entlang der Stradun</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Stradun ist ein Muss in Dubrovnik, da es sich um die Hauptstraße der Stadt handelt. Stradun ist mit
                        antiken Marmorplatten gepflastert und beherbergt einige der beeindruckendsten Gebäude Dubrovniks.
                        Die mittelalterliche Kirche St. Blasius und die Kathedrale von Dubrovnik sind die architektonischen
                        Juwelen von Stradun, während sich unter der Straße ein unglaubliches Wassersystem befindet, das bis
                        zu 600 Jahre alt ist. Vergessen Sie nicht, das Franziskanerkloster zu besuchen und die älteste
                        Apotheke Europas zu erkunden! Nachdem Sie die Sehenswürdigkeiten besichtigt haben, entspannen Sie
                        sich in einer der vielen Seitenstraßen, die sich mit dem Dubrovnik Stradun kreuzen. Diese Gassen
                        sind voller authentischer Restaurants, Bars und Cafés, perfekt für eine Kaffeepause zwischen den
                        Erkundungstouren!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/dubrovnik/stradun.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Stradun</p>
                    <h3 class="section-content-ostrvo-1__content__heading">5. Besuchen Sie die Buža Bar</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Während Sie durch die engen Gassen der Altstadt schlendern und ihre Schönheit und mittelalterliche
                        Atmosphäre genießen, stoßen Sie vielleicht zufällig auf die Buža Bar. Benannt nach ihrem
                        ungewöhnlichen Eingang – einem kleinen Loch in der Stadtmauer (Buža) – liegt diese Bar auf einer
                        Klippe mit Blick auf das Meer. Die Buža Bar ist der perfekte Ort zum Entspannen und Genießen der
                        friedlichen Atmosphäre, die das Leben in Dubrovnik kennzeichnet. Wenn Sie es nicht zufällig finden,
                        können Sie danach suchen, indem Sie auf die Seite der Stadtmauer schauen, die der Insel Lokrum
                        zugewandt ist. Achten Sie auf das Schild „Kalte Getränke“ und Sie werden nichts falsch machen!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Buza bar.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Buža Bar</p>
                    <h3 class="section-content-ostrvo-1__content__heading">6. Erkunden Sie die Drehorte von Game of Thrones
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Dreharbeiten zur Serie „Game of Thrones“ in Dubrovnik waren für diese Stadt an der Adriaküste
                        äußerst wichtig. Dubrovnik diente als spektakuläre Kulisse für Kraljeva Luka, die Hauptstadt der
                        Sieben Königreiche. Dieser alte Mittelmeerhafen mit seinen imposanten Mauern und historischen
                        Gebäuden passte perfekt zur Vision des Autors George R.R. Martin. Orte wie die „beschämenden“
                        Stufen, die Kirche des Heiligen Erlösers und die Festung Lovrijenac sind zu ikonischen Zielen für
                        Fans auf der ganzen Welt geworden.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Game of thrones stepenice.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Drehort von Game of Thrones</p>
                    <h3 class="section-content-ostrvo-1__content__heading">7. Besuchen Sie die älteste Apotheke Europas</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Sie stammt aus dem Jahr 1317 und gilt als drittälteste Apotheke der Welt. Es befindet sich in einem
                        Dominikanerkloster aus dem 14. Jahrhundert. Diese Apotheke, die während der Ragusa-Ära in Betrieb
                        war, versorgte die lokale Bevölkerung und ausländische Besucher mit medizinischen Dienstleistungen.
                        Heute können Besucher dieses historische Wahrzeichen besichtigen und alte pharmazeutische Geräte,
                        medizinische Bücher und andere Artefakte aus dieser Zeit besichtigen. Im Inneren des Klosters
                        befindet sich außerdem das Apothekenmuseum, das wichtige Artefakte aus dem 15. Jahrhundert
                        aufbewahrt und einen Einblick in die reiche Geschichte dieses Ortes bietet.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Stara apoteka.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Die älteste Apotheke Europas</p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Die besten Orte zum Spaßhaben in Dubrovnik:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Copacabana Beach Club</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Es gibt keine luxuriösere Option als Copacabana!
                        Dieser exklusive Strand liegt an der halbmondförmigen Küste und bietet Besuchern spektakuläre
                        Ausblicke auf die Adria. Der Club ist darauf ausgelegt, den Gästen das ultimative Erlebnis zu
                        bieten, einschließlich luxuriöser Kabinen, Champagner und trendiger Musik.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Sky Bar</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Die Sky Bar ist ein beliebter Nachtlokal in der
                        Nähe des Pile-Tors, einem der Haupteingänge zur Altstadt. Diese Bar lockt Besucher mit trendigem
                        Design, modernem Ambiente und aufregender Atmosphäre. Die Türen der Bar öffnen erst um Mitternacht
                        und die Party geht bis in die frühen Morgenstunden, was sie zum perfekten Ort für alle macht, die
                        auf der Suche nach Unterhaltung bis spät in die Nacht sind. Die Sky Bar ist bekannt für ihre
                        spektakulären Partys und elektronische Musik, die Sie die ganze Nacht auf der Tanzfläche fesseln
                        wird.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Revelin Culture Club</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Der Revelin Culture Club ist einer der
                        berühmtesten und exklusivsten Clubs in Dubrovnik und befindet sich innerhalb der Mauern der alten
                        Stadtfestung aus dem 15. Jahrhundert. Dieser Club ist zu einem Symbol des Nachtlebens der Stadt
                        geworden und zieht Besucher aus aller Welt an. Mit seinem einzigartigen Ambiente und seiner
                        energiegeladenen Atmosphäre ist Revelin ein unverzichtbares Ziel für alle Liebhaber von Unterhaltung
                        und elektronischer Musik.</p>
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
                    <h3 class="section-content-ostrvo-1__content__heading">Wo essen in Dubrovnik?</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Dubrovnik ist ein Paradies für Feinschmecker,
                        denn viele renommierte Restaurants bieten eine große Auswahl an Gerichten. Unabhängig davon, ob Sie
                        sich innerhalb der Mauern der Altstadt oder entlang des Stradun befinden, erwartet Sie ein
                        außergewöhnliches gastronomisches Erlebnis. Hier sind einige unserer Empfehlungen, die Sie während
                        Ihres Aufenthalts in dieser wunderschönen Stadt besuchen können.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Restoran 360</p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Restoran 360.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Restoran 360</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Es befindet sich in spektakulärer Lage auf den
                        Mauern der UNESCO-Festung und bietet einen herrlichen Blick auf den Hafen und das Meer. Dieses
                        Restaurant zeichnet sich durch hervorragende, von der mediterranen Küche inspirierte Gerichte sowie
                        moderne Interpretationen traditioneller kroatischer Rezepte aus. Es verfügt über einen
                        Michelin-Stern, was die Qualität seiner Küche zusätzlich bestätigt. Ein Besuch im Restaurant 360
                        bietet Ihnen die Möglichkeit, erstklassigen Service, ein edles Ambiente und ein gastronomisches
                        Erlebnis zu genießen, das Ihnen im Gedächtnis bleiben wird.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Nautika</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Nautika ist ein Luxusrestaurant an der Küste von
                        Dubrovnik, nicht weit vom Pile-Tor entfernt. Dieses angesehene Restaurant ist für seine
                        außergewöhnliche Küche und seinen hervorragenden Service bekannt. Das Restaurant wird oft von
                        Prominenten besucht, darunter Päpste und Mitglieder königlicher Familien, was seinen Ruf und seine
                        Qualität zusätzlich bestätigt. Das Ambiente des Restaurants ist elegant und bietet einen
                        wunderschönen Blick auf das Meer, was es zu einem idealen Ort für romantische Abendessen oder
                        besondere Anlässe macht.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Restoran Nautica.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Nautika</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Nishta</p>
                    <p class="section-content-ostrvo-1__content__paragraph">In einem Meer von Restaurants sticht Nishta als
                        Ort für vegetarisches und veganes Essen hervor! Als erstes Restaurant dieser Art in Dubrovnik
                        vereint Nishta die Aromen westlicher Länder, darunter des Nahen Ostens, Chinas, Indiens und Mexikos,
                        und schafft so eine wirklich einzigartige Mischung aus Ost und West. Genießen Sie in diesem
                        Restaurant in der Altstadt Gerichte von Falafel bis Samosas sowie eine reichhaltige Auswahl an
                        leckeren Salaten.</p>
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
                    <h3 class="section-content-ostrvo-1__content__heading">Sehenswürdigkeiten der Altstadt:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Pile-Tor
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Das Pile-Tor ist einer der Haupteingänge zur Altstadt von Dubrovnik. Es handelt sich um einen
                        imposanten Steinbogen am westlichen Ende von Stradun, der Hauptstraße von Dubrovnik. Dieses Tor
                        wurde im 15. Jahrhundert erbaut und diente als Hauptdurchgang durch die mittelalterlichen
                        Stadtmauern. Heute ist das Pile-Tor eine beliebte Touristenattraktion und Symbol der Stadt. Durch
                        dieses Tor können Besucher die Altstadt mit ihren vielen historischen Stätten, Restaurants und
                        Geschäften erkunden.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Pile kapija.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Pile-Tor</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Kathedrale von Dubrovnik
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Kathedrale von Dubrovnik, auch Kathedrale Mariä Himmelfahrt genannt, ist eines der wichtigsten
                        Sakralgebäude in Dubrovnik. Es liegt mitten im Zentrum der Altstadt von Dubrovnik, in der Nähe des
                        Hauptplatzes. Diese imposante Kirche ist der Jungfrau Maria geweiht und ihr Bau begann im 12.
                        Jahrhundert, obwohl sie im Laufe der Geschichte mehrfach renoviert und erweitert wurde. Das Innere
                        der Kathedrale ist reich mit Kunstwerken geschmückt, darunter Gemälde und Skulpturen berühmter
                        Meister wie Tizian, Raffael und anderen. Besonders beeindruckend ist der Hauptaltar der Kathedrale,
                        der mit silbernen und vergoldeten Reliefs sowie Reliquien von Heiligen geschmückt ist.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Katedrala Dubrovnik.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Kathedrale von Dubrovnik</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Festung Lovrijenac
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Festung Lovrijenac liegt außerhalb von Dubrovnik an der Küste auf einem felsigen Hügel. Sie gilt
                        neben der Stadtmauer als eine der wichtigsten Befestigungsanlagen der Verteidigungsanlage
                        Dubrovniks. Es wurde im 11. Jahrhundert als Reaktion auf die wachsende Bedrohung durch Seeräuber
                        erbaut. Mit einer Höhe von über 37 Metern dominiert die Festung Lovrijenac die Küste und bietet
                        einen beeindruckenden Blick auf die Adria und die umliegenden Gebiete. Besucher können das Innere
                        der Festung erkunden, entlang der Mauern spazieren und einen Panoramablick auf die Stadt und das
                        Meer genießen. Es wird auch häufig als Veranstaltungsort für verschiedene kulturelle Veranstaltungen
                        wie Theateraufführungen und Konzerte genutzt, was seinen Charme und seine Attraktivität erhöht.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/dubrovnik/Lovrijenac tvrdjava.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Festung Lovrijenac</p>
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
                            <img class="section-gallery__gallery__image-2" src="./assets/images/dubrovnik/1.jpg" />
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/dubrovnik/Pile kapija.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/dubrovnik/2.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/dubrovnik/stradun.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/dubrovnik/Buza bar.jpg" />
                            <img class="section-gallery__gallery__image-2"
                                src="./assets/images/dubrovnik/Game of thrones stepenice.jpg" />
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