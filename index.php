<?php include('model.php');
$modules = getModules();
$events = getEvent();
$resultTemoignage = getTemoignages();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>

    <meta name="twitter:card" content="Site MMI champs"></meta>
    <link rel="canonical" href="http://mmi-champs.noamsebahoun.fr/index.php">
    <meta name="description" content=" Tout au long de MMI, l’étudiant développe des compétences pluridisciplinaires tant dans le domaine de la programmation que dans le graphisme ou les réseaux. Son atout principal au sortir de la formation est sa polyvalence dans les différents domaine du multimédia.">
    <meta name="keywords" content="MMI, multimédia, internet, web, audiovisuel, études, post-bac">

    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="./medias/icons/logo_MMI.svg">
    <script src="./js/script.js" defer></script>
    <title>MMI-Champs</title>
</head>

<body>
    <div class="menu-overlay">
        <div class="overlay-menu">
            <ul class="one">
                <a href="formation.php">
                    <li>Formation</li>
                </a>
                <a href="gallery.php">
                    <li>Projets</li>
                </a>
                <a href="event.php">
                    <li>Évènements</li>
                </a>
                <a href="international.html">
                    <li>International</li>
                </a>

            </ul>
        </div>
    </div>

    <nav class="navbar" data-scroll>
        <a href="index.php" class="imgNav">
            <img src="medias/icons/logo_MMI.svg" alt="Logo">
        </a>

        <div class="navLinks">
            <ul>
                <a href="formation.php">
                    <li>Formation</li>
                </a>
                <a href="gallery.php">
                    <li>Projets</li>
                </a>
                <a href="event.php">
                    <li>Évènements</li>
                </a>
                <a href="international.html">
                    <li>International</li>
                </a>
            </ul>
            <div id="toggle-menu" class="menu">
                <div class="menu-link">
                    <span class="hamburger-icon">
                        <span class="hamburger-bar hamburger-bar-1"></span>
                        <span class="hamburger-bar hamburger-bar-2"></span>
                        <span class="hamburger-bar hamburger-bar-3"></span>
                    </span>
                </div>
            </div>
        </div>
    </nav>
    <header class="mainTitle">
        <h1>BUT MMI</h1>
        <h2>Métiers du Multimédia & de l'Internet</h2>
        <h3>Champs sur Marne</h3>
    </header>

    <main>
        <div class="stats">
            <div class="diplome">
                <img src="medias/icons/diplome.svg" alt="">
                <h3>1600</h3>
                <h5><b>DIPLOMÉS</b></h5>
            </div>
            <div class="candidate">
                <img src="medias/icons/candidat.svg" alt="">
                <h3>2500</h3>
                <h5><b>CANDIDATS CHAQUE ANNÉE</b></h5>
            </div>
            <div class="places">
                <img src="medias/icons/places.svg" alt="">
                <h3>56</h3>
                <h5><b>PLACES</b></h5>
            </div>
            <div class="anciennete">
                <img src="medias/icons/anciennete.svg" alt="">
                <h3>28</h3>
                <h5><b>ANS D'EXISTENCE</b></h5>
            </div>
        </div>
        <div class="mmiGeneral">
            <h3>une formation en <span class="purple">3 ans</span></h3>


            <div class="row">
                <div class="large-12 columns">
                    <div class="carousel-modules owl-carousel owl-theme">
                        <?php
                        foreach ($modules as $module) {
                            echo
                            '<div class="item item-modules">' .
                                '<div class="img-and-title">' .
                                '<img src="medias/module/' . $module['img_module'] . '" alt="">' .
                                '<h4>' . $module['nom_module'] . '</h4>' .
                                '</div>' .
                                '<div class="desc-and-button">' .
                                '<p>' . $module['desc_module'] . '</p>' .
                                '<a class="button" href="formation.php">En savoir plus</a>' .
                                '</div>' .
                                '</div>';
                        };
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="competences">
            <h3 class="center">5 compétences</h3>
            <div class="skills">
                <div class="comprendre">
                    <h5>COMPRENDRE</h5>
                    <p class=skillTxt>Comprendre les écosystèmes, les besoins des utilisateurs et les dispositifs de communication numérique</p>
                </div>
                <div class="concevoir">
                    <h5>CONCEVOIR</h5>
                    <p class=skillTxt>Concevoir ou co-concevoir une réponse stratégique pertinente à une problématique complexe
                    </p>
                </div>
                <div class="exprimer">
                    <h5>EXPRIMER</h5>
                    <p class=skillTxt>Exprimer un message avec les médias numériques pour informer et communiquer</p>
                </div>
                <div class="developper">
                    <h5>DÉVELOPPER</h5>
                    <p class=skillTxt>Développer pour le web et les médias numériques</p>
                </div>
                <div class="entreprendre">
                    <h5>ENTREPRENDRE</h5>
                    <p class=skillTxt>Entreprendre dans le secteur du numérique</p>
                </div>
            </div>
        </div>
        <div class="parcours">
            <h3 class="center">2 PARCOURS</h3>
            <div class="course">
                <div class="spe">
                    <div class="img"><img src="./medias/crea.png" alt="imageparcourscreationnumerique"></div>
                    <h4>Création numérique</h4>
                    <p>Métiers : directeur artistique, designer interactif, web/UI designer, motion designer, réalisateur, infographiste, game designer...</p>
                </div>
                <div class="spe">
                    <div class="img"><img src="./medias/dev.png" alt="imageparcoursdeveloppementweb"></div>
                    <h4>Développement web & dispositifs interactifs</h4>
                    <p>Métiers : Intégrateur, développeur front, développeur back, développeur full-stack, métiers de la scénographie numérique, intégrateur de dispositif de réalité virtuelle...
                    </p>
                </div>
            </div>
        </div>
        <div class="actu">
            <h3 class="actuTitle">ACTUALITÉS</h3>
            <div class="count-down">
                <h3>Prochaine JPO</h3>
                <p id="header--countDown">
                </p>
            </div>
            <!-- 
                
                SLIDER 
            
            -->
            <div class="row">
                <div class="large-12 columns">
                    <div class="carousel-events owl-carousel owl-theme">
                        <?php
                        foreach ($events as $event) {
                            echo
                            '<a href="./affiche-event.php?id=' . $event['id_event'] . '"><div class="item">' .
                                '<div class="img-event-background" style="background:url(\'medias/evenements/' . $event['img_event'] . '\')no-repeat center center/cover;">' .
                                '</div>' .
                                '<h3>' . $event['nom_event'] . '</h3>' .
                                '<p>' . date('M d, Y', strtotime($event['date_event'])) . '</p>' .
                                '</div></a>';
                        };
                        ?>
                    </div>
                </div>
                <div style></div>
                <a href="event.php" class="button voirplus">Voir plus</a>
            </div>
        </div>
        <div class="temoignages">
            <h2 class="testimonyTitle">NOS ANCIENS TÉMOIGNENT</h2>
            <div class="carousel-events owl-carousel owl-theme">
                <?php
                foreach ($resultTemoignage as $value) {
                    echo
                    '<div class="item">' .
                        '</div>';
                };
                ?>
            </div>

        </div>
    </main>
    <footer>
        <div class="footer">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1005349879015!2d2.58308131562675!3d48.837221010151026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e33dd9a3fdd%3A0x7e5ced48ab7fc8df!2sIUT%20de%20Marne-la-Vall%C3%A9e%20-%20Universit%C3%A9%20Gustave%20Eiffel!5e0!3m2!1sfr!2sfr!4v1672012216586!5m2!1sfr!2sfr" style="border:0; border-radius: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="campus">
                <h4>Campus</h4>
                <ul>
                    <li>2 rue Albert Einstein</li>
                    <li>77420 Champs Sur Marne</li>
                    <li>RER A - Noisy-Champs</li>
                    <li>Bus 212, 213 & 312 - Nobel</li>
                </ul>
            </div>
            <div class="contact">
                <h4>Contact</h4>
                <ul>
                    <li>01 60 95 85 90</li>
                    <li> mmi-dir.iut@univ-eiffel.fr</li>
                </ul>
                <div class="socials">
                    <a href="https://www.instagram.com/mmi_champs/" target="_blank"><img src="medias/icons/insta_icon.svg" alt="Page Instagram"></a>
                    <a href="https://twitter.com/mmi_champs" target="_blank"><img src="medias/icons/twitter_icon.svg" alt="Page Twitter"></a>

                </div>
            </div>
        </div>
        <div class="credits">
            <p>2023&#160;&#160;&#160;-&#160;&#160;&#160;BUT Métiers du Multimédia & de l’Internet, Champs-sur-Marne © Tous droits réservés</p>
            <h4>mentions légales</h4>
            <a href="./login.php">
                <h4>Back-office</h4>
            </a>
        </div>

    </footer>
</body>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

<script src="./js/countDown.js" defer></script>
<script src="./js/slider-actus.js" defer></script>

<script>
    ScrollOut({
        cssProps: true,
        threshold: 0.2,
    });
</script>


</html>