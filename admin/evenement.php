<?php
require_once('../model.php');
$events = getEvents();
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
                <li><a href="projet.php">Projet</a></li>
                <li><a href="evenement.php">Evenements</a></li>
                <li><a href="actualite.php">Actualités</a></li>
                <li><a href="../controllers/logout.php">Déconnexion</a></li>
            </ul>
        </nav>
        <?php
        echo ("Bonjour " . $_SESSION['login'] . ". Quel plaisir de vous revoir !");
        ?>
        <p>Page Évènements</p>
        <br>
        <table>
            <thead>
                <tr>
                    <th colspan="2">Évènements</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Image</th>
                </tr>
                <?php
                foreach ($events as $event) { ?>
                    <tr>
                        <td><?= $event['id_event'] ?></td>
                        <td><?= $event['nom_event'] ?></td>
                        <td><?= $event['description_event'] ?></td>
                        <td><?= $event['date_event'] ?></td>
                        <td><?= $event['img_event'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>