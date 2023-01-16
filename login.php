<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form  action="./controllers/login.php" method="POST">
        <label for="name">Entrez votre Login :</label>
        <input type="text" id="login" name="login">
        <label for="name">Entrez votre mot de passe :</label>
        <input type="password" id="PWD" name="password">
        <input type="submit">
    </form>
    <?php if(isset($result) && ($result==false)){
            echo("Utilisateur ou mot de passe incorrect.");
        }
    ?>
</body>

</html>