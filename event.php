<?php 
include('model.php');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
    <header class="header header-event">
        <h1>évènements</h1>
        <h3>Découvrez les évènements du but mmi</h3>
    </header>
    <main>
        <div class="content">
            <div class="pagesSecondTitle">
                <h2>Des évènements <span class="purple">tout au long de l'année</span></h2>
                <div class="pagesSecondTitleTxt">
                    <p>Le BUT MMI ce n’est pas que des cours ! Participez à différents évènements tout au long de l’année ! Ces évènements (hors la JPO) sont des moyens de mettre en avant vos projets et ce que vous avez appris lors de votre séjours en MMI alors n’hésitez pas à y participer, vous pourrez avoir de bonnes surprises…
                    </p>
                </div>
            </div>
            <div class="pageContent">
                <!-- 
                    
                    SLIDER 
                
                -->
                <?php
                $result = getEvent();
                foreach($result as $result) { 
                    echo 
                    '<div class="event event'.$result['id_event'].'" style="background:url(\'medias/'.$result['img_event'].'\') no-repeat center center/cover;">'.
                    '<div class="event-darken">' .
                        '<h3 class="titleEvent">'.$result['nom_event'].'</h3>' .
                        '<p class="dateEvent">'.$result['date_event'].'</p>' .
                        '<p class="descripEvent">'.mb_strimwidth($result['description_event'], 0, 100, "...").'</p>' .
                        '<a href="affiche-event.php?id='.$result['id_event'].'">Voir plus</a>' .
                    '</div>'.
                    '</div>';
                } ?>
                <!-- 
                    
                    SLIDER 
                
                -->
            </div>

        </div>
        <p class="seeMore"> <strong>Voir les évènements passés ></strong></p>
    </main>
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
                    <a href="https://www.instagram.com/mmi_champs/" target="_blank"><img src="medias/icons/insta_icon.svg" alt="Page Instagram"></a>
                    <a href="https://twitter.com/mmi_champs" target="_blank"><img src="medias/icons/twitter_icon.svg" alt="Page Twitter"></a>
                    
                </div>
            </div>
        </div>
        <div class="credits">
            <p>2023&#160;&#160;&#160;-&#160;&#160;&#160;BUT Métiers du Multimédia & de l’Internet, Champs-sur-Marne © Tous droits réservés</p>
            <h3>mentions légales</h3>
        </div>

    </footer>
</body>

<script>
    ScrollOut({
        cssProps: true,
        threshold: 0.2,
    });
</script>
</html>