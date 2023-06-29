<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/contactPage.css">
    <link rel="stylesheet" href="css/valeur.css">
    <link rel="stylesheet" href="css/formation.css">
    <script src="js/lightbox.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/countrySelect.css">
    <script src="js/countrySelect.js"></script>
    
    <title>Formation</title>
</head>
<body>
    <div id="gridFormation">
<!--include menu-->
<nav>
    <?php
    include "../view/public_view/src/menu.php";
    ?>
</nav>

    <?php
    include_once "../view/public_view/src/lightbox.php"
    ?>

            <div id="formationBloc">
                    <h1>Nos Formations</h1>
                    <h3>SLOGAN en long</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, illo?</p>
            <div id="positionFormation">
                <div class="carteFormation">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Formations</h1>
                </div>
                <div class="carteFormation">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Formations</h1>
                </div>
                <div class="carteFormation">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Formations</h1>
                </div>
                <div class="carteFormation">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Formations</h1>
                </div>
                <div class="carteFormation">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Formations</h1>
                </div>
                <div class="carteFormation">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Formations</h1>
                </div>
                <div class="carteFormation">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Formations</h1>
                </div>
                <div class="carteFormation">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Formations</h1>
                </div>
                <div class="carteFormation">
                    <img src="img/pexels-jack-redgate-2929227.jpg" alt="">
                    <h1>Formations</h1>
                </div>
            </div>
            </div>

    <!-- INCLUDE DU CONTACT DANS LA PAGE -->
    <?php
    include_once "../view/public_view/src/contactPage.php";
    ?>

<!--script langue-->
<script>
    $("#country_selector").countrySelect({
        defaultCountry: "fr",
        onlyCountries: ['gb', 'fr', 'nl', 'sa'],
        preferredCountries: [],
        localizedCountries:{'gb': 'EN', 'fr': 'FR', 'nl': 'NL', 'sa': 'AR'}
    });
</script>

<!-- INCLUDE DES VALEURS -->
<?php
    include_once "../view/public_view/src/valeur.php";
    ?>
<footer>
    <!-- INCLUDE DU FOOTER -->
    <?php
    include_once '../view/public_view/src/FR/footerFR.php';
    ?>
</footer>
</div>
</body>
</html>