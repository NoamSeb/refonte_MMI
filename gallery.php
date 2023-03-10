<?php include('model.php');
$resultatProjets = getProjectsAndModules();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>

    <link rel="stylesheet" href="style.css">

    <script src="./js/slider-projets.js" defer></script>
    <script src="./js/script.js" defer></script>

    <link rel="icon" href="./medias/icons/logo_MMI.svg">
    <title>Galerie</title>

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
            <img src="medias/icons/logo_MMI.svg" alt="Retour à l'accueil">
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
    <header class="header gallery">
        <h1>GALERIE</h1>
        <p>découvrez les projets de nos étudiants</p>
    </header>
    <main>
        <div class="content">
            <div class="pagesSecondTitle">
                <h2>DES PROJETS <span class="yellow">RÉCOMPENSÉS</span></h2>
                <div class="pagesSecondTitleTxt">
                    <p>Blabla sur les récompenses aux Festival MMI, Nuit de l’info... Les projets de nos étudiants leur permettent de se constituer un portfolio et un maximum d’expérience pour débuter dans le monde professionnel, au sein de stages etc.</p>
                </div>
            </div>
            <div class="projectscontainer">
                <?php
                foreach ($resultatProjets as $r) { ?>
                    <div class="panel" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./medias/projets/<?= $r['image'] ?>');" alt="<?= $r['titre'] ?>">
                        <article>
                            <h5>#<?= $r['nom_module'] ?></h5>
                            <h2><?= $r['titre'] ?></h2>
                            <h5>Par <?= $r['auteur'] ?></h5>
                            <p>Par <?= mb_strimwidth($r['description'], 0, 150, "...") ?></p>
                            <a class="button" href="affiche-projet.php?id_projet=<?= $r['id_projet'] ?>" type="button">Voir le projet</a>
                        </article>
                    </div>
                <?php } ?>
            </div>
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
            <p>2023&#160;&#160;&#160;-&#160;&#160;&#160;BUT Métiers du Multimédia & de l’Internet, Champs-sur-Marne<br>© Tous droits réservés</p>
            <a href="./mentions.html">
                <h4>Mentions légales</h4>
            </a>
            <a href="./login.php">
                <h4>Back-office</h4>
            </a>
        </div>

    </footer>
</body>

</html>