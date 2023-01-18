<?php
require_once('../model.php');
$resultDetailTemoignage = detailTemoignage($_GET["id_temoignage"]);
session_start();
if (!isset($_SESSION["login"])) {
    header('location: ../index.php');
}

if (isset($_POST["update"])) {
    $id = $_POST['id'];
    $title = $_POST['auteur'];
    $content = $_POST['contenu'];
    $promo = $_POST['promo'];

    editEvent($id, $title, $content, $promo);
    echo'<script type="text/javascript">
    alert("Article modifié avec succès!");
    window.location = "dashboard.php";
</script>';
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
</head>

<body>
    <div class="backoffice">
        <aside class="navigation">
            <a href="dashboard.php" class="dashboardbutton"><i class="fa fa-tachometer" aria-hidden="true"></i>&#160;&#160;Dashboard</a>
            <a href="newevent.php" class="btn btn-primary" type="button">Ajouter un évènement</a>
            <a href="newproject.php" class="btn btn-primary" type="button">Ajouter un projet</a>
            <a href="newtemoignage.php" class="btn btn-primary" type="button">Ajouter un témoignage</a>

            <a class="btn btn-danger justify-self-end" href="../controllers/logout.php" type="button"><i class="fa fa-power-off"></i>&#160;&#160;Déconnexion</a>
            <a href="../index.php" class="homebutton justify-self-end">&larr;&#160;&#160;Retour au site</a>
        </aside>
        <div class="dashboard">
        <a class="ariane" href="dashboard.php">Retourner au back-office</a>

            <?php foreach ($resultDetailTemoignage as $result) {
                $editId = $result['id_temoignage'];
                $editTitle = $result['nom_etudiant'];
                $editContent = $result['contenu_temoignage'];
                $editPromo = $result['promo_etudiant'];

            }

            ?>
            <h2>Modifier l'article</h2>

            <form class="edit" role="form" method="post" action="">
                <input type="hidden" name="id" value="<?php echo $editId; ?>">
                <label for="titre">Auteur</label>
                <input placeholder="Amel Chabah" name="titre" value="<?php echo $editTitle; ?>">
                <label for="contenu">Contenu</label>
                <textarea placeholder="Contenu" name="contenu"><?php echo $editContent; ?></textarea>
                <label for="promo">Promotion</label>
                <input type="text" placeholder="Date de l'évènement" name="promo" value="<?php echo $editPromo; ?>">

                <input type="submit" name="update" value="Mettre à jour l'article">

            </form>
            </article>
        </div>
    </div>
</body>
<!-- <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>