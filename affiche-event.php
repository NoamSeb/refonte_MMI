<?php include('connexion.php');
$requete = "SELECT * FROM evenement WHERE id_event={$_GET["id"]}";
$stmt = $db->query($requete);
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
foreach ($result as $r) { ?>
<img src="<?=$r['img_event']?>" alt="">
<h1><?=$r['nom_event']?></h1>
<p><?=$r['date_event']?></p>
<p><?=$r['description_event']?></p>
<?php } ?>
</body>
</html>