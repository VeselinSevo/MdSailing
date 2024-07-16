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
        <title>MD Sailing - Hvar</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Ostrvo Hvar, jedno je od najpoznatijih i najatraktivnijih turističkih destinacija duž Jadranske obale. Sa svojom bogatom istorijom, predivnom prirodom i raznolikim sadržajima, Hvar privlači posetioce iz celog sveta." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="hvar">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading" > Hvar </h1> -->
                <!-- <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading" >Ostrvo Hvar, jedno je od najpoznatijih i najatraktivnijih turističkih destinacija duž Jadranske obale.
          </p> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Hvar </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Sa svojom bogatom istorijom,
                    predivnom prirodom i raznolikim sadržajima, Hvar privlači posetioce iz celog sveta.</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Nešto o Hvaru:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Jedno od najpoznatijih znamenitosti ostrva je
                        Stari Grad, koji je jedan od najstarijih gradova u Evropi i pod zaštitom UNESCO-a.
                        Sa svojim uskim kamenim ulicama, prelepim trgovima i brojnim istorijskim zgradama, Stari Grad pruža
                        jedinstvenu atmosferu i bogato kulturno iskustvo.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Još jedna atrakcija ostrva Hvar je tvrđava
                        Fortica, koja se nalazi na vrhu brda iznad grada Hvara.
                        Posetioci mogu uživati u spektakularnom pogledu na grad i okolna ostrva sa ove istorijske lokacije,
                        dok istražuju njegove zidine i kulturno nasleđe.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Osim toga, Hvar nudi prelepe plaže sa kristalno
                        čistim morem, kao što su plaže Dubovica, Zlatni rat i Pakleni otoci.
                        Ovi rajski delovi obale pružaju idealnu priliku za sunčanje, plivanje i ronjenje u tirkiznom moru.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Ono što čini Hvar posebno privlačnim je i
                        njegova živopisna noćna scena.
                        Ostrvo je poznato po svojim živahnim barovima, klubovima i restoranima koji nude bogatu ponudu
                        hrane, pića i zabave tokom cele noći.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Sve ove znamenitosti i aktivnosti čine Hvar
                        neodoljivom destinacijom za posetu.
                        Bez obzira da li ste ljubitelj istorije, prirode, plaža ili noćnog života, Hvar nudi nezaboravno
                        iskustvo za sve posetioce.
                        Posetite Hvar i otkrijte lepotu ovog magičnog ostrva u srcu Jadrana.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Aktivnosti na ostrvu Hvar:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Na Hvaru postoji obilje stvari koje možete raditi, videti i probati tokom posete ostrvu.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Istražite Paklena ostrva</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Paklena ostrva, smeštena uz jugoistočnu obalu ostrva Hvar, predstavljaju jednu od najatraktivnijih
                        turističkih destinacija ovog regiona.
                        Ova grupa od 19 šumovitih ostrva, koja doslovno znače "Paklena ostrva" na engleskom jeziku, privlači
                        pažnju posetilaca širom sveta svojom izuzetnom lepotom i raznovrsnošću atrakcija.

                        Prvo što privlači turiste je spektakularan prirodni pejzaž.
                        Paklena ostrva su okružena kristalno čistim tirkiznim morem i prekrivena bujnom mediteranskom
                        vegetacijom, pružajući posetiocima nezaboravan doživljaj netaknute prirode.
                        Osim toga, ostrva su poznata po svojim prelepim plažama i skrivenim uvalama, koje nude idealne
                        uslove za sunčanje, plivanje i istraživanje podvodnog sveta.
                        Jedna od najpoznatijih atrakcija na Paklenim ostrvima je Palmižana, ostrvo koje je pretvoreno u
                        rajski vrt sa prelepim vrtovima, restoranima, barovima i galerijama.
                        Posetioci mogu uživati u šetnji kroz egzotične biljne vrste, degustaciji lokalnih specijaliteta i
                        kupanju na slikovitim plažama.
                        Ako se pridružite našoj privatnoj turi brodom ili flotili, savetujemo Vam da ne propustite ovaj
                        doživljaj!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/Paklena ostrva.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Paklena Ostrva</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Isprobajte čuvenu lavandu sa Hvara</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Hvar već godinama gaji mirisna polja lavande širom ostrva.
                        Ako postoji proizvod koji bi čak i donekle mogao sadržati lavandu, na ostrvu Hvar ćete ga sigurno
                        pronaći!
                        Ulje lavande, sladoled od lavande i med od lavande samo su neki od proizvoda koji su dostupni!
                        Dok istražujete ostrvo, primetićete polja lavande koja rastu gotovo na svakom koraku!
                        Kraj juna je najbolje vreme da doživite punu raskoš lavandinih polja u punom cvatu.
                        Posetite porodično vođeno polje lavande, nabavite malo ulja lavande za uspomenu ili jednostavno
                        uživajte u lokalnom sladoledu od lavande!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/Polja lavande.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Polja lavande</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Posetite tvrđavu Španjola</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Tvrđava Španjola, poznata i kao Fortica, predstavlja jednu od najimpresivnijih znamenitosti na
                        ostrvu Hvar.
                        Tvrđava je izgrađena u 16. veku kao odbrambena tvrđava protiv turskih osvajača.
                        Tokom vekova, bila je ključna tačka odbrane grada Hvara i njegovih stanovnika.
                        Danas, tvrđava služi kao muzej i domaćin je impresivne kolekcije amfora i antikviteta.
                        Posetioci mogu istražiti bogatu istoriju ostrva Hvar kroz artefakte iz prošlih vremena.
                        Jedan od najvećih razloga za posetu tvrđavi Španjola je spektakularan pogled koji pruža.
                        Sa vrha tvrđave, posetioci mogu uživati u panoramskom pogledu na grad Hvar, Jadransko more i
                        obližnja Paklena ostrva, što čini posetu nezaboravnim iskustvom.
                        Pored muzejskih eksponata, tvrđava takođe ima kafe bar gde posetioci mogu uživati u piću i opuštenoj
                        atmosferi dok uživaju u prelepom pogledu.
                        Kako bi stigli do tvrđave, posetioci moraju proći kroz uske uličice i stepenice Starog grada Hvara,
                        što pruža priliku za istraživanje šarmantnih delova grada pre nego što se popnu na vrh.
                        Ukratko, tvrđava Španjola je nezaobilazna destinacija za sve posetioce ostrva Hvar.
                        Njen značaj u istoriji ostrva, impresivna muzejska kolekcija, spektakularan pogled i jedinstven
                        doživljaj čine je nezaboravnom destinacijom za istraživanje i uživanje.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/Tvrdjava spanjola.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Tvrđava Španjola</p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Probajte lokalna vina</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Hvar već više od 2.400 godina neguje tradiciju vinogradarstva i autohtonih sorti grožđa, što ga čini
                        savršenim mestom za uživanje u degustaciji vina!
                        Prve vinove loze zasađene su na, sada pod zaštitom UNESCO-a, Starogradskoj poljani 384. godine pre
                        nove ere, što znači da su neke loze na ovom ostrvu stare vekovima.
                        Topla klima, bogato i raznovrsno zemljište, kao i drevne tradicije proizvode lokalne sorte vina
                        poput Pošipa i Plavca Malog, koji su osvojili brojne nagrade.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/Uzivajte u lokalnim vinima.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Lokalna vina</p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Najbolje lokacije za zabavu na Hvaru:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Omiljen među poznatima i ljubiteljima noćnog
                        provoda, Hvar je idealno ostrvo za one koji traže nezaboravnu noćnu avanturu i žele da iskuse
                        najbolji noćni život koji Hrvatska ima da ponudi! </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Carpe Diem
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Nautica Bar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Hula Hula Bar
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
                    <h3 class="section-content-ostrvo-1__content__heading">Gde jesti na Hvaru:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Ovo su samo neka od mnogobrojnih lokacija gde
                        možete jesti ukusnu hranu.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Mizarola
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Apetti
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Divino
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
                    <h3 class="section-content-ostrvo-1__content__heading">Posetite najlepše plaže na Hvaru:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Hvar je poznat po tome što ima neke od najlepših
                        plaža u Hrvatskoj koje se nalaze tik uz njegove obale.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Sa obzirom na toliko izbora, mi smo ih suzili na
                        naše favorite!
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Pokonji dol
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Mekičevica plaža
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Dubovica
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/Dubovica.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Dubovica</p>
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
                    <h3 class="section-content-ostrvo-1__content__heading">Stari Grad</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Stari Grad, jedan od bisera ostrva Hvar, očarava posetioce svojom istorijskom lepotom i jedinstvenim
                        šarmom.
                        Ovo slikovito mesto, smešteno na severu ostrva, predstavlja jedno od najstarijih gradskih naselja u
                        Evropi, sa istorijskim korenima koji sežu duboko u prošlost.
                        Jedna od najupečatljivijih karakteristika Starog Grada je njegova bogata istorija, koja datira još
                        iz perioda oko 3.000 godina pre nove ere.
                        Grad je bio svedok mnogih istorijskih događaja i promena, što se može videti u njegovoj arhitekturi
                        i spomenicima koji svedoče o različitim periodima i kulturama koje su oblikovale ovaj grad.
                        Osim svoje istorijske važnosti, Stari Grad očarava svojom slikovitošću i prirodnim lepotama.
                        Okružen bujnim mediteranskim pejzažem, grad se prostire duž prelepe obale i nudi spektakularne
                        poglede na Jadransko more.
                        Šetajući njegovim uskim kamenim ulicama, otkrićete skrivene trgove, tradicionalne kuće od kamena i
                        živopisne vrtove pune mirisnih mediteranskih biljaka.
                        Posetioci mogu istraživati ​​njegove antičke ruševine, posetiti muzeje posvećene lokalnoj istoriji i
                        umetnosti, ili jednostavno uživati u lokalnim restoranima i kafićima koji nude autentične
                        dalmatinske specijalitete.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/old town hvar.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Stari Grad</p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/old town 2.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Stari Grad</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        1. Prošetajte venecijanskim ulicama
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Jedan od najboljih načina da doživite destinaciju jeste da se jednostavno izgubite u njoj, a to je
                        posebno istinito u Starom Gradu.
                        Dok su veći gradovi prenatrpani na svakom koraku, Stari Grad je očaravajuće prazan, što vam
                        omogućava da istražite sve njegove tajne bez uznemiravanja.
                        Venecijanske uličice Starog Grada su mnogo manje u poređenju sa gradovima poput Splita i Dubrovnika,
                        što znači da možete proći celom mrežom ulica gde je vreme stalo, sve u toku jednog dana.
                        Na svakom koraku očekuje vas nešto novo: od slikovitih kafića do drevnih arkada i divnih restorana,
                        što samo pojačava vašu radoznalost!
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        2. Uživajte u Rivi Stari Grad
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Palmina šetališta uz obalu imaju romantičnu privlačnost, bilo da se šetate pored venecijanskih
                        zgrada starih vekovima, ili opuštate u restoranu na otvorenom, posmatrajući lokalno stanovništvo
                        kako provodi vreme.
                        Zagrli nežan i spor način života na Rivi u ovom starom gradu, uzimajući vreme da zahvatite što više
                        prelepih prizora koliko je moguće.
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        3. Posetite muzej Starog Grada
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Sa obzirom na istoriju Starog Grada, muzej koji prikazuje njegovu bogatu prošlost je nešto što se
                        podrazumeva.
                        Otkrijte sva čuda i artefakte istorije Starog Grada unutar samog blaga - muzej se nalazi u
                        neorenesansnoj palati iz 19. veka, nekadašnjem domu braće Biankini iz 1896. godine!
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        4. Pešačite do brda Glavica
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Pešačenje do brda Glavica je izvodljivo za sve nivoe fizičke spreme.
                        Relativno je lagani uspon koji postaje malo uzak prema vrhu.
                        U skladu sa hrvatskim terenom, pešačenje je praćeno gustim borovima duž ivica koji će pružiti hlad
                        za one tropske letnje dane.
                        Dvadesetominutni hod će se otvoriti panoramskim pogledom na Stari Grad, a možda ćete čak uhvatiti
                        pogled na susedna mesta.
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        5. Probajte sladoled od lavande
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Na ostrvu koje obiluje prirodnim cvetom - čak i festivalom istog - sladoled od lavande je neobična
                        lokalna poslastica koju treba probati.
                        Stara izreka kaže, 'ruža je miris srca, lavanda je miris duše' - šta je bolje za dušu od uživanja u
                        sladoledu!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/4.jpg" />
                    </div>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Najbolji barovi u Starom Gradu:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Hvar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Lampedusa Bar
                    </p>

                    <h3 class="section-content-ostrvo-1__content__heading">
                        Gde jesti u Starom Gradu:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Jurin podrum
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Antika
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Konoba Batana
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Kod Barba Luke
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Posetite najlepše plaže u Starom Gradu:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Plaža Banj
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Maslinička uvala
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Plaža Oslič
                    </p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Jelsa</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Na severnoj obali ostrva Hvar nalazi se Jelsa, mali lučki grad smešten na obali slikovite uvale.
                        Jelsa je miran grad ispunjen fantastičnim mestima za kupanje, intimnim ulicama i upečatljivim
                        trgovima.
                        Iz Jelse možete videti dva najviša vrha na ovom ostrvu, Sveti Nikola i Hum, i otkriti najznačajnije
                        praistorijsko nalazište na Jadranu, pećinu Grapčeva.
                        Jelsa je takođe poznata po svojim prelepim plažama i slikovitim okolinama.
                        Uživanje na plažama poput Mina, Grebišće ili Stiniva pruža nezaboravno iskustvo, dok okolni pejzaži
                        prepuni zelenila i vinograda pružaju spektakularne poglede.
                        Osim toga, Jelsa je poznata po vinogradima i vinarijama, a poseta lokalnim vinarijama kao što su
                        Tomić i Plančić pruža priliku da se uživa u degustaciji vrhunskih vina.
                        Za ljubitelje aktivnog odmora, Jelsa nudi brojne mogućnosti, uključujući planinarenje na obližnjim
                        brdima, biciklizam kroz prelepu prirodu ostrva i razne vodene aktivnosti.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/jelsa.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Jelsa</p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Gde jesti u Jelsi:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Kokot
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Stari Mlin
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Restoran Me and Mrs. Jones
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Najbolji barovi u Jelsi:
                    </h3>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Ribar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Jazz Bar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Konoba Bonaca
                    </p>


                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Vrboska</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Grad Vrboska na ostrvu Hvar predstavlja jedinstvenu destinaciju koja oduševljava posetioce svojom
                        lepotom i šarmom.
                        Smatra se jednim od najmanjih gradova na ostrvu, ali obiluje bogatom istorijom, prelepom prirodom i
                        raznovrsnim aktivnostima za sve ukuse.
                        Jedna od najupečatljivijih karakteristika Vrboske je njena slikovita lokacija u zaštićenoj uvali,
                        koja je čini jednom od najsigurnijih luka na Jadranskom moru.
                        Šetnja kroz grad otkriva prelepe kamene mostove koji prelaze preko kanala, povezujući grad sa
                        ostrvom u sredini uvale.
                        Osim toga, fascinantne fasade i utvrđena crkva dodaju čar Vrboski.
                        Što se tiče aktivnosti, Vrboska nudi nešto za svakoga.
                        Ljubitelji prirode mogu istraživati obližnje staze za šetnje ili planinarenje, dok avanturisti mogu
                        uživati u raznim vodenim sportovima poput ronjenja, jedrenja ili vožnje kajakom.
                        Oni koji vole kulturne aktivnosti mogu posetiti lokalne muzeje, galerije i crkve kako bi saznali
                        više o bogatoj istoriji i kulturi grada.
                        Vrboska nudi nekoliko prelepih mesta za kupanje i opuštanje.
                        Neke od najpoznatijih plaža uključuju Soline, Maslinicu i Česminicu, koje su poznate po kristalno
                        čistoj vodi i mirnom okruženju.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/vrboska.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Vrboska</p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Posetite neke od barova u Vrboskoj:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Nautica Bar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Sidro
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Beach Bar Bacchus
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Konoba Vina Hvar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 5. Picerija Antonio
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Gde jesti u Vrboskoj:
                    </h3>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba kod None
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Duga
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Konoba Kogo
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Konoba Vrtlic
                    </p>
                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/hvar/1.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/hvar/4.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/hvar/5.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/hvar/6.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/hvar/7.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/hvar/8.jpg" />
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
        <title>MD Sailing - Hvar</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description" content="Die Insel Hvar ist eines der bekanntesten und attraktivsten Touristenziele an der Adriaküste. Mit seiner reichen Geschichte, der wunderschönen Natur und den vielfältigen Einrichtungen zieht Hvar Besucher aus aller Welt an.
" />
        <meta name="keywords" content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung
">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-ostrvo-1" id="hvar">
            <div class="section-hero__text">
                <!-- <h1 class="heading__h1 section-hero__text__heading" > Hvar </h1> -->
                <!-- <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading" >Ostrvo Hvar, jedno je od najpoznatijih i najatraktivnijih turističkih destinacija duž Jadranske obale.
              </p> -->
            </div>
        </section>
        <section class="section-content-ostrvo-1 section">
            <div class="section__heading">
                <h2 class="heading__h2 heading__h2__lightmode"> Hvar </h2>
                <p class="paragraph__subheading-h2 paragraph__subheading-h2__lightmode"> Mit seiner reichen Geschichte, der
                    wunderschönen Natur und den vielfältigen Einrichtungen zieht Hvar Besucher aus aller Welt an.</p>
            </div>
            <div class="section-content-ostrvo-1__content">
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Etwas über Hvar:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Eine der berühmtesten Sehenswürdigkeiten der
                        Insel ist die Altstadt, die zu den ältesten Städten Europas zählt und unter dem Schutz der UNESCO
                        steht. Mit ihren engen Steingassen, schönen Plätzen und zahlreichen historischen Gebäuden bietet die
                        Altstadt eine einzigartige Atmosphäre und ein reichhaltiges Kulturerlebnis.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Eine weitere Attraktion der Insel Hvar ist die
                        Festung Fortica, die auf einem Hügel über der Stadt Hvar liegt. Besucher können von diesem
                        historischen Ort aus einen spektakulären Blick auf die Stadt und die umliegenden Inseln genießen und
                        gleichzeitig die Mauern und das kulturelle Erbe erkunden.</p>
                    <p class="section-content-ostrvo-1__content__paragraph">Darüber hinaus bietet Hvar wunderschöne Strände
                        mit kristallklarem Meer, wie die Strände von Dubovica, Zlatni rat und Pakleni otoci. Diese
                        paradiesischen Küstenabschnitte bieten die ideale Gelegenheit zum Sonnenbaden, Schwimmen und Tauchen
                        im türkisfarbenen Meer.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Was Hvar besonders attraktiv macht, ist sein
                        farbenfrohes Nachtleben. Die Insel ist bekannt für ihre lebhaften Bars, Clubs und Restaurants,
                        welche die ganze Nacht über eine große Auswahl an Speisen, Getränken und Unterhaltung bieten.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">All diese Sehenswürdigkeiten und Aktivitäten
                        machen Hvar zu einem unwiderstehlichen Reiseziel. Unabhängig davon, ob Sie ein Liebhaber von
                        Geschichte, Natur, Stränden oder Nachtleben sind, bietet Hvar allen Besuchern ein unvergessliches
                        Erlebnis. Besuchen Sie Hvar und entdecken Sie die Schönheit dieser magischen Insel im Herzen der
                        Adria.
                    </p>
                </article>
                <div class="section-content-ostrvo-1__content__images">
                    <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/2.jpg" />
                </div>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Aktivitäten auf der Insel Hvar:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Auf Hvar gibt es während Ihres Besuchs auf der Insel viel zu tun, zu sehen und auszuprobieren.
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">1. Erkunden Sie die Paklena-Inseln</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Paklena-Inseln liegen an der Südostküste der Insel Hvar und sind eines der attraktivsten
                        Touristenziele in dieser Region. Diese Gruppe von 19 bewaldeten Inseln, die auf Deutsch wörtlich
                        „Hölleninseln“ bedeutet, zieht aufgrund ihrer außergewöhnlichen Schönheit und Vielfalt an
                        Attraktionen die Aufmerksamkeit von Besuchern aus aller Welt auf sich. Das erste, was Touristen
                        anzieht, ist die spektakuläre Naturlandschaft. Die Hölleninseln sind von kristallklarem
                        türkisfarbenem Meer umgeben und mit üppiger mediterraner Vegetation bedeckt und bieten Besuchern ein
                        unvergessliches Erlebnis unberührter Natur. Darüber hinaus sind die Inseln für ihre wunderschönen
                        Strände und versteckten Buchten bekannt, die ideale Bedingungen zum Sonnenbaden, Schwimmen und
                        Erkunden der Unterwasserwelt bieten. Eine der berühmtesten Attraktionen der Hölleninseln ist
                        Palmižana, eine Insel, die sich in ein Paradies mit wunderschönen Gärten, Restaurants, Bars und
                        Galerien verwandelt hat. Besucher können einen Spaziergang durch exotische Pflanzenarten genießen,
                        lokale Spezialitäten probieren und an malerischen Stränden schwimmen. Wenn Sie an unserer privaten
                        Boots- oder Flottillentour teilnehmen, raten wir Ihnen, dieses Erlebnis nicht verpassen zu dürfen!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/Paklena ostrva.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Paklena-Inseln</p>
                    <h3 class="section-content-ostrvo-1__content__heading">2. Probieren Sie den berühmten Lavendel aus Hvar
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Hvar baut seit Jahren duftende Lavendelfelder auf der ganzen Insel an. Wenn es ein Produkt gibt, das
                        sogar einen gewissen Anteil an Lavendel enthalten könnte, dann werden Sie es auf der Insel Hvar auf
                        jeden Fall finden! Lavendelöl, Lavendeleis und Lavendelhonig sind nur einige der verfügbaren
                        Produkte! Wenn Sie die Insel erkunden, werden Sie fast auf Schritt und Tritt Lavendelfelder
                        bemerken, die wachsen! Ende Juni ist die beste Zeit, um die volle Pracht der Lavendelfelder in
                        voller Blüte zu erleben. Besuchen Sie ein familiengeführtes Lavendelfeld, besorgen Sie sich
                        Lavendelöl als Souvenir oder genießen Sie einfach ein lokales Lavendeleis!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/Polja lavande.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">
                        Lavendelfelder</p>
                    <h3 class="section-content-ostrvo-1__content__heading">3. Besuchen Sie die Festung Španjola </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Festung Španjola, auch Fortica genannt, ist eine der beeindruckendsten Sehenswürdigkeiten auf
                        der Insel Hvar. Die Festung wurde im 16. Jahrhundert als Verteidigungsfestung gegen türkische
                        Eindringlinge erbaut. Im Laufe der Jahrhunderte war es ein wichtiger Verteidigungspunkt der Stadt
                        Hvar und ihrer Bewohner. Heute dient die Festung als Museum und beherbergt eine beeindruckende
                        Sammlung von Amphoren und Antiquitäten. Besucher können die reiche Geschichte der Insel Hvar anhand
                        von Artefakten aus vergangenen Zeiten erkunden. Einer der Hauptgründe für einen Besuch der Festung
                        Španjola ist die spektakuläre Aussicht, die sie bietet. Von der Spitze der Festung genießen Besucher
                        einen Panoramablick auf die Stadt Hvar, die Adria und die nahegelegenen Paklena-Inseln, was den
                        Besuch zu einem unvergesslichen Erlebnis macht. Zusätzlich zu den Museumsausstellungen verfügt die
                        Festung auch über eine Café-Bar, in der Besucher bei einem Drink und entspannter Atmosphäre die
                        schöne Aussicht genießen können. Um die Festung zu erreichen, müssen Besucher durch die engen Gassen
                        und Stufen der Altstadt von Hvar gehen, was die Möglichkeit bietet, die bezaubernden Teile der Stadt
                        zu erkunden, bevor sie auf die Spitze steigen. Kurz gesagt, die Festung Španjola ist ein
                        unverzichtbares Ziel für alle Besucher der Insel Hvar. Ihre Bedeutung für die Geschichte der Insel,
                        die beeindruckende Museumssammlung, die spektakulären Ausblicke und einzigartigen Erlebnisse machen
                        sie zu einem unvergesslichen Reiseziel zum Erkunden und Genießen.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/Tvrdjava spanjola.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Festung Spanola
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">4. Probieren Sie lokale Weine</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Seit mehr als 2.400 Jahren pflegt Hvar die Tradition des Weinbaus und autochthoner Rebsorten, was es
                        zum perfekten Ort für Weinproben macht! Die ersten Weinreben wurden in Starogradska Poljana, das
                        heute unter dem Schutz der UNESCO steht, im Jahr 384 v. Chr. gepflanzt, was bedeutet, dass einige
                        Weinreben auf dieser Insel Jahrhunderte alt sind. Das warme Klima, der reichhaltige und
                        abwechslungsreiche Boden sowie alte Traditionen bringen lokale Weinsorten wie Pošip und Plavac Malog
                        hervor, die zahlreiche Auszeichnungen gewonnen haben.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/Uzivajte u lokalnim vinima.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">
                        Lokale Weine</p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Die besten Orte für Unterhaltung auf Hvar:</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Hvar ist bei Prominenten und Liebhabern des
                        Nachtlebens beliebt und die ideale Insel für alle, die auf der Suche nach einem unvergesslichen
                        Nachtabenteuer sind und das beste Nachtleben erleben möchten, das Kroatien zu bieten hat.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Carpe Diem
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Nautica Bar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Hula Hula Bar
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
                    <h3 class="section-content-ostrvo-1__content__heading">Wo man auf Hvar essen kann: </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Dies sind nur einige der vielen Orte, an denen
                        Sie köstliches Essen genießen können.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Mizarola
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Apetti
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Divino
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
                    <h3 class="section-content-ostrvo-1__content__heading">Besuchen Sie die schönsten Strände auf Hvar :
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">Hvar ist dafür bekannt, dass es direkt an der
                        Küste einige der schönsten Strände Kroatiens hat.
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">Bei so viel Auswahl haben wir es auf unsere
                        Favoriten eingegrenzt!
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Pokonji dol
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Mekičevica-Strand
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Dubovica
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/Dubovica.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Dubovica</p>
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
                    <h3 class="section-content-ostrvo-1__content__heading">Die Altstadt</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Altstadt, eine der Perlen der Insel Hvar, verzaubert Besucher mit ihrer historischen Schönheit
                        und ihrem einzigartigen Charme. Dieser malerische Ort im Norden der Insel ist eine der ältesten
                        städtischen Siedlungen Europas mit historischen Wurzeln, die weit in die Vergangenheit reichen.
                        Eines der auffälligsten Merkmale der Altstadt ist ihre reiche Geschichte, die bis etwa 3.000 v. Chr.
                        zurückreicht. Die Stadt hat viele historische Ereignisse und Veränderungen erlebt, die sich in ihrer
                        Architektur und ihren Denkmälern widerspiegeln, die von den verschiedenen Epochen und Kulturen
                        zeugen, die diese Stadt geprägt haben. Abgesehen von ihrer historischen Bedeutung bezaubert die
                        Altstadt mit ihrer malerischen Natur und ihrer natürlichen Schönheit. Umgeben von einer üppigen
                        mediterranen Landschaft erstreckt sich die Stadt entlang einer wunderschönen Küste und bietet
                        spektakuläre Ausblicke auf die Adria. Bei einem Spaziergang durch die engen Steingassen entdecken
                        Sie versteckte Plätze, traditionelle Steinhäuser und malerische Gärten voller duftender mediterraner
                        Pflanzen. Besucher können die antiken Ruinen erkunden, Museen besuchen, die sich der lokalen
                        Geschichte und Kunst widmen, oder einfach die örtlichen Restaurants und Cafés genießen, die
                        authentische dalmatinische Spezialitäten anbiete.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image"
                            src="./assets/images/hvar/old town hvar.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Die Altstadt</p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/old town 2.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Die Altstadt</p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        1. Schlendern Sie durch die venezianischen Straßen
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Eine der besten Möglichkeiten, ein Reiseziel zu erleben, besteht darin, sich einfach darin zu
                        verlieren, und das gilt insbesondere in der Altstadt. Während es in den größeren Städten an jeder
                        Ecke überfüllt ist, ist die Altstadt bezaubernd leer, sodass Sie alle ihre Geheimnisse ungestört
                        erkunden können. Die venezianischen Straßen der Altstadt sind im Vergleich zu Städten wie Split und
                        Dubrovnik viel kleiner, was bedeutet, dass Sie an einem Tag durch das gesamte Straßennetz laufen
                        können, in dem die Zeit stehen geblieben ist. An jeder Ecke erwartet Sie etwas Neues: von
                        malerischen Cafés über alte Arkaden bis hin zu wunderbaren Restaurants, was Ihre Neugier nur noch
                        steigert!
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        2. Genießen Sie das Riva Stari Grad
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Palmas Uferpromenaden haben einen romantischen Reiz, egal ob Sie an jahrhundertealten venezianischen
                        Gebäuden vorbeischlendern oder in einem Restaurant unter freiem Himmel entspannen und den
                        Einheimischen beim Zeitvertreib zusehen. Erleben Sie den sanften und langsamen Lebensstil der Riva
                        in dieser Altstadt und nehmen Sie sich die Zeit, so viele schöne Sehenswürdigkeiten wie möglich
                        einzufangen.
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        3. Besuchen Sie das Altstadtmuseum
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Angesichts der Geschichte der Altstadt ist ein Museum, das ihre reiche Vergangenheit darstellt, eine
                        Selbstverständlichkeit. Entdecken Sie alle Wunder und Artefakte der Geschichte der Altstadt im
                        Schatz selbst – das Museum befindet sich in einem Neorenaissance-Palast aus dem 19. Jahrhundert, dem
                        ehemaligen Wohnhaus der Bianchini-Brüder aus dem Jahr 1896!

                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        4. Gehen Sie zum Glavica-Hügel
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Es ist ein relativ einfacher Aufstieg, der nach oben hin etwas schmaler wird. Passend zum
                        kroatischen Gelände wird die Wanderung von dichten Kiefern an den Rändern begleitet, die an
                        tropischen Sommertagen Schatten spenden. Ein zwanzigminütiger Spaziergang eröffnet Ihnen einen
                        Panoramablick auf die Altstadt und vielleicht erhaschen Sie sogar einen Blick auf die Nachbarstädte.
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        5. Probieren Sie das Lavendeleis
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Auf einer Insel, die reich an natürlichen Blumen ist – sogar zu einem Fest – ist Lavendeleis eine
                        ungewöhnliche lokale Delikatesse, die man unbedingt probieren muss. Ein altes Sprichwort besagt:
                        „Eine Rose ist der Duft des Herzens, Lavendel ist der Duft der Seele“ – was gibt es Schöneres für
                        die Seele, als Eis zu genießen!
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/4.jpg" />
                    </div>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Die besten Bars in der Altstadt:

                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Hvar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Lampedusa Bar
                    </p>

                    <h3 class="section-content-ostrvo-1__content__heading">
                        Wo man in der Altstadt essen kann:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Jurin podrum
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Antika
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Konoba Batana
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Kod Barba Luke
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Besuchen Sie die schönsten Strände in der Altstadt :

                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Plaža Banj
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Maslinička uvala
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Plaža Oslič
                    </p>
                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Jelsa</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        An der Nordküste der Insel Hvar liegt Jelsa, eine kleine Hafenstadt am Ufer einer malerischen Bucht.
                        Jelsa ist eine friedliche Stadt voller fantastischer Badestellen, gemütlicher Straßen und
                        beeindruckender Plätze. Von Jelsa aus können Sie die beiden höchsten Gipfel dieser Insel, Sveti
                        Nikola und Hum, sehen und die wichtigsten prähistorischen Stätte an der Adria, die Grapčeva-Höhle,
                        entdecken. Jelsa ist auch für seine wunderschönen Strände und die malerische Umgebung bekannt. Der
                        Besuch von Stränden wie Mina, Grebišće oder Stinivo ist ein unvergessliches Erlebnis, während die
                        umliegenden Landschaften voller Grün und Weinberge spektakuläre Ausblicke bieten. Darüber hinaus ist
                        Jelsa für seine Weinberge und Weingüter bekannt und ein Besuch lokaler Weingüter wie Tomić und
                        Plančić bietet die Möglichkeit, erstklassige Weine zu probieren. Für Liebhaber eines aktiven Urlaubs
                        bietet Jelsa zahlreiche Möglichkeiten, darunter Wandern auf den nahe gelegenen Hügeln, Radfahren
                        durch die wunderschöne Natur der Insel und verschiedene Wasseraktivitäten.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/jelsa.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Jelsa</p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Wo man in Jelsa essen kann:
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Kokot
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Stari Mlin
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Restoran Me and Mrs. Jones
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">

                        Die besten Bars in Jelsa:

                    </h3>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba Ribar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Jazz Bar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Konoba Bonaca
                    </p>


                </article>
                <article class="section-content-ostrvo-1__content__article">
                    <h3 class="section-content-ostrvo-1__content__heading">Vrboska</h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        Die Stadt Vrboska auf der Insel Hvar ist ein einzigartiges Reiseziel, das Besucher mit seiner
                        Schönheit und seinem Charme begeistert. Sie gilt als eine der kleinsten Städte der Insel, ist aber
                        voller reicher Geschichte, wunderschöner Natur und einer Vielzahl von Aktivitäten für jeden
                        Geschmack. Eines der beeindruckendsten Merkmale von Vrboska ist seine malerische Lage in einer
                        geschützten Bucht, die ihn zu einem der sichersten Häfen an der Adria macht. Bei einem Spaziergang
                        durch die Stadt kommen wunderschöne Steinbrücken zum Vorschein, die den Kanal überqueren und die
                        Stadt mit der Insel in der Mitte der Bucht verbinden. Darüber hinaus tragen faszinierende Fassaden
                        und eine Wehrkirche zum Charme von Vrboska bei. Was die Aktivitäten angeht, bietet Vrboska für jeden
                        etwas. Naturliebhaber können die nahe gelegenen Wander- oder Wanderwege erkunden, während Abenteurer
                        verschiedenen Wassersportarten wie Tauchen, Segeln oder Kajakfahren nachgehen. Wer sich für
                        kulturelle Aktivitäten interessiert, kann die örtlichen Museen, Galerien und Kirchen besuchen, um
                        mehr über die reiche Geschichte und Kultur der Stadt zu erfahren. Vrboska bietet mehrere schöne Orte
                        zum Schwimmen und Entspannen. Zu den berühmtesten Stränden gehören Soline, Maslinica und Česminica,
                        die für ihr kristallklares Wasser und ihre friedliche Umgebung bekannt sind.
                    </p>
                    <div class="section-content-ostrvo-1__content__images">
                        <img class="section-content-ostrvo-1__content__image" src="./assets/images/hvar/vrboska.jpg" />
                    </div>
                    <p class="section-content-ostrvo-1__desc">Vrboska</p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Besuchen Sie einige der Bars in Vrboska
                    </h3>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Nautica Bar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Sidro
                    </p>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Beach Bar Bacchus
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Konoba Vina Hvar
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 5. Pizzeria Antonio
                    </p>
                    <h3 class="section-content-ostrvo-1__content__heading">
                        Wo man in Vrboska essen kann:

                    </h3>

                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 1. Konoba kod None
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 2. Konoba Duga
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 3. Konoba Kogo
                    </p>
                    <p class="section-content-ostrvo-1__content__paragraph">
                        &nbsp &nbsp &nbsp 4. Konoba Vrtlic
                    </p>
                </article>
                <div class="section-gallery__gallery">
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/hvar/1.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/hvar/4.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/hvar/5.jpg" />
                        </div>
                    </div>
                    <div class="section-gallery__gallery__column">
                        <div class="section-gallery__gallery__row-large">
                            <img class="section-gallery__gallery__image" src="./assets/images/hvar/6.jpg" />
                        </div>
                        <div class="section-gallery__gallery__row">
                            <img class="section-gallery__gallery__image-2" src="./assets/images/hvar/7.jpg" />
                            <img class="section-gallery__gallery__image-2" src="./assets/images/hvar/8.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php require 'footer.php' ?>
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