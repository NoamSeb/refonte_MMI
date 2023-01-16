<?php
require_once('../model.php');
$resultevent = detailEvent($_GET["id_event"]);
session_start();
if (!isset($_SESSION["login"])) {
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <!-- <header>
        <img src="../medias/user.png">
    </header> -->
    <div class="backoffice">
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="projet.php">Projets</a></li>
                <li><a href="evenement.php">Évènements</a></li>
                <li><a href="../controllers/logout.php">Déconnexion</a></li>
            </ul>
        </nav>
        <div class="dashboard">
            <h3>Évènements</h3>
            <?php
            foreach ($resultevent as $value) {
                echo
                '<article><h2>' . $value["nom_event"] . '</h2>' .
                    '<h6>Publié le ' . $value["date_event"] . " par " . $value["auteur"] . '</h6>' .
                    '<p>' . $value["contenu"] . '</p></article>';
            }
            ?>

        </div>
    </div>
</body>
<!-- <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>