<?php include 'connexion.php'; 
$requete = "SELECT * FROM competences";
$resultat = $db->query($requete);
$competence = $resultat->fetchAll(PDO::FETCH_ASSOC);

$module = "SELECT * FROM modules";
$res = $db->query($module);
$module = $res->fetchAll(PDO::FETCH_ASSOC);
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
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="./js/script.js"></script>
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
            <img src="medias/logo_MMI.svg" alt="Logo">
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
    
    <div class="header-competences">
        <div class="slider-header-competences row">
            <div class="large-12 columns slider-background">
                <div class="carousel-competences owl-carousel owl-theme">
                    <?php
                    foreach ($competence as $text) {
                        echo "<div class=\"item\" >";
                        echo '<p class="competence5"> 5 compétences </p>';
                        echo "<p class=\"id-competence\"> #". $text['id_competence']." </p>";
                        echo '<svg width="40" height="3" viewBox="0 0 40 3" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="1.5" x2="40" y2="1.5" stroke="white" stroke-width="3"/>
                        </svg>';
                        echo "<h1 class=\"nom-competence\">" . $text['nom_competence'] . "</h1>";
                        echo "<p class=\"description-competence\">" . $text['description_competence'] . "</p>";
                        echo "<p class=\"modules-lies\"> <span class=\"uppercase\">Modules liés :</span> </br>" . $text['modules_lie'] . "</p>";
                        echo "<img class=\"img-background-competences\" src=\"medias/" . $text['img_competence'] . "\" alt=\"\">";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <section class="pluridisciplinaire">
        <h2>Une formation <span>pluridisciplinaire</span></h2>
        <p>Au cours de sa formation, l’étudiant développe des compétences pluridisciplinaires tant dans le domaine de la programmation que dans le graphisme ou les réseaux. Son atout principal au sortir de la formation est sa polyvalence dans les domaine de la conception, de la réalisation, de la commercialisation de produits et de services web et multimédia.
            </p>
        </section>
        
        <section class="voir-projets">
            <?php
            foreach ($module as $module) {
            echo '<div class="module-competence module'. $module['id_module'] .'">';
            echo '<h2 class="nom-module">'. $module['nom_module'] .'</h2>';
            echo '<p class="description-module">'. $module['desc_module'] .'</p>';
            echo '</div>';
            }
            ?>
    
    </section>

<!-- Slider Modules  -->    

<div class="pedagogie-projet">
    <div class="paragraphe-right">
        <h2>Un pédagogie par projet</h2>
        <p>Tout au long du cursus, des produits multimédia (sites web, applications mobiles, installations plurimédia) sont élaborés sous forme de projets. Ce mode de conception permet à l’étudiant d’acquérir des compétences transverses (design, développement informatique, marketing, …) et professionnelles. </br>
        </br>
        Le BUT Métiers du Multimédia et de l’Internet s’appuie sur un Programme Pédagogique National qui garantit un diplôme de valeur nationale et une reconnaissance par les écoles et par les professionnels.</p>
    </div>
    <div class="paragraphe-left">
        <h2>La formation en chiffres</h2>
        <ul class="chiffres">
            <li>Cours Magistraux (CM) en classe entière (56 étudiants)
            <li>Travaux Dirigés (TD) par groupe de 28 étudiants</li>
            <li>Travaux Pratiques (TP) en quart de promotion (4 groupes d’environ 14 étudiants)</li>
</br>
            <li>600h de projets tutorés</li>
            <li>22 à 24 semaines de stage</li>
            <li>Alternance en 3ème année</li>
        </ul>
    </div>
</div>
<footer>
        <div class="footer">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1005349879015!2d2.58308131562675!3d48.837221010151026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e33dd9a3fdd%3A0x7e5ced48ab7fc8df!2sIUT%20de%20Marne-la-Vall%C3%A9e%20-%20Universit%C3%A9%20Gustave%20Eiffel!5e0!3m2!1sfr!2sfr!4v1672012216586!5m2!1sfr!2sfr" style="border:0; border-radius: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="campus">
                <h3>Campus</h3>
                <ul>
                    <li>2 rue Albert Einstein</li>
                    <li>77420 Champs Sur Marne</li>
                    <li>RER A - Noisy-Champs</li>
                    <li>Bus 212, 213 & 312 - Nobel</li>
                </ul>
            </div>
            <div class="contact">
                <h3>Contact</h3>
                <ul>
                    <li>01 60 95 85 90</li>
                    <li> mmi-dir.iut@univ-eiffel.fr</li>
                </ul>
                <div class="socials">
                    <a href="https://www.instagram.com/mmi_champs/" target="_blank"><img src="medias/insta_icon.svg" alt="Page Instagram"></a>
                    <a href="https://twitter.com/mmi_champs" target="_blank"><img src="medias/twitter_icon.svg" alt="Page Twitter"></a>
                    
                </div>
            </div>
        </div>
        <div class="credits">
            <p>2023&#160;&#160;&#160;-&#160;&#160;&#160;BUT Métiers du Multimédia & de l’Internet, Champs-sur-Marne © Tous droits réservés</p>
            <h3>mentions légales</h3>
        </div>

    </footer>

    
    
</body>

<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="slider-actus.js" defer></script>
<script src="sliders.js" defer></script>
</html>