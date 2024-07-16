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
        <title>MD Sailing - Galerija</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <meta name="description" content="Zavirite u naše putne avanture i pustolovine kroz našu galeriju." />
        <meta name="keywords"
            content="Jedrenje, Jadran, Hrvatska, jedrilice, katamarani, more, plovila, katamaran, jedrilica, destinacije, hvar, korcula, vis, makarska, milna, lastovo, dubrovnik, brod, bukiranje, galerija, slike, putovanje">
        <link rel="manifest" href="/site.webmanifest">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header.php' ?>
        <section class="section-hero section-hero-mini section-hero-galerija">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"> Galerija </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Zavirite u naše putne avanture i pustolovine kroz našu galeriju. </p>
            </div>
        </section>
        <section class="section section-gallery-page" id="gallery-section-1">
            <div class="section-gallery-page__gallery">
                <div class="section-gallery-page__gallery__column">
                    <h2 class="section-gallery-page__heading">Slike sa tura</h2>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230604_201346.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image-3"
                            src="./assets/images/galerija/20230618_124436.jpg" />
                    </div>
                </div>
                <div class="section-gallery-page__gallery__column">
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230618_104039.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image-3"
                            src="./assets/images/galerija/20230924_184729.jpg" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-gallery-page" id="gallery-section-2">
            <div class="section-gallery-page__gallery">
                <div class="section-gallery-page__gallery__column">
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230608_102703.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230619_203843.jpg" />
                    </div>
                    <!-- <div class="section-gallery-page__gallery__row-section">
                    <div class="section-gallery-page__gallery__row-section__content" id="gallery-section-2-content">
                        <h3 class="section-gallery-page__gallery__row-section__heading" >Example Title</h3>
                        <p class="section-gallery-page__gallery__row-section__paragraph" >Example dummy text for a image card that contains info about the gallery section you are currently viewing and exploring</p>
                        <a class="CTA CTA__small CTA__secondary" >Saznaj više <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                    </div> 
                </div>-->
                </div>
                <div class="section-gallery-page__gallery__column">
                    <h2 class="section-gallery-page__heading" id="gallery-section-2-heading">Slike sa tura</h2>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230626_001102.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image-3"
                            src="./assets/images/galerija/20230627_175546.jpg" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-gallery-page" id="gallery-section-1">
            <div class="section-gallery-page__gallery">
                <div class="section-gallery-page__gallery__column">
                    <h2 class="section-gallery-page__heading">Slike sa tura</h2>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230619_192257.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image-3"
                            src="./assets/images/galerija//20230713_202018.jpg" />
                    </div>
                </div>
                <div class="section-gallery-page__gallery__column">
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230713_201706.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230719_173521.jpg" />
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
        <title>MD Sailing - Galerie </title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <meta name="description"
            content="Werfen Sie einen Blick auf unsere Reiseabenteuer und Abenteuer in unserer Galerie." />
        <meta name="keywords"
            content="Segeln, Adria, Kroatien, Segelboote, Katamarane, Meer, Schiffe, Katamaran, Segelboot, Reiseziele, Hvar, Korčula, Vis, Makarska, Milna, Lastovo, Dubrovnik, Schiff, Buchung, Galerie, Bilder, Reisen">
        <link rel="manifest" href="/site.webmanifest">
        <!-- Include JSON-LD markup -->
        <script type="application/ld+json" src="organization.json"></script>
    </head>

    <body>
        <?php require 'header-german.php' ?>
        <section class="section-hero section-hero-mini section-hero-galerija">
            <div class="section-hero__text">
                <h1 class="heading__h1 section-hero__text__heading"> Galerie </h1>
                <p class="paragraph__subheading-h1 paragraph__subheading-h1__lightmode section-hero__text__subheading">
                    Werfen Sie einen Blick auf unsere Reiseerlebnisse und Abenteuer in unserer Galerie. </p>
            </div>
        </section>
        <section class="section section-gallery-page" id="gallery-section-1">
            <div class="section-gallery-page__gallery">
                <div class="section-gallery-page__gallery__column">
                    <h2 class="section-gallery-page__heading">Bilder von Touren</h2>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230604_201346.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image-3"
                            src="./assets/images/galerija/20230618_124436.jpg" />
                    </div>
                </div>
                <div class="section-gallery-page__gallery__column">
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230618_104039.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image-3"
                            src="./assets/images/galerija/20230924_184729.jpg" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-gallery-page" id="gallery-section-2">
            <div class="section-gallery-page__gallery">
                <div class="section-gallery-page__gallery__column">
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230608_102703.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230619_203843.jpg" />
                    </div>
                    <!-- <div class="section-gallery-page__gallery__row-section">
                    <div class="section-gallery-page__gallery__row-section__content" id="gallery-section-2-content">
                        <h3 class="section-gallery-page__gallery__row-section__heading" >Example Title</h3>
                        <p class="section-gallery-page__gallery__row-section__paragraph" >Example dummy text for a image card that contains info about the gallery section you are currently viewing and exploring</p>
                        <a class="CTA CTA__small CTA__secondary" >Saznaj više <img class="CTA__icon" src="./assets/svgs/arrow-right-secondary.svg" /></a>
                    </div> 
                </div>-->
                </div>
                <div class="section-gallery-page__gallery__column">
                    <h2 class="section-gallery-page__heading" id="gallery-section-2-heading">Bilder von Touren</h2>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230626_001102.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image-3"
                            src="./assets/images/galerija/20230627_175546.jpg" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-gallery-page" id="gallery-section-1">
            <div class="section-gallery-page__gallery">
                <div class="section-gallery-page__gallery__column">
                    <h2 class="section-gallery-page__heading">Bilder von Touren</h2>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230619_192257.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image-3"
                            src="./assets/images/galerija//20230713_202018.jpg" />
                    </div>
                </div>
                <div class="section-gallery-page__gallery__column">
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230713_201706.jpg" />
                    </div>
                    <div class="section-gallery-page__gallery__row-large">
                        <img class="section-gallery-page__gallery__image"
                            src="./assets/images/galerija/20230719_173521.jpg" />
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