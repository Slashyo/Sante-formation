<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/countrySelect.css">
    <script src="js/countrySelect.js"></script>


    <title>Contact</title>
</head>

<body>
    <!--include menu-->
    <nav>
        <?php
        include "../view/public_view/src/menu.php";
        ?>

    </nav>
    <div class="container">
        <div class="pageContact">
            <div id="boxIntroContact">



                <h1>Contactez-nous</h1>
                <p>Une envie de nous envoyer un message ?</p>
                <p>Une question à nous poser ?</p>
                <p>Un problème rencontré lors de votre visite ?</p>
                <p>Veuillez utiliser ce formulaire pour prendre contact avec nous !</p>
                <p>Je me ferai un plaisir de vous répondre dans les plus brefs délais .</p>
            </div>
            <form action="" method="post" id="contactForm">
                <div class="boxLabelInputContact">
                    <label for="firstname">Prénom :</label>
                    <input type="text" id="firstname" name="firstname" placeholder="" required>
                </div>
                <div class="boxLabelInputContact">
                    <label for="lastname">Nom :</label>
                    <input type="text" id="lastname" name="lastname" placeholder="" required>
                </div>
                <div class="boxLabelInputContact">
                    <label for="mail">Mail :</label>
                    <input type="mail" id="email" name="mail" placeholder="" required>
                </div>
                <div class="boxLabelInputContact">
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div id="buttonContact">
                    <button type="submit">Envoyer mon message.</button>
                </div>
            </form>
        </div>
    </div>



    <!--script langue-->
    <script>
        $("#country_selector").countrySelect({
            defaultCountry: "fr",
            onlyCountries: ['gb', 'fr', 'nl', 'sa'],
            preferredCountries: [],
            localizedCountries:{'gb': 'EN', 'fr': 'FR', 'nl': 'NL', 'sa': 'AR'}
        });
    </script>
    <footer>
        <!-- INCLUDE DU FOOTER -->
        <?php
        include_once '../view/public_view/src/FR/footerFR.php';
        ?>
    </footer>
</body>

</html>