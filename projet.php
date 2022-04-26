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
    <link rel="icon" type="image/x-icon" href="assets//img/icon1.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

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
            <div class="masthead-heading text-uppercase">PROJETS</div>



        </div>
    </header>

    <!-- PROJETS-->
    <section class="page-section" id="veille">
        <div class="container">

            <div class="container">
                <section class="page-section" id="portfolio">
                    <div class="container">
                        <div class="text-left">
                            <h2 class="section-heading text-uppercase">Projet d'école</h2>
                        </div>
                        <div class="projet1">
                            <div class=" text-center">
                                <!-- Portfolio item 1-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <img class="img-fluid" src="assets/img/portfolio/1.png" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">HARDWARE UNIT</div>
                                        <div class="portfolio-caption-subheading text-muted">site e-commerce</div>
                                    </div>
                                </div>
                            </div>
                            <div class=" text-center">
                                <!-- Portfolio item 1-->
                                <div class="portfolio-item">
                                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                        <div class="portfolio-hover">
                                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                        </div>
                                        <img class="img3" src="assets/img/salleDeMarché.png" alt="..." />
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="portfolio-caption-heading">AIR TANY</div>
                                        <div class="portfolio-caption-subheading text-muted">Salle de marché</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="text-left">
                            <h2 class="section-heading text-uppercase">Projet personnel</h2>
                        </div>
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/jeuDeRole.png" alt="jeux-de-role" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Jeux De Rôle</div>
                                <div class="portfolio-caption-subheading text-muted">Projet console</div>
                            </div>
                        </div>


                    </div>
            </div>
    </section>
    </div>

    </div>
    </section>

    <!-- Footer-->
    <?php
    require_once("footer.php");
    ?>
    <!-- Portfolio Modals-->

    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Hardware Unit</h2>
                                <p class="item-intro text-muted">Nassim Barkallah / Victor Jouin / Thomas Pereira de Barros</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.png" alt="..." />
                                <p>Pour le compte de notre client (Hardware Unit nous avons du mètre en place un site vitrine/e-commerce, lui permettent de présenter ses différentes marchandises au grand public.
                                    <br><br>
                                    les contraintes : <br><br>
                                    - L’objectif de ce Projet est de déployer rapidement des sites de ventes de produit particuliers
                                    <br>- Les usagers doivent s’identifier par un couple login/mot de passe pour bénéficier des fonctionnalités d’achat
                                    et de
                                    vente. Un utilisateur non connecté ne peut que parcourir la liste des articles disponible
                                    <br>- Les articles proposés à la vente sont stockés dans une base de données. Les usagers authentifiés peuvent
                                    ajouter de
                                    nouveaux articles à cette base de donné.
                                    <br>- A chaque article correspond une fiche contenant les informations détaillées de celui-ci.
                                    <br>- Lorsqu’un article est ajouté à la base de donné, il est possible de le mettre vente. Mais cette mise en vente
                                    doit
                                    être validée par un administrateur
                                    <br>- Un usager acheteur doit voir la liste des vendeurs pour un article et les prix demandés par chacun
                                    <br>- Une fonction de recherche doit permette aux usagers de localiser un article par son nom ou par des tags
                                    associés.
                                    <br>- Un système de back-office doit permettre aux sociétés clientes la gestion des comptes utilisateurs, des
                                    articles
                                    présents en base de données et de catégories d’articles.
                                    <br>- Un système de panier doit permettre aux usagers d’acheter plusieurs articles simultanément
                                    <br>- Un système de contact doit permettre l’envoi de mails de la part des usagers aux administrateurs du site.


                                </p>
                                <ul class="list-inline">
                                    <li>

                                        <strong>Client:</strong>
                                        Hardware Unit
                                    </li>
                                    <li>
                                        <strong>Categorie:</strong>
                                        e-commerce
                                    </li>
                                </ul>
                                <a href="assets/lien/doc_Hardware_Unit.pdf" download="NassimBarkallah_ProjetRole.pdf">
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        Documentation
                                    </button>
                                </a>
                                <br> <br>
                                <a href="assets/lien/BARKALLAH_Nassim Hardware_Unit E5.pdf" download="BARKALLAH-Nassim-Hardware-Unit-Realisation-professionel-E5-1.pdf">
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        Téléchargez la FICHE ANNEXE 7-1-A
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Jeux De Rôle</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/jeuDeRole.png" alt="..." />
                                <p>Le but de ce projet est d'en apprendre plus sur le c# et sur l'orienter objet avec la création de classe, la création de classe abstract ainsi que l'héritage. </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Categorie:</strong>
                                        Apprentisage personnel
                                    </li>
                                </ul>
                                <a href="assets/lien/Créer un jeu de rôle.pdf" download="NassimBarkallah_ProjetRole.pdf">
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        Documentation
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">AIR TANY</h2>
                                <p class="item-intro text-muted">Nassim Barkallah/ Thomas Leveille/ Atheo Martin/ Youssra Benzerroug</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/salleDeMarché.png" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                    deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                    repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Finish
                                    </li>
                                    <li>
                                        <strong>Categorie:</strong>
                                        Salle de marché
                                    </li>
                                </ul>
                                <a href="assets/lien/BARKALLAH_Nassim Air_Tany E5.pdf" download="BARKALLAH-Nassim-Air-Tany-Realisation-professionel-E5-2.pdf">
                                    <button class="btn btn-primary btn-xl text-uppercase" type="button">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        Téléchargez la FICHE ANNEXE 7-1-A
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                    deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                    repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Lines
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Branding
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                    deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                    repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Southwest
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet,
                                    consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos
                                    deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores
                                    repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Window
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Photography
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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