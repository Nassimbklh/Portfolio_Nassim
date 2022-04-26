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
            <div class="masthead-heading text-uppercase">Veille Technologique</div>



        </div>
    </header>
    <!-- About-->
    <section class="page-section" id="veille">
        <div class="container">

            <div class="row">

            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto ">
                    <div>
                        <h2 style="text-align:left;">- QU'EST-CE QUE LA VEILLE TECHNOLOGIQUE ?</h2>
                    </div>
                    <p class="large ">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;La veille technologique ou veille scientifique et technique consiste
                        à s’informer de façon systématique sur les techniques les plus récentes et surtout sur leur
                        mise à disposition commerciale (ce qui constitue la différence entre la technique et la technologie).
                        Cette activité met en œuvre des techniques d’acquisition, de stockage et d’analyse d’informations et leur
                        distribution automatique aux différentes sections concernées de l’entreprise, à la manière d’une revue de presse.
                        Ces informations peuvent concerner une matière première, un produit, un composant, un procédé, l’état de l’art et
                        l’évolution de l’environnement scientifique, technique, industriel ou commercial de l’entreprise.

                    </p><br>
                    <div>
                        <h2 style="text-align:left;">- SUJET DE LA VEILLE TECHNOLOGIQUE</h2>
                    </div>
                    <p class="large ">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Le thèmes sur lesquel j'ai fais ma veille technologique est : <br>
                        Git/ GitHub
                    </p><br>
                    <div>
                        <h2 style="text-align:left;">- Quel sont les moyens que j’utilise pour réaliser ma veille ?</h2>
                    </div>
                    <p class="large ">&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;En tant qu’étudiant en informatique, il m’est indispensable de me tenir informer sur les nouvelles actualités et technologies relatives à mon cœur de métier.
                    </p>
                </div>


                <!--
                <div id="sectTheme2" class="fond_vagues">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h2 class="display-4 titre_section titre_vagues">Thème 2 : La Réglementation des Données Personnelles (RGPD)</h2>
                            </div>

                            <div class="col-md-6">
                                <div class="card bs-card card_first_ppe cards_veille mlr-auto">
                                    <a href="https://www.nextinpact.com/news/108551-des-cameras-pietons-pour-surveillants-penitentiaires.htm" target="_blank"><img class="card-img-top" src="assets/imgs/logos_veille/Nex20200329203610.png" alt="Image Veille"></a>
                                    <div class="card-body no-padding-lr text-center">
                                        <h5 class="card-title">Des « caméras-piétons » pour les surveillants pénitentiaires</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Publié le 02 Janvier 2020</h6>
                                        <p class="card-text"></p>
                                        <a href="https://www.nextinpact.com/news/108551-des-cameras-pietons-pour-surveillants-penitentiaires.htm" class="btn btn-primary" target="_blank">Voir l'article</a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card bs-card card_first_ppe cards_veille mlr-auto">
                                    <a href="https://www.nextinpact.com/brief/cjue---une-videosurveillance-dans-un-immeuble-peut-se-passer-du-consentement-d-un-proprietaire-10671.htm" target="_blank"><img class="card-img-top" src="assets/imgs/logos_veille/Nex20200329203425.png" alt="Image Veille"></a>
                                    <div class="card-body no-padding-lr text-center">
                                        <h5 class="card-title">CJUE : une vidéosurveillance dans un immeuble peut se passer du consentement d’un propriétaire</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Publié le 13 Décembre 2019</h6>
                                        <p class="card-text"></p>
                                        <a href="https://www.nextinpact.com/brief/cjue---une-videosurveillance-dans-un-immeuble-peut-se-passer-du-consentement-d-un-proprietaire-10671.htm" class="btn btn-primary" target="_blank">Voir l'article</a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card bs-card card_first_ppe cards_veille mlr-auto">
                                    <a href="https://www.linformaticien.com/actualites/id/53475/rgpd-9-millions-d-euros-d-amendes-pour-1-1-telecom" target="_blank"><img class="card-img-top" src="assets/imgs/logos_veille/L1f20200329204446.png" alt="Image Veille"></a>
                                    <div class="card-body no-padding-lr text-center">
                                        <h5 class="card-title">RGPD : 9 millions d’euros d’amendes pour 1&amp;1 Telecom</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Publié le 13 Décembre 2019</h6>
                                        <p class="card-text"></p>
                                        <a href="https://www.linformaticien.com/actualites/id/53475/rgpd-9-millions-d-euros-d-amendes-pour-1-1-telecom" class="btn btn-primary" target="_blank">Voir l'article</a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card bs-card card_first_ppe cards_veille mlr-auto">
                                    <a href="https://www.lemondeinformatique.fr/actualites/lire-rgpd-amende-de-500-keteuro-pour-futura-internationale-77202.html" target="_blank"><img class="card-img-top" src="assets/imgs/logos_veille/lem20200329210219.png" alt="Image Veille"></a>
                                    <div class="card-body no-padding-lr text-center">
                                        <h5 class="card-title">RGPD : Amende de 500 K€ pour Futura Internationale</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Publié le 26 Novembre 2019</h6>
                                        <p class="card-text"></p>
                                        <a href="https://www.lemondeinformatique.fr/actualites/lire-rgpd-amende-de-500-keteuro-pour-futura-internationale-77202.html" class="btn btn-primary" target="_blank">Voir l'article</a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card bs-card card_first_ppe cards_veille mlr-auto">
                                    <a href="https://www.clubic.com/pro/legislation-loi-internet/donnees-personnelles/actualite-873658-utilisateurs-application-mercedes-voyaient-donnees-personnelles-proprietaires.html" target="_blank"><img class="card-img-top" src="assets/imgs/logos_veille/Clu20200329205824.png" alt="Image Veille"></a>
                                    <div class="card-body no-padding-lr text-center">
                                        <h5 class="card-title">Les utilisateurs de l'application Mercedes voyaient les données personnelles d'autres propriétaires</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Publié le 21 Octobre 2019</h6>
                                        <p class="card-text"></p>
                                        <a href="https://www.clubic.com/pro/legislation-loi-internet/donnees-personnelles/actualite-873658-utilisateurs-application-mercedes-voyaient-donnees-personnelles-proprietaires.html" class="btn btn-primary" target="_blank">Voir l'article</a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card bs-card card_first_ppe cards_veille mlr-auto">
                                    <a href="https://www.20minutes.fr/high-tech/2630315-20191017-donnees-personnelles-pourquoi-devriez-eteindre-enceinte-connectee-presence-invites" target="_blank"><img class="card-img-top" src="assets/imgs/logos_veille/20M20200329205233.png" alt="Image Veille"></a>
                                    <div class="card-body no-padding-lr text-center">
                                        <h5 class="card-title">Données personnelles: Pourquoi devriez-vous éteindre votre enceinte connectée en présence d'invités ?</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Publié le 17 Octobre 2019</h6>
                                        <p class="card-text"></p>
                                        <a href="https://www.20minutes.fr/high-tech/2630315-20191017-donnees-personnelles-pourquoi-devriez-eteindre-enceinte-connectee-presence-invites" class="btn btn-primary" target="_blank">Voir l'article</a>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <img class="vagues padding-top-10" src="assets/imgs/svg/vague_bas.svg" alt="Vague bas blanche">
                </div>
            </div> -->
            </div>
    </section>

    <!-- Footer-->
    <?php
    require_once("footer.php");
    ?>
    <!-- Portfolio Modals-->
    <!-- Portfolio stage 1 popup-->
    <div class="portfolio-modal modal fade" id="experience1" tabindex="1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">ASSOCIATION LEILA</h2>
                                <p class="item-intro text-muted">L’Association gestionnaire L.E.I.L.A. (Les Enfants Inadaptés et Leurs Amis).</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/logos/leila.png" alt="..." />
                                <p>durant mon stage j'avais pour but de réaliser un site présentent l'association ainsi que ses 4 structures et leur permettre de rendre l'adhésion possible en ligne ainsi que la possibilité de faire un don.
                                    <br><br>
                                    Le mois de mai: <br><br>
                                    - réalisation de cahier des charges
                                    <br>
                                    - participation à 3 réunions pour la mise en place des different pages du site internet
                                    <br>
                                    - et l'apprentissage du Framework Symfony ainsi que Bootstrap
                                    <br><br>
                                    Le mois de juin + mi-juillet: <br><br>
                                    - Mise en place de la partie authentification
                                    - tableau administrateur
                                    - l'envoie de formulaire d'adhésion


                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        ASSOCIATION LEILA
                                    </li>
                                    <li>
                                        <strong>Tuteur:</strong>
                                        M.Adlan développeurchez l'ANR
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                <p>Pour le compte de notre client (Hardware Unit nous avons du metre en place un site vitrine, lui permettent de presenter
                                    sa ou ses différentes marchandises au grand public.
                                    <br><br>
                                    les contraintes : <br><br>
                                    - L’objectif de ce CMS est de déployer rapidement des sites de ventes de produit particuliers
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
                                        <strong>Category:</strong>
                                        e-commerce
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Fermer
                                </button>
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
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
                                        Explore
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
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
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
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
                                        <strong>Category:</strong>
                                        Identity
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