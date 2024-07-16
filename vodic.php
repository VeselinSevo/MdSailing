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
        <title>MD Sailing - Vodič</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Ovde je objašnjen proces bukiranja plovila, kako odabrati plovilo, kao i mnoge druge korisne informacije." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>






        <section class="section-hero section-hero-mini section-hero-vodic">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"> VODIČ </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">Ovde
                    je objašnjen proces bukiranja plovila, kako odabrati plovilo, kao i mnoge druge korisne informacije.</p>
            </div>
        </section>
        <section class="section-content">
            <ul class="section-content__navigation">
                <div class="section-content__group">
                    <li class="section-content__navigation__item section-content__navigation__item__selected"
                        id="navigation-link-1">
                        <button class="section-content__navigation__button" id="link-1">
                            <p class="section-content__navigation__text">Kako bukirati brod</p>
                        </button>
                    </li>
                    <li class="section-content__navigation__item" id="navigation-link-2">
                        <button class="section-content__navigation__button" id="link-2">
                            <p class="section-content__navigation__text">Odabir plovila</p>
                        </button>
                    </li>
                </div>
                <div class="section-content__group">
                    <li class="section-content__navigation__item" id="navigation-link-3">
                        <button class="section-content__navigation__button" id="link-3">
                            <p class="section-content__navigation__text">Sve o jedrenju</p>
                        </button>
                    </li>
                    <li class="section-content__navigation__item" id="navigation-link-4">
                        <button class="section-content__navigation__button" id="link-4">
                            <p class="section-content__navigation__text">Skiper / Kapetan</p>
                        </button>
                    </li>
                    <li class="section-content__navigation__item" id="navigation-link-5">
                        <button class="section-content__navigation__button" id="link-5">
                            <p class="section-content__navigation__text">Agent za najam plovila</p>
                        </button>
                    </li>
                </div>
            </ul>
            <hr class="section-content__seperator">
            <div class="section-content__blog section-content__blog__show" id="blog-1">
                <h2 class="section-content__blog__heading">Kako bukirati brod</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Online upit:</h3>
                        <p class="section-content__blog__section__paragraph">Na našem sajtu pronadjite savršen brod za vaše
                            putovanje.
                            Nakon odabira, ispunite jednostavnu kontakt formu kako biste zatražili službenu ponudu.
                            Očekujte da Vam ponuda stigne putem e-maila u roku od nekoliko minuta.</p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Čim ste spremni, potvrdite svoju rezervaciju
                            putem e-maila ili telefona.
                        </p>
                        <!-- <p class="section-content__blog__section__paragraph" >
                        Imajte na umu: Plaćanje treba izvršiti najkasnije mesec dana pre početka putovanja kako biste osigurali svoje mesto na brodu.
                    </p> -->
                    </div>
                    <a class="CTA CTA__secondary CTA__small" href="/#sailing-form">Rezerviši plovilo
                        <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg">
                    </a>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">E-mail upit:</h3>
                        <p class="section-content__blog__section__paragraph">Pošaljite detalje o datumima putovanja, broju
                            kabina/osoba i željenom mestu polaska.
                            Očekujte brz i kompletan odgovor sa našom ponudom, koja odgovara vašim zahtevima putovanja. </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Kada ste spremni, potvrdite rezervaciju putem
                            e-maila ili telefona.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Imajte na umu: Plaćanje treba izvršiti najkasnije mesec dana pre početka putovanja kako biste
                            osigurali svoje mesto na brodu i spremno dočekali vaše avanture na moru.
                        </p>
                    </div>
                </article>
                <a class="CTA CTA__secondary CTA__small" href="/o-nama">Pošaljite poruku
                    <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg">
                </a>

                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Potvrda i kraj procesa:</h3>
                        <p class="section-content__blog__section__paragraph">
                            Nakon detaljne obrade svih potrebnih podataka i potvrde o izvršenoj uplati, želimo Vas
                            obavestiti da ćemo Vam poslati važne informacije putem e-maila:
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Vaučer: Ovaj dokument je od suštinske važnosti za preuzimanje plovila. Molimo Vas da ga sačuvate
                            i obavezno ponesete sa sobom prilikom putovanja.
                            <br>
                            <br>
                            Informacije o bazi: Dobićete sve potrebne informacije o marini gde ćete preuzeti plovilo, kao i
                            kontakt osobe koja će biti na raspolaganju za sva dodatna pitanja ili eventualne nejasnoće.
                        </p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/vodic-image-10.jpg" />
                </div>
            </div>
            <div class="section-content__blog" id="blog-2">
                <h2 class="section-content__blog__heading">Odabir plovila</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph"><span
                                class="section-content__blog__section__span">Jedrilice i katamarani su dva popularna tipa
                                plovila koja se koriste za plovidbu morima.</p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Iako oboje koriste vetar kao glavni izvor energije za kretanje, postoje značajne razlike između
                            ova dva tipa brodova, uključujući dizajn, stabilnost, brzinu i namenu.
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Jedrilica:</h3>
                        <p class="section-content__blog__section__paragraph">Jedrilica je tradicionalni tip plovila koji se
                            sastoji od jednog trupa, sa jednim ili više jarbola i jedrom ili više jedara.
                            Ova jedrilica može biti monohul ili može imati nekoliko trupova, ali u svakom slučaju, dizajn je
                            sličan po tome što postoji jedan glavni trup.
                            Jedrilice su često korišćene u takmičenjima, za rekreativno jedrenje ili za dugotrajna
                            putovanja.
                            Imaju tendenciju da budu okretnije i mogu biti brže od katamarana u određenim uslovima vetra.
                        </p>
                    </div>
                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image" src="./assets/images/vodic-image-12.jpg" />
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Katamaran:</h3>
                        <p class="section-content__blog__section__paragraph">Sa druge strane, katamaran je plovilo koje se
                            sastoji od dva paralelna trupa spojena mostom ili platformom.
                            Ovaj dizajn pruža veću stabilnost i veći kapacitet za teret ili putnike u poređenju sa
                            tradicionalnim jedrilicama.
                            Katamarani imaju manje duboke kobilice od jedrilica, što im omogućava plovidbu u plićim vodama.
                            Takođe, zbog svog šireg trupa, katamarani imaju veći unutrašnji prostor, što ih čini popularnim
                            izborom za krstarenja ili luksuzna putovanja.</p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Konačno, namena plovidbe može biti presudan
                            faktor prilikom odabira između jedrilica i katamarana.
                            Dok su jedrilice često više usmerene na sportsko jedrenje ili dugotrajna putovanja, katamarani
                            su često korišćeni za komercijalne svrhe poput kruzinga, iznajmljivanja, ili kao privatne jahte
                            zbog svoje veće stabilnosti i unutrašnjeg prostora.</p>
                    </div>
                    <br>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Ukratko, dok jedrilica predstavlja <span
                                class="section-content__blog__section__span">klasičan i agilan tip plovila pogodan za manji
                                broj ljudi, ali i duža putovanja</span>, katamaran nudi <span
                                class="section-content__blog__section__span">veću stabilnost, prostor i brzinu</span>,
                            čineći ih popularnim izborom za različite svrhe, uključujući luksuzna putovanja i komercijalnu
                            upotrebu.</p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/vodic-image-11.jpg" />
                </div>
            </div>
            <div class="section-content__blog" id="blog-3">
                <h2 class="section-content__blog__heading">Sve o jedrenju</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph"><span
                                class="section-content__blog__section__span">Jedrenje ima dugu i bogatu istoriju</span> koja
                            seže unazad hiljadama godina.
                            Prve poznate upotrebe jedara na plovilima datiraju iz drevnog Egipta i Mesopotamije, a kroz
                            istoriju, jedrenje je imalo ključnu ulogu u trgovini, istraživanju i vojnim operacijama.
                            Razvoj tehnologije i dizajna brodova tokom vremena doveo je do raznolikosti u vrstama plovila i
                            stilovima jedrenja, od tradicionalnih jedrenjaka do modernih regatnih jedrilica.
                        </p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image" src="./assets/images/sveojedrenju/Sve o jedrenju.jpg" />
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Šta je jedrenje?</h3>
                        <p class="section-content__blog__section__paragraph">Jedrenje je višedimenzionalno iskustvo koje
                            spaja ljude sa vodom, vetrom i prirodom na jedinstven način.
                            Osim što je sport, predstavlja i umetnost upravljanja brodom, istraživanja nepreglednih vodenih
                            prostranstava i životnog stila koji oblikuje karakter pojedinca. </p>
                    </div>
                    <!-- <div class="section-content__blog__section" >
                    <ul class="section-content__blog__section__list" >
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Za otkaz do mesec dana pre početka najma naplaćuje se iznos koji je jednak uplaćenoj akontaciji (30% – 50%) ukupne cene najma, odnosno zadržava se celokupni uplaćeni iznos.</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Za otkaz unutar jednog meseca pre početka najma naplaćuje se 100% ukupne cene najma.</p>
                        </li>
                    </ul>
                </div> -->
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph"> U suštini, jedrenje se može opisati kao
                            korišćenje vetra za kretanje broda, koristeći se jedrima kao glavnim izvorom snage.
                            Postoji mnogo različitih vrsta jedrenja, od rekreativnog krstarenja do takmičarskih regata.
                            Krstarenje obično podrazumeva opušteno putovanje po vodi sa ciljem istraživanja različitih
                            lokacija i uživanja u pejzažima i prirodnim lepotama.
                            Regatno jedrenje, s druge strane, uključuje takmičenja u kojima se brodovi trkaju jedan protiv
                            drugog u disciplinama poput brzinskog jedrenja, manevrisanja i taktičkog planiranja.
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph"><span
                                class="section-content__blog__section__span">Jedrenje pruža izvanredan osećaj slobode dok
                                plovite po otvorenom moru. </span>
                            Osećaj vetra u kosi i zvuk talasa pod kobilicom broda često se opisuje kao terapeutski i
                            oslobađajući.
                            Jedrilicom imate priliku da istražite predele koji su često nedostupni drugim sredstvima.
                            Mnoge skrivene uvale, plaže i obale mogu se istražiti samo pomoću plovila.
                        </p>
                        <p class="section-content__blog__section__paragraph"><span
                                class="section-content__blog__section__span">Jedrenje često zahteva timski rad i saradnju,
                                što ga čini odličnim izborom za porodična ili prijateljska putovanja. </span>
                            Rad u timu na plovilu može izgraditi snažne veze i povećati osećaj zajedništva.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            <span class="section-content__blog__section__span">Jedrilicom imate mogućnost da kreirate
                                sopstvenu rutu putovanja i prilagodite je svojim željama i potrebama.</span>
                            Možete istraživati različita mesta koliko god želite, bez strogih rasporeda.
                            Mnoge jedrilice danas su opremljene luksuzno i nude visok nivo udobnosti.
                            Sa modernim pogodnostima poput klimatizacije, kuhinje, udobnih kabina i kupatila, možete uživati
                            u luksuzu dok plovite.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Sve više putnika traži ovakav vid odmora kako bi doživeli spoj avanture, luksuza i bliskosti sa
                            prirodom.
                            Jedrenje može biti nezaboravno iskustvo koje ostavlja dubok utisak i koje se često pamti kao
                            jedno od najlepših putovanja u životu.
                        </p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/vodic-image-13.jpg" />
                </div>
            </div>
            <div class="section-content__blog" id="blog-4">
                <h2 class="section-content__blog__heading">Skiper / Kapetan</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Skiper ili kapetan koji upravlja brodom je
                            ključna figura na vašem morskom putovanju. Evo detaljnog opisa njegove uloge i odgovornosti:</p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Iskustvo i kvalifikacije:</h3>
                        <p class="section-content__blog__section__paragraph">Skiper je iskusni pomorac sa značajnim
                            iskustvom u vođenju jedrilica. Oni su obučeni i poseduju odgovarajuće kvalifikacije, uključujući
                            nautičke sertifikate i dozvole.</p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Navigacija:</h3>
                        <p class="section-content__blog__section__paragraph">Skiper je odgovoran za navigaciju i sigurnost
                            plovila. Oni su stručni u čitanju nautičkih karata, korišćenju navigacionih instrumenata i
                            praćenju vremenskih uslova radi osiguranja sigurnog putovanja.</p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Upravljanje plovilom:</h3>
                        <p class="section-content__blog__section__paragraph">Kapetan je odgovoran za upravljanje jedrilicom,
                            što uključuje kormilarenje, upravljanje motorom (ako je primenljivo) i manipulaciju jedrima radi
                            postizanja odgovarajuće brzine i kursa.</p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Bezbednost putnika:</h3>
                        <p class="section-content__blog__section__paragraph">Bezbednost putnika je najviši prioritet
                            skipera. Oni su obučeni za reagovanje u hitnim situacijama, pružanje prve pomoći i osiguranje da
                            se pridržavaju propisa o bezbednosti na moru.</p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Komunikacija:</h3>
                        <p class="section-content__blog__section__paragraph">Dobri skiperi su takođe dobri komunikatori. Oni
                            su ljubazni i otvoreni za pitanja i zahteve putnika, pružajući im informacije i savete kako bi
                            njihovo iskustvo bilo što prijatnije.</p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Održavanje plovila:</h3>
                        <p class="section-content__blog__section__paragraph">Skiper je odgovoran za održavanje plovila tokom
                            putovanja. Oni će proveriti motor, opremu i sistem za upravljanje kako bi osigurali da sve
                            funkcioniše ispravno.</p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Ukratko, skiper je ključna figura na jedrilici,
                            kombinujući veštine navigacije, upravljanja plovilom, bezbednosti putnika i vođenja putovanja
                            kako bi osigurao nezaboravno iskustvo na moru.</p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/skipper.jpg" />
                </div>
            </div>
            <div class="section-content__blog" id="blog-5">
                <h2 class="section-content__blog__heading">Agent za najam plovila</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Mi smo agencija za najam brodova koja
                            predstavlja ključnog posrednika između vlasnika plovila i klijenata koji žele da iznajme brod za
                            različite svrhe, kao što su odmor, rekreacija, poslovna putovanja ili specijalni događaji poput
                            venčanja ili rođendanskih proslava.</p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">MD Sailing pruža širok spektar usluga koje
                            olakšavaju proces iznajmljivanja broda i omogućavaju klijentima da pronađu savršeno plovilo koje
                            odgovara njihovim potrebama i preferencijama.</p>
                    </div>
                </article>
                <a class="CTA CTA__secondary CTA__small" href="o-nama">Kontaktirajte Nas
                    <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg">
                </a>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Inventar plovila</h3>
                        <p class="section-content__blog__section__paragraph">Naša agencija ima veliki inventar plovila
                            različitih veličina, tipova i karakteristika. To može uključivati jahte, jedrilice, katamarane,
                            glisere i druge vrste brodova. Ovi brodovi mogu biti dostupni za kratkoročni ili dugoročni
                            najam, u zavisnosti od potreba klijenata.
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Rezervacije plovila</h3>
                        <p class="section-content__blog__section__paragraph">Naša agencija za najam olakšava proces
                            rezervacije plovila tako što pomaže klijentima da pronađu odgovarajući brod u željenom terminu i
                            na željenoj lokaciji.
                            Takođe pružamo informacije o uslovima najma, ceni, depozitu i drugim detaljima vezanim za
                            iznajmljivanje.
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Angažovanje skipera i organizovane aktivnosti
                        </h3>
                        <p class="section-content__blog__section__paragraph">Pored iznajmljivanja plovila, pružamo dodatne
                            usluge koje mogu obuhvatiti angažovanje skipera ili posade, organizaciju gastronomskih i vinskih
                            tura, transfer do i sa luke, kao i druge aktivnosti poput ronjenja, ribolova ili vožnje
                            skuterima na vodi.
                        </p>
                    </div>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Takođe pružamo kontinuiranu podršku svojim
                            klijentima tokom celog procesa iznajmljivanja, od početnog upita do završetka putovanja.
                            To može uključivati pružanje informacija o destinacijama, savete o sigurnosti na moru, kao i
                            rešavanje bilo kakvih problema ili hitnih situacija koje se mogu pojaviti tokom putovanja.
                        </p>
                    </div>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">MD Sailing igra ključnu ulogu u olakšavanju i
                            unapređivanju iskustva iznajmljivanja plovila za klijente širom sveta.
                            Naša stručnost, resursi i posvećenost pružanju visokokvalitetnih usluga čine nas neprocenjivim
                            partnerima za sve koji žele da uživaju u jedinstvenom iskustvu plovidbe i istraživanju mora.
                        </p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/vodic-image-9.jpg" />
                </div>
                <!-- <form class="section-contact__content__form">
                <div class="section-form__input-section">
                    <p class="section-form__input-title">Ime i prezime</p>
                    <div class="section-form__input-body">
                        <input class="section-form__input" placeholder="Bogdan Bogdanovic" />
                    </div>
                    <p class="section-form__input-warning">Morate da upišete ime!</p>
                </div>
                <div class="section-form__input-section">
                    <p class="section-form__input-title">Email</p>
                    <div class="section-form__input-body">
                        <input class="section-form__input" placeholder="bogdanbogdanovic@gmail.com" />
                    </div>
                    <p class="section-form__input-warning">Morate da upišete email!</p>
                </div>
                <div class="section-form__input-section">
                    <p class="section-form__input-title">Telefon</p>
                    <div class="section-form__input-body">
                        <input class="section-form__input" placeholder="063-456-7890" />
                    </div>
                    <p class="section-form__input-warning">Morate da upišete telefon!</p>
                </div>
                <div class="section-form__input-section">
                    <p class="section-form__input-title">Poruka</p>
                    <div class="section-form__input-body">
                        <textarea class="section-form__input" placeholder="Dodatne informacije" ></textarea>
                    </div>
                    <p class="section-form__input-warning">Morate da upišete poruku!</p>
                </div>
                <button type="submit" class="section-form__button" >
                    <a class="CTA CTA__small CTA__primary" >
                        Pošaljite poruku
                    </a>
                </button>
            </form> -->
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
        <title>MD Sailing – Leitfaden</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="description"
            content="Hier erfahren Sie, wie Sie ein Schiff buchen, wie Sie ein Schiff auswählen und erhalten viele weitere nützliche Informationen." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korcula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>



















        <section class="section-hero section-hero-mini section-hero-vodic">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"> LEITFADEN </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">Der
                    Prozess der Schiffsbuchung, die Auswahl eines Schiffes sowie viele andere nützliche Informationen werden
                    hier erklärt.</p>
            </div>
        </section>
        <section class="section-content">
            <ul class="section-content__navigation">
                <div class="section-content__group">
                    <li class="section-content__navigation__item section-content__navigation__item__selected"
                        id="navigation-link-1">
                        <button class="section-content__navigation__button" id="link-1">
                            <p class="section-content__navigation__text">Wie bucht man ein Schiff</p>
                        </button>
                    </li>
                    <li class="section-content__navigation__item" id="navigation-link-2">
                        <button class="section-content__navigation__button" id="link-2">
                            <p class="section-content__navigation__text">Auswahl eines Bootes</p>
                        </button>
                    </li>
                </div>
                <div class="section-content__group">
                    <li class="section-content__navigation__item" id="navigation-link-3">
                        <button class="section-content__navigation__button" id="link-3">
                            <p class="section-content__navigation__text">alles über Segeln</p>
                        </button>
                    </li>
                    <li class="section-content__navigation__item" id="navigation-link-4">
                        <button class="section-content__navigation__button" id="link-4">
                            <p class="section-content__navigation__text">Skipper / Kapitän</p>
                        </button>
                    </li>
                    <li class="section-content__navigation__item" id="navigation-link-5">
                        <button class="section-content__navigation__button" id="link-5">
                            <p class="section-content__navigation__text">Bootsvermieter</p>
                        </button>
                    </li>
                </div>
            </ul>
            <hr class="section-content__seperator">
            <div class="section-content__blog section-content__blog__show" id="blog-1">
                <h2 class="section-content__blog__heading">Wie bucht man ein Schiff</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Online-Anfrage:</h3>
                        <p class="section-content__blog__section__paragraph">Finden Sie auf unserer Website das perfekte
                            Boot für Ihre Reise. Nachdem Sie Ihre Auswahl getroffen haben, füllen Sie ein einfaches
                            Kontaktformular aus, um ein offizielles Angebot anzufordern. Erwarten Sie, dass Sie das Angebot
                            innerhalb weniger Minuten per E-Mail erhalten.</p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Sobald Sie bereit sind, bestätigen Sie Ihre
                            Reservierung per E-Mail oder Telefon.
                        </p>
                        <!-- <p class="section-content__blog__section__paragraph" >
                        Imajte na umu: Plaćanje treba izvršiti najkasnije mesec dana pre početka putovanja kako biste osigurali svoje mesto na brodu.
                    </p> -->
                    </div>
                    <a class="CTA CTA__secondary CTA__small" href="/#sailing-form"> Buchen Sie ein Schiff
                        <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg">
                    </a>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Anfrage per E-Mail:</h3>
                        <p class="section-content__blog__section__paragraph">Bitte senden Sie uns Ihre Reisedaten, die
                            Anzahl der Kabinen/Personen und den gewünschten Abfahrtsort mit. Erwarten Sie eine schnelle und
                            umfassende Antwort mit unserem Angebot, das Ihren Reiseanforderungen entspricht. . </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Wenn Sie bereit sind, bestätigen Sie Ihre
                            Reservierung per E-Mail oder Telefon.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Bitte beachten Sie: Die Zahlung sollte spätestens einen Monat vor Reiseantritt erfolgen, um
                            Ihren Platz an Bord zu sichern und für Ihre Abenteuer auf See gerüstet zu sein.
                        </p>
                    </div>
                </article>
                <a class="CTA CTA__secondary CTA__small" href="/o-nama">Buchen Sie ein Schiff
                    <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg">
                </a>

                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Bestätigung und Ende des Prozesses:</h3>
                        <p class="section-content__blog__section__paragraph">
                            Nach detaillierter Bearbeitung aller notwendigen Daten und Bestätigung der Zahlung möchten wir
                            Sie darüber informieren, dass wir Ihnen wichtige Informationen per E-Mail zusenden:
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Voucher: Dieses Dokument ist für die Übernahme des Schiffes unbedingt erforderlich. Bitte
                            bewahren Sie es auf und nehmen Sie es unbedingt mit auf Reisen.
                            <br>
                            <br>
                            Informationen zum Stützpunkt: Sie erhalten alle notwendigen Informationen über die Marina, in
                            der Sie das Schiff abholen, sowie den Ansprechpartner, der Ihnen für weitere Fragen oder
                            eventuelle Unklarheiten zur Verfügung steht.

                        </p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/vodic-image-10.jpg" />
                </div>
            </div>
            <div class="section-content__blog" id="blog-2">
                <h2 class="section-content__blog__heading">Auswahl des Schiffes
                </h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph"><span
                                class="section-content__blog__section__span">Segelboote und Katamarane sind zwei beliebte
                                Schiffstypen für die Seefahrt.</p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">
                            Obwohl beide Schiffstypen Wind als Hauptenergiequelle für den Antrieb nutzen, gibt es erhebliche
                            Unterschiede zwischen den beiden Schiffstypen, einschließlich Design, Stabilität,
                            Geschwindigkeit und Zweck.

                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Segelboot:</h3>
                        <p class="section-content__blog__section__paragraph">
                            Ein Segelboot ist ein traditioneller Schiffstyp, der aus einem einzigen Rumpf mit einem oder
                            mehreren Masten und einem oder mehreren Segeln besteht. Dieses Segelboot kann ein Einrumpfboot
                            sein oder mehrere Rümpfe haben, aber in beiden Fällen ist das Design ähnlich, da es einen
                            Hauptrumpf gibt. Segelboote werden häufig bei Wettbewerben, zum Freizeitsegeln oder für lange
                            Reisen eingesetzt. Sie sind tendenziell wendiger und können bei bestimmten Windverhältnissen
                            schneller sein als Katamarane.
                        </p>
                    </div>
                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image" src="./assets/images/vodic-image-12.jpg" />
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Katamaran:</h3>
                        <p class="section-content__blog__section__paragraph">Ein Katamaran hingegen ist ein Schiff, das aus
                            zwei parallelen Rümpfen besteht, die durch eine Brücke oder Plattform verbunden sind. Dieses
                            Design bietet im Vergleich zu herkömmlichen Segelbooten eine größere Stabilität und eine größere
                            Kapazität für Fracht oder Passagiere. Katamarane haben flachere Kiele als Segelboote, wodurch
                            sie in flacheren Gewässern segeln können. Aufgrund ihres breiteren Rumpfs verfügen Katamarane
                            außerdem über mehr Innenraum, was sie zu einer beliebten Wahl für Kreuzfahrten oder Luxusreisen
                            macht.
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Schließlich kann der Zweck des Segelns ein
                            entscheidender Faktor bei der Wahl zwischen Segelbooten und Katamaranen sein. Während Segelboote
                            oft eher auf Sportsegeln oder lange Reise ausgerichtet sind, werden Katamarane aufgrund ihrer
                            größeren Stabilität und des größeren Innenraums häufig für kommerzielle Zwecke wie Kreuzfahrten,
                            Charter oder als Privatyachten eingesetzt.
                        </p>
                    </div>
                    <br>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Kurz gesagt: Während ein Segelboot ein <span
                                class="section-content__blog__section__span">klassischer und wendiger Schiffstyp ist, der
                                sowohl für
                                kleinere Personenzahlen als auch für längere Reisen geeignet ist</span>, bietet ein
                            Katamaran<span class="section-content__blog__section__span"> mehr
                                Stabilität, Platz und Geschwindigkeit</span>,
                            was ihn zu einer beliebten Wahl für eine Vielzahl von
                            Zwecken, einschließlich Luxusreisen und kommerzielle Nutzung macht.</p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/vodic-image-11.jpg" />
                </div>
            </div>
            <div class="section-content__blog" id="blog-3">
                <h2 class="section-content__blog__heading">Alles über Segeln</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph"><span
                                class="section-content__blog__section__span">Das Segeln hat eine lange und reiche
                                Geschichte</span> , die Jahrtausende zurückreicht. Der erste bekannte Einsatz von Segeln auf
                            Schiffen geht auf das alte Ägypten und Mesopotamien zurück, und im Laufe der Geschichte spielte
                            die Segelfahrt eine Schlüsselrolle im Handel, bei der Erkundung und bei militärischen
                            Operationen. Die Entwicklung der Schiffstechnologie und des Schiffsdesigns hat im Laufe der Zeit
                            zu einer Vielfalt an Schiffstypen und Segelstilen geführt, von traditionellen Segelschiffen bis
                            hin zu modernen Regattasegelbooten.

                        </p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__images">
                        <img class="section-content__blog__image" src="./assets/images/sveojedrenju/Sve o jedrenju.jpg" />
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Was ist Segeln?
                        </h3>
                        <p class="section-content__blog__section__paragraph">Das Segeln ist ein mehrdimensionales Erlebnis,
                            das Menschen auf einzigartige Weise mit Wasser, Wind und Natur verbindet. Es ist nicht nur ein
                            Sport, sondern auch die Kunst, ein Schiff zu steuern, weite Wasserflächen zu erkunden und einen
                            Lebensstil zu führen, der den Charakter eines Menschen prägt.
                        </p>
                    </div>
                    <!-- <div class="section-content__blog__section" >
                    <ul class="section-content__blog__section__list" >
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Za otkaz do mesec dana pre početka najma naplaćuje se iznos koji je jednak uplaćenoj akontaciji (30% – 50%) ukupne cene najma, odnosno zadržava se celokupni uplaćeni iznos.</p>
                        </li>
                        <li class="section-content__blog__section__item" >
                            <p class="section-content__blog__section__paragraph" >Za otkaz unutar jednog meseca pre početka najma naplaćuje se 100% ukupne cene najma.</p>
                        </li>
                    </ul>
                </div> -->
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Im Wesentlichen kann man Segeln als die Nutzung
                            des Windes zum Antrieb eines Schiffes beschreiben, wobei die Segel als Hauptkraftquelle dienen.
                            Es gibt viele verschiedene Arten des Segelns, von Freizeitkreuzfahrten bis hin zu
                            Wettkampfregatten. Bei einer Kreuzfahrt handelt es sich in der Regel um eine entspannte Fahrt
                            auf dem Wasser mit dem Ziel, verschiedene Orte zu erkunden und die Landschaft und
                            Naturschönheiten zu genießen. Beim Regattasegeln hingegen handelt es sich um Wettbewerbe, bei
                            denen Boote in Disziplinen wie Speedsegeln, Manövrieren und taktische Planung gegeneinander
                            antreten.

                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph"><span
                                class="section-content__blog__section__span">Segeln vermittelt ein außergewöhnliches Gefühl
                                der Freiheit, </span>
                            wenn Sie auf dem offenen Meer navigieren. Das Gefühl des Windes in den Haaren und das Rauschen
                            der Wellen unter dem Kiel eines Schiffes wird oft als therapeutisch und befreiend beschrieben.
                            Mit einem Segelboot haben Sie die Möglichkeit, Gebiete zu erkunden, die auf anderen Wegen oft
                            unzugänglich sind. Viele versteckte Buchten, Strände und Küsten können nur mit dem Boot erkundet
                            werden.

                        </p>
                        <p class="section-content__blog__section__paragraph"><span
                                class="section-content__blog__section__span">Segeln erfordert oft Teamarbeit und
                                Zusammenarbeit </span> und ist daher eine gute Wahl für Ausflüge mit der Familie oder mit
                            Freunden.
                            Die Arbeit als Team auf einem Schiff kann starke Bindungen aufbauen und das
                            Gemeinschaftsgefühl stärken.

                        </p>
                        <p class="section-content__blog__section__paragraph">
                            <span class="section-content__blog__section__span">Mit einem Segelboot haben Sie die
                                Möglichkeit, Ihre eigene Reiseroute zu erstellen und diese an Ihre Wünsche und Bedürfnisse
                                anzupassen.</span>
                            Sie können verschiedene Orte so oft erkunden, wie Sie möchten, ohne strenge Zeitpläne. Viele
                            Yachten sind heute luxuriös ausgestattet und bieten ein hohes Maß an Komfort. Mit modernen
                            Annehmlichkeiten wie Klimaanlage, Kombüse, komfortablen Kabinen und Badezimmern können Sie beim
                            Segeln Luxus genießen.
                        </p>
                        <p class="section-content__blog__section__paragraph">
                            Immer mehr Reisende suchen nach dieser Art von Urlaub, um eine Kombination aus Abenteuer, Luxus
                            und Naturnähe zu erleben. Segeln kann ein unvergessliches Erlebnis sein, das einen tiefen
                            Eindruck hinterlässt und oft als eine der schönsten Reisen Ihres Lebens in Erinnerung bleibt.

                        </p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/vodic-image-13.jpg" />
                </div>
            </div>
            <div class="section-content__blog" id="blog-4">
                <h2 class="section-content__blog__heading">Skipper / Kapitän</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Der Skipper oder Kapitän, der das Schiff
                            steuert, ist eine Schlüsselfigur auf Ihrer Seereise. Hier finden Sie eine detaillierte
                            Beschreibung seiner Rolle und Verantwortlichkeiten:</p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Erfahrung und Qualifikationen:</h3>
                        <p class="section-content__blog__section__paragraph">Der Skipper ist ein erfahrener Segler mit
                            umfangreicher Erfahrung im Segeln von Yachten. Sie sind ausgebildet und verfügen über
                            entsprechende Qualifikationen, einschließlich nautischer Zertifikate und Lizenzen.</p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Navigation:</h3>
                        <p class="section-content__blog__section__paragraph">Der Skipper oder Kapitän ist für die Navigation
                            und Sicherheit des Schiffes verantwortlich. Sie beherrschen das Lesen von Seekarten, den Umgang
                            mit Navigationsinstrumenten und die Überwachung der Wetterbedingungen, um eine sichere Reise zu
                            gewährleisten.</p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Schiffsverwaltung: </h3>
                        <p class="section-content__blog__section__paragraph">Der Skipper ist für die Steuerung des
                            Segelboots verantwortlich, einschließlich Steuerung, Motormanagement (falls zutreffend) und
                            Manipulation der Segel, um die richtige Geschwindigkeit und den richtigen Kurs zu erreichen.
                        </p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Sicherheit der Passagiere:</h3>
                        <p class="section-content__blog__section__paragraph">Die Sicherheit der Passagiere hat für den
                            Skipper höchste Priorität. Sie sind darin geschult, in Notsituationen zu reagieren, Erste Hilfe
                            zu leisten und die Einhaltung der Sicherheitsvorschriften für den Seeverkehr sicherzustellen.
                        </p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Kommunikation:</h3>
                        <p class="section-content__blog__section__paragraph">Gute Skipper sind auch gute Kommunikatoren. Sie
                            sind freundlich und offen für die Fragen und Wünsche der Passagiere und geben ihnen
                            Informationen und Ratschläge, um ihr Erlebnis so angenehm wie möglich zu gestalten.</p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Schiffswartung:</h3>
                        <p class="section-content__blog__section__paragraph">Der Skipper ist für die Wartung des Schiffes
                            während der Reise verantwortlich. Sie überprüfen den Motor, die Ausrüstung und das Lenksystem,
                            um sicherzustellen, dass alles ordnungsgemäß funktioniert.
                        </p>
                    </div>
                </article>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Kurz gesagt, der Skipper ist eine
                            Schlüsselfigur auf einer Yacht. Er vereint die Fähigkeiten der Navigation, der Schiffsführung,
                            der Sicherheit der Passagiere und des Reisemanagements, um ein unvergessliches Erlebnis auf See
                            zu gewährleisten.</p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/skipper.jpg" />
                </div>
            </div>
            <div class="section-content__blog" id="blog-5">
                <h2 class="section-content__blog__heading">Bootsvermieter</h2>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Wir sind eine Bootscharteragentur, die einen
                            wichtigen Vermittler zwischen Bootsbesitzern und Kunden darstellt, die ein Boot für verschiedene
                            Zwecke chartern möchten, beispielsweise für Urlaub, Freizeit, Geschäftsreisen oder besondere
                            Anlässe wie Hochzeiten oder Geburtstagsfeiern.</p>
                    </div>
                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">MD Sailing bietet eine breite Palette von
                            Dienstleistungen an, die den Bootscharterprozess erleichtern und es Kunden ermöglichen, das
                            perfekte Schiff zu finden, das ihren Bedürfnissen und Vorlieben entspricht.</p>
                    </div>
                </article>
                <a class="CTA CTA__secondary CTA__small" href="o-nama"> Kontaktieren Sie uns

                    <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg">
                </a>
                <article class="section-content__blog__article">
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Schiffsinventar</h3>
                        <p class="section-content__blog__section__paragraph">Unsere Agentur verfügt über einen großen
                            Bestand an Schiffen verschiedener Größen, Typen und Eigenschaften. Dazu können Yachten,
                            Segelboote, Katamarane, Schnellboote und andere Schiffstypen gehören. Diese Boote können je nach
                            Kundenwunsch für Kurzzeit- oder Langzeitcharter zur Verfügung stehen.
                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Schiffsreservierungen</h3>
                        <p class="section-content__blog__section__paragraph">Unsere Charteragentur erleichtert den Prozess
                            der Schiffsbuchung, indem sie Kunden dabei hilft, das richtige Schiff zum gewünschten Datum und
                            Ort zu finden. Wir informieren Sie auch über die Mietbedingungen, den Preis, die Kaution und
                            andere Details im Zusammenhang mit der Vermietung.


                        </p>
                    </div>
                    <div class="section-content__blog__section">
                        <h3 class="section-content__blog__section__heading">Mieten eines Skippers und organisierte
                            Aktivitäten
                        </h3>
                        <p class="section-content__blog__section__paragraph">Zusätzlich zum Bootsverleih bieten wir
                            zusätzliche Dienstleistungen an, welche die Anstellung eines Skippers oder einer Crew, die
                            Organisation von gastronomischen und Weintouren, den Transfer zum und vom Hafen sowie andere
                            Aktivitäten wie Tauchen, Angeln oder Wasserscooterfahren umfassen können.

                        </p>
                    </div>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">Darüber hinaus betreuen wir unsere Kunden
                            kontinuierlich während des gesamten Mietprozesses, von der ersten Anfrage bis zum Ende der
                            Reise. Dies kann die Bereitstellung von Informationen zu Reisezielen, Ratschläge zur Sicherheit
                            auf See sowie die Bewältigung etwaiger Probleme oder Notfälle während der Reise umfassen.

                        </p>
                    </div>

                    <div class="section-content__blog__section">
                        <p class="section-content__blog__section__paragraph">MD Sailing spielt eine Schlüsselrolle bei der
                            Erleichterung und Verbesserung des Yachtcharter-Erlebnisses für Kunden auf der ganzen Welt.
                            Unser Fachwissen, unsere Ressourcen und unser Engagement für die Bereitstellung hochwertiger
                            Dienstleistungen machen uns zu einem unschätzbar wertvollen Partner für alle, die ein
                            einzigartiges Segelerlebnis und die Erkundung des Meeres genießen möchten.
                        </p>
                    </div>
                </article>
                <div class="section-content__blog__images">
                    <img class="section-content__blog__image" src="./assets/images/vodic-image-9.jpg" />
                </div>
                <!-- <form class="section-contact__content__form">
                <div class="section-form__input-section">
                    <p class="section-form__input-title">Ime i prezime</p>
                    <div class="section-form__input-body">
                        <input class="section-form__input" placeholder="Bogdan Bogdanovic" />
                    </div>
                    <p class="section-form__input-warning">Morate da upišete ime!</p>
                </div>
                <div class="section-form__input-section">
                    <p class="section-form__input-title">Email</p>
                    <div class="section-form__input-body">
                        <input class="section-form__input" placeholder="bogdanbogdanovic@gmail.com" />
                    </div>
                    <p class="section-form__input-warning">Morate da upišete email!</p>
                </div>
                <div class="section-form__input-section">
                    <p class="section-form__input-title">Telefon</p>
                    <div class="section-form__input-body">
                        <input class="section-form__input" placeholder="063-456-7890" />
                    </div>
                    <p class="section-form__input-warning">Morate da upišete telefon!</p>
                </div>
                <div class="section-form__input-section">
                    <p class="section-form__input-title">Poruka</p>
                    <div class="section-form__input-body">
                        <textarea class="section-form__input" placeholder="Dodatne informacije" ></textarea>
                    </div>
                    <p class="section-form__input-warning">Morate da upišete poruku!</p>
                </div>
                <button type="submit" class="section-form__button" >
                    <a class="CTA CTA__small CTA__primary" >
                        Pošaljite poruku
                    </a>
                </button>
            </form> -->
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
<script src="./navigation.js">


</script>
<script src="./navigation-vodic.js">
</script>