<?php
session_start();
include('../model.php');
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<style>
    header {
        height: fit-content;
    }

    header img {
        float: right;
    }

    img {
        width: 5vw;
        height: 5vw;
    }

    .backoffice {
        width: 100%;
    }

    .backoffice nav {
        padding: 2rem;
        background-color: black;
        height: 100vh;
        width: 17rem;
        float: left;
        display: flex;
        flex-direction: column;
    }

    .backoffice ul a {
        color: white;
        line-height: 2rem;
        text-decoration: none;
    }

</style>

<body>
    <header>
        <img src="../medias/user.png">
    </header>
    <div class="backoffice">
        <nav>
            <h3>Tableau de bord</h3>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="projet.php">Projet</a></li>
                <li><a href="evenement.php">Evenements</a></li>
                <li><a href="actualite.php">Actualités</a></li>
                <li><a href="../controllers/logout.php">Déconnexion</a></li>
            </ul>
        </nav>
        <?php
        echo "Bonjour " . $_SESSION['login'] . ". Quel plaisir de vous revoir !";
        ?>
        <p>Dashboard</p>
        <div class="dashboard">
            <div class="container align-items-center mt-2">
                <div class="row">
                    <div class="projet col-md-5 col-sm-5 rounded p-5 bg-secondary">
                        <p class="text-white">Projet</p>
                        <p class="text-white"><a href="projet.php">Voir les projets</a></p>
                    </div>
                    <div class="event col-md-5 col-sm-5 offset-md-2 rounded p-5 bg-secondary">
                        <p class="text-white">Evenements</p>
                        <p class="text-primary"><a href="evenement.php">Voir les évènements</a></p>
                    </div>
                    <div class="actu col-md-12 col-sm-12 rounded p-5 bg-secondary m1">
                        <p class="text-white">Actualités</p>
                        <p class="text-primary"><a href="actualite.php">Voir les Actualités</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>