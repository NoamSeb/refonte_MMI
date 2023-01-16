<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="formulaire">
        <form action="./login.php?action=login" method="POST">
            <label>Identifiant</label><br>
            <input type=text name="login" placeholder="Saisissez votre identifiant" required>
            <?php
            if (isset($err) && $err == "login") {
                echo "<br><h6 style='color:#FF4C4C'>Cet identifiant n'existe pas. Veuillez en saisir un autre.</h6>";
            };
            ?>
            <br>
            <label>Mot de passe</label><br>
            <input type="password" name="password" placeholder="Saisissez votre mot de passe" required>
            <?php
            if (isset($err) && $err == "password") {
                echo "<br><h6 style='color:#FF4C4C'>Votre mot de passe est incorrect</h6>";
            };

            ?><br>
            <input type=submit name="allez" value="Se connecter">
        </form>
    </div>
    <?php if (isset($result) && ($result == false)) {
        echo ("Utilisateur ou mot de passe incorrect.");
    }
    ?>
</body>

</html>