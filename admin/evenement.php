<?php
session_start();
if(!isset($_SESSION["login"])) {
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

    nav {
        background-color: black;
        height: 100vh;
        width: 20vw;
        float: left;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
    }

    nav ul {
        height: 90%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
    }

    ul{
        text-decoration: none;
        text-align: center;
    }

    .backoffice {
        width: 100%;
    }
    .backoffice a {
        color: white;
        text-decoration: none;
    }
</style>

<body>


    <header>
        <img src="../medias/user.png">
    </header>
    <div class="backoffice">
        <nav>
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Projet</a></li>
                <li><a href="">Évènements</a></li>
                <li><a href="">Actualités</a></li>
                <li><a href="../controllers/logout.php">Déconnexion</a></li>
            </ul>
        </nav>
        <?php
        echo ("Bonjour " . $_SESSION['login'] . ". Quel plaisir de vous revoir !");
        ?>
        <p>Page Évènements</p>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>