<?php
session_start();
include('../model.php');
$events = getEvents();
$projets = getProject();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<script>
    function filterEvents() {
        // déclaration des variables
        let input, filter, table, tr, td, i, txtValue;
        input = document.querySelector(".searchevents");
        filter = input.value.toUpperCase();
        table = document.querySelector(".tableevents");
        tr = table.getElementsByTagName("tr");
        message = document.getElementById("erreurback");

        // boucle pour chaque rangée d'élement trouvé / cache celles qui ne correspondent pas à la requête
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    tr[i].classList.remove('hidden');
                } else {
                    tr[i].style.display = "none";
                    tr[i].classList.add('hidden');
                }
            }
        }

        allArticles = Array.from(document.querySelector('tbody').querySelectorAll("tr"));
        if (allArticles.every((element) => element.classList.contains("hidden"))) {
            message.style.display = "block";
            document.querySelectorAll('thead th').style.display = "none";
        } else {
            message.style.display = "none";
            document.querySelectorAll('thead th').style.display = "";
        }
    }

    function filterProjects() {
        // déclaration des variables
        let input, filter, table, tr, td, i, txtValue;
        input = document.querySelector(".searchprojects");
        filter = input.value.toUpperCase();
        table = document.querySelector(".tableprojects");
        tr = table.getElementsByTagName("tr");
        message = document.getElementById("erreurback");

        // boucle pour chaque rangée d'élement trouvé / cache celles qui ne correspondent pas à la requête
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    tr[i].classList.remove('hidden');
                } else {
                    tr[i].style.display = "none";
                    tr[i].classList.add('hidden');
                }
            }
        }

        allArticles = Array.from(document.querySelector('tbody').querySelectorAll("tr"));
        if (allArticles.every((element) => element.classList.contains("hidden"))) {
            message.style.display = "block";
            document.querySelectorAll('thead th').style.display = "none";
        } else {
            message.style.display = "none";
            document.querySelectorAll('thead th').style.display = "";
        }
    }
</script>


<body>
    <div class="backoffice">
        <aside class="navigation">
            <a href="dashboard.php" class="dashboardbutton"><i class="fa fa-tachometer" aria-hidden="true"></i>&#160;&#160;Dashboard</a>
            <a href="newevent.php" class="btn btn-primary" type="button">Ajouter un évènement</a>
            <a href="newproject.php" class="btn btn-primary" type="button">Ajouter un projet</a>

            <a class="btn btn-danger justify-self-end" href="../controllers/logout.php" type="button"><i class="fa fa-power-off"></i>&#160;&#160;Déconnexion</a>
            <a href="../index.php" class="homebutton justify-self-end">&larr;&#160;&#160;Retour au site</a>
        </aside>
        <div class="dashboard">

            <?php
            echo "<h5><b>Bonjour " . $_SESSION['login'] . ". Quel plaisir de vous revoir !</b></h5><br>";
            ?>
            <div class="alert alert-primary" role="alert">
            <p><i class="fa-solid fa-wand-magic-sparkles"></i>&#160;&#160;Bienvenue sur le back-office du site du BUT MMI de Champs Sur Marne, où vous pouvez ajouter, modifier ou supprimer des projets et évènements.<br>Parcourez les volets ci-dessous pour afficher les listes de projets et évènements.</p>
            </div>




            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-events-tab" data-bs-toggle="tab" data-bs-target="#nav-events" type="button" role="tab" aria-controls="nav-events" aria-selected="true">Évènements</button>
                    <button class="nav-link" id="nav-projects-tab" data-bs-toggle="tab" data-bs-target="#nav-projects" type="button" role="tab" aria-controls="nav-projects" aria-selected="false">Projets</button>
                </div>
                <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> -->
                <!-- </div> -->

            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab" tabindex="0">
                    <input type="text" class="searchevents" onkeyup="filterEvents()" placeholder="Rechercher par titre">
                    <table class="tableevents">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Options</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php
                            foreach ($events as $value) { ?>
                                <tr>
                                    <td><?= $value['id_event'] ?></td>
                                    <td><?= $value['nom_event'] ?></td>
                                    <td><?= mb_strimwidth($value['description_event'], 0, 200, "...") ?></td>
                                    <td><?= date('M d, Y', strtotime($value['date_event'])) ?></td>
                                    <td><?= $value['img_event'] ?></td>
                                    <td><?=
                                        '<div style="display:flex; gap:1rem"><a type="button" class="btn btn-xs btn-info" href="readevent.php?id_event=' . $value['id_event'] . '" >&#128065;</a><a type="button" class="btn btn-xs btn-warning" href="editevent.php?action=edit & id_event=' . $value['id_event'] . '">&#9999;</a><a type="button" class="btn btn-xs btn-danger" onclick="return confirm(`Êtes-vous sûr de vouloir supprimer l\'article ?`)" href="deleteevent.php?id_event=' . $value['id_event'] . '">&#128465;</a></div>'; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-projects" role="tabpanel" aria-labelledby="nav-projects-tab" tabindex="0">
                    <input type="text" class="searchprojects" onkeyup="filterProjects()" placeholder="Rechercher par titre">

                    <table class="tableprojects">
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
                                        '<div style="display:flex; gap:1rem"><a type="button" class="btn btn-xs btn-info" href="readproject.php?id_projet=' . $value['id_projet'] . '" >&#128065;</a><a type="button" class="btn btn-xs btn-warning" href="editproject.php?action=edit & id_projet=' . $value['id_projet'] . '">&#9998;</a><a type="button" class="btn btn-xs btn-danger" onclick="return confirm(`Êtes-vous sûr de vouloir supprimer l\'article ?`)" href="deleteprojet.php?id_projet=' . $value['id_projet'] . '">&#128465;</a></div>'; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>


        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>