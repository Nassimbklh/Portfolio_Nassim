<?php
require_once('mail.php');
require_once('common.php');

if (isset($_POST["email"])) {
    send_mail(
        $subject = "Portfolio Message",
        $body = replace_vars(file_get_contents('mail/request.html'), [
            "name" => $_POST["name"],
            "text" => $_POST["txt"],
            "tel" => $_POST["tel"],
            "email" => $_POST["email"]
        ])
    );
} else {
    $_SESSION["ERROR"] = "un problème est survenus veuillez réessayer ultérieurement";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio BTS SIO SLAM | Barkallah Nassim</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/icon1.png" width=100%>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/BTS.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/photo-move.css" />

</head>

<body id="page-top">
    <!-- Navigation-->
    <?php
    require_once("header.php");
    ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">BTS SIO</div>



        </div>
    </header>
    <!-- ======= me ======= -->
    <section class="page-section" id="BTS">
        <div class="container">
            <div>
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">BTS SIO</h2>
                    <h3 class="section-subheading text-muted">Brevet de Technicien Supérieur | Services Informatiques aux Organisations</h3>
                    <br>
                </div>
                <div><u> Le Brevet de Technicien Supérieur - Services Informatiques aux Organisations (BTS SIO)</u>,
                    s'adresse à ceux qui souhaitent se former en deux ans aux métiers d'administrateur réseau ou de développeur.
                    Pour par la suite intégré directement le marché du travail ou continuer des études,
                    dans le domaine de l'informatique.
                </div><br>
                <div class="Titre">Les options du BTS SIO :</div>
                <br>
                <div class="OPTION">
                    <div class="SISR">
                        <u>OPTION A: SISR</u>SOLUTIONS D'INFRASTRUCTURE, SYSTEMES ET RESEAUX

                        La spécialisation SISR forme des professionnels des réseaux et équipements informatiques
                        (installation, maintenance, sécurité). Cela signifie intervenir sur la conception, la mise en place, le déploiement,
                        la maintenance et le maintien de sa sécurité.
                    </div>
                    <div class="SLAM">
                        <u>OPTION B: SLAM</u>SOLUTIONS LOGICIELLES ET APPLICATIONS METIERS

                        La spécialisation SLAM est plus orientée développement.
                        Elle forme des professionnels au développement d'applications,
                        (sites web, applications mobiles, logiciels) et à la rédaction de
                        documentations techniques liées à celles-ci.
                    </div>
                </div>
                <br>
                <div class="Titre">Examen du BTS S.I.O :</div>
                <div class="examBTS"><img src="assets/img/BTSSIO.png" alt="examinBtsSio"><br>*précédé d’un temps de préparation
                </div>
                <div class="Titre">Les débouchés du BTS S.I.O :</div>
                <div class="OPTION">
                    <div class="SISR">
                        <u>OPTION A: SISR</u><br>SOLUTIONS D'INFRASTRUCTURE, SYSTEMES ET RESEAUX<br>


                        - Administrateur(trice) système, réseau et sécurité<br>
                        - Administrateur(trice) systèmes, réseaux et bases de données<br>
                        - Chef(fe) de projet logiciel et réseau<br>
                        - Concepteur de systèmes d'information<br>
                        - Responsable en ingénierie systèmes et réseaux<br>
                        - Licence pro mention métiers de l'informatique : administration et sécurité des systèmes et des réseaux<br>
                        - Licence pro mention métiers des réseaux informatiques et télécommunications<br>
                        - Classe préparatoire ingénierie industrielle<br>
                    </div>
                    <div class="SLAM">
                        <u>OPTION B: SLAM</u><br>SOLUTIONS LOGICIELLES ET APPLICATIONS METIERS<br>

                        - Chef de projet web et stratégie digitale<br>
                        - Concepteur développeur web<br>
                        - Développeur de solutions mobiles et connectée<br>
                        - Responsable en ingénierie des logiciels<br>
                        - Licence pro mention métiers de l'informatique : applications web<br>
                        - Licence pro mention métiers de l'informatique : conception, développement et test de logiciels<br>
                        - Classe préparatoire ingénierie industrielle<br>
                        - Concepteur développeur d'applications<br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php
    require_once("footer.php");
    ?>
    <!-- Portfolio Modals-->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="js/title.js"></script>
    <script type="text/javascript" src="mail/contact_me.js"></script>
    <script type="text/javascript" src="mail/jqBootstrapValidation.js"></script>
</body>
<script type="text/javascript" src="js/photo-move.js"></script>

</html>