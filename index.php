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
    <link rel="icon" type="image/x-icon" href="assets/img/icon1.png" />
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
            <div class="masthead-heading text-uppercase">Barkallah Nassim</div>
            <div class="masthead-subheading">
                <p id="hello" data-label="Bienvenue sur mon Portfolio !"></p>
            </div>


        </div>
    </header>
    <!-- ======= me ======= -->
    <section class="page-section" id="me" width="100%" ;>

        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">A Propos de moi</h2>
            </div><BR>
            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 20px;">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img" id="card-container">
                                            <img src="assets/img/my.jpg" class="img-fluid rounded b-shadow-a" alt="" id="card">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Nom/Prénom: </span> <span>Barkallah Nassim</span>
                                            </p>
                                            <p><span class="title-s">Profil: </span> <span>Développeur Full stack
                                                </span>
                                            </p>
                                            <p><span class="title-s">Email: </span> <span><a href="mailto:nassimb1102@gmail.com">nassimb1102@gmail.com</a>
                                                </span>
                                            </p>
                                            <p><span class="title-s">Téléphone: </span> <span>07 81 63 34 08</span></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h4 class="title-left">
                                            Présentation
                                        </h4>
                                    </div>
                                    <p class="lead">
                                        Je suis Nassim BARKALLAH, étudiant en première année de BTS SIO (Services
                                        Informatiques aux Organisations), Option SLAM
                                        (Solutions Logicielles et Application Métier) l'option spécialisée pour le
                                        développement, au lycée IPSSI, Paris 12eme.
                                    </p>
                                    <p class="lead">
                                        J'ai développé une passion pour l'informatique depuis que j'ai commencer mes
                                        etude en BTS SIO. C'est ainsi que j'ai
                                        decouvert le developpement web et j'ai décider d'en faire mon futur métier.

                                    </p>
                                    <p class="lead">
                                        En dehors de ma passion pour le developpement web, je pratique du Basketball
                                        amateur depuis plus de 7 ans à niveau
                                        départemental à Groslay dans le Vald'oise.
                                    </p>
                                    <p class="lead">
                                        Si vous voulez plus d'infos vous pouvez télécharger mon CV ci-dessous.
                                    </p>
                                </div>
                            </div>
                            <div class="text-center">
                                <h2 class="section-heading text-uppercase">Mes qualités</h2><br>
                            </div>
                            <div class="row">
                                <div class="cards text-center">
                                    <div class="cards-Q ">
                                        <img src="assets/img/search_64px.png" alt="" class="search"><br>
                                        <h5 class="text-center"> CURIEUX</h5><br>
                                        <p class="text-center">
                                            J'ai découvert une forme de curiosité aux nouveaux langages et méthodes de programmations.
                                        </p>
                                    </div>
                                    <div class="cards-Q">
                                        <img src="assets/img/brain_100px.png" alt="" class="brain"><br>
                                        <h5> PERSÉVÉRANT</h5><br>
                                        <p>
                                            L'obstination est un fait fastidieux et long parfois, mais qui est souvent récompensée.

                                        </p>
                                    </div>
                                    <div class="cards-Q">
                                        <img src="assets/img/flash_on_48px.png" alt="" class="flash"><br>
                                        <h5>DYNAMIQUE</h5><br>
                                        <p>
                                            Je suis une personne très énergique et active dans ce que j'entreprends.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div>
                                <div class="text-center2 ">
                                    <h2 class="section-heading text-uppercase">Mes compétences</h2><br>
                                </div>
                                <h4 class="text-center">Langages</h4>
                                <div class="skill-mf"><br>
                                    <span>HTML</span> <span class="pull-right">90%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>CSS3</span> <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>PHP</span> <span class="pull-right">80%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>C#</span> <span class="pull-right">75%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>Python</span> <span class="pull-right">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span>JavaScript</span> <span class="pull-right">70%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                                <div class="skill-mf"><br><br>
                                    <h4 class="text-center">Frameworks</h4><br>
                                    <div>
                                        <span>Symfony5-6</span> <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Flutter</span> <span class="pull-right">40%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf"><br><br>
                                    <h4 class="text-center">Database</h4><br>
                                    <div>
                                        <span>MySQL</span> <span class="pull-right">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Firebase</span> <span class="pull-right">45%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-mf"><br><br>
                                    <h4 class="text-center">Langues</h4> <br>
                                    <div>
                                        <span>Français</span> <span class="pull-right">100%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Anglais</span> <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="skill-mf"><br><br>
                                    <h4 class="text-center">CMS</h4> <br>
                                    <div>
                                        <span>Wordpress</span> <span class="pull-right">60%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Wix</span> <span class="pull-right">90%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center"><br>
                                    <h2 class="section-heading text-uppercase"></h2><br>
                                </div>
                                <div class="row">
                                    <div class="card-row">

                                    </div>
                                </div>
                                <div class="cv_btn">
                                    <a class="btn btn-primary btn-xl text-xl-center " href="assets/lien/CV Barkallah_Nassim.pdf" target="_blank">Retrouvez mon CV ici &ensp;<img src="assets/img/icon/pdf.svg" alt="" width="10%"></a>
                                </div>
                            </div><br> <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End About me -->
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