<?php include('connexion.php');
$requete = "SELECT * FROM projet, modules WHERE ext_module=id_module ";
$stmt = $db->query($requete);
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
?>

<!-- jddeek -->

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
    <img src="medias/gallery.png" alt="" class="imgBackground">
    <nav>
        <div class="imgNav">
            <img src="medias/logo_MMI.svg" alt="Retour à l'accueil">
        </div>
        <div class="navTxt">
            <ul>
                <li>Formation</li>
                <li>Projets</li>
                <li>Évènements</li>
                <li>International</li>
            </ul>
        </div>
    </nav>
    <div class="pageTitle">
        <h1>GALERIE</h1>
        <p>découvrez les projets de nos étudiants</p>
    </div>
    <main>
        <div class="content">
            <div class="pagesSecondTitle">
                <h2>DES PROJETS <span class="yellow">RÉCOMPENSÉS</span></h2>
                <div class="pagesSecondTitleTxt">
                    <p>Blabla sur les récompenses aux Festival MMI, Nuit de l’info... Les projets de nos étudiants leur permettent de se constituer un portfolio et un maximum d’expérience pour débuter dans le monde professionnel, au sein de stages etc.</p>
                </div>
            </div>
            <div class="pageSlider">
                <!-- 
                    
                SLIDER 
            
            -->
                <?php
                foreach($result as $r) { ?>
                <div class="projet">
                    <img src="<?=$r['image']?>" alt="<?=$r['titre']?>">
                    <p class="moduleProjet"><?=$r['ext_module']?></p>
                    <p class="titleProjet"><?=$r['titre']?></p>
                    <p class="auteurProjet"> Par <?=$r['auteur']?></p>
                    <p class="descriProjet"><?=$r['description']?></p>
                </div>
                <?php } ?>
                <!-- 
                    
                    SLIDER 
                
                -->
            </div>
        </div>
    </main>
    <footer>
        <div class="footer">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.1005349879015!2d2.58308131562675!3d48.837221010151026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e33dd9a3fdd%3A0x7e5ced48ab7fc8df!2sIUT%20de%20Marne-la-Vall%C3%A9e%20-%20Universit%C3%A9%20Gustave%20Eiffel!5e0!3m2!1sfr!2sfr!4v1672012216586!5m2!1sfr!2sfr"
                    width="400" height="200" style="border:0; border-radius: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="campus">
                <p class="footerTitle">Campus</p>
                <p class="footerTxt">2 rue Albert Einstein<br> 77420 Champs-sur-Marne<br> RER A - Noisy-Champs<br> Bus 212, 213 & 312 - Nobel
                </p>
            </div>
            <div class="contact">
                <p class="footerTitle">Contact</p>
                <p class="footerTxt">01 60 95 85 90<br> mmi-dir.iut@univ-eiffel.fr
                </p>
                <div class="icons">
                    <img src="medias/insta_icon.svg" alt="Page Instagram">
                    <img src="medias/twitter_icon.svg" alt="Page Twitter">
                </div>
            </div>
        </div>
        <div class="bottomFooter">
            <p>2023 - BUT Métiers du Multimédia & de l’Internet, Champs-sur-marne © Tous droits réservés</p>
            <p class="linkMentions">MENTIONS LÉGALES</p>
        </div>

    </footer>
</body>

</html>