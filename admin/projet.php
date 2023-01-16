<?php
require_once('../model.php');
$projets = getProject();
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
                <li><a href="../controllers/logout.php">Déconnexion</a></li>
            </ul>
        </nav>

        <div class="dashboard">

            <?php
            echo ("Bonjour " . $_SESSION['login'] . ". Quel plaisir de vous revoir !");
            ?>
            <br>
            <br>
            <br>
            <h3>Projets</h3>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Auteur</th>
                        <th>Image</th>
                        <th>Modules liés</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($projets as $value) { ?>
                        <tr>
                            <td><?= $value['id_projet'] ?></td>
                            <td><?= $value['titre'] ?></td>
                            <td><?= $value['description'] ?></td>
                            <td><?= $value['auteur'] ?></td>
                            <td><?= $value['image'] ?></td>
                            <td><?= $value['ext_module'] ?></td>
                            <td><?=
                                '<div style="display:flex; gap:1rem"><a type="button" class="btn btn-xs btn-info" href="read.php?billet=' . $value['id_projet'] . '" >&#128065;</a><a type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id=' . $value['id_projet'] . '">&#9998;</a><a type="button" class="btn btn-xs btn-danger" onclick="return confirm(`Êtes-vous sûr de vouloir supprimer l\'article ?`)" href="delete.php?type=billet&delete & id=' . $value['id_projet'] . '">&#128465;</a></div>'; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>