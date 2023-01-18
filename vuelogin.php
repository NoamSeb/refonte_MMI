<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>

    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="icon" href="./medias/icons/logo_MMI.svg">
</head>

<body>
<nav class="navbar" data-scroll>
        <a href="index.php" class="imgNav">
            <img src="medias/icons/logo_MMI.svg" alt="Logo">
        </a>

        <div class="navLinks">
            <ul>
                <a href="formation.php">
                    <li>Formation</li>
                </a>
                <a href="gallery.php">
                    <li>Projets</li>
                </a>
                <a href="event.php">
                    <li>Évènements</li>
                </a>
                <a href="international.html">
                    <li>International</li>
                </a>
            </ul>
            <div id="toggle-menu" class="menu">
                <div class="menu-link">
                    <span class="hamburger-icon">
                        <span class="hamburger-bar hamburger-bar-1"></span>
                        <span class="hamburger-bar hamburger-bar-2"></span>
                        <span class="hamburger-bar hamburger-bar-3"></span>
                    </span>
                </div>
            </div>
        </div>
    </nav>

    
    <div class="formulaire">
        <form action="./login.php?action=login" method="POST">
            <label for="login">Identifiant</label><br>
            <input id="login" type=text name="login" placeholder="Saisissez votre identifiant" required>
            <?php
            if (isset($err) && $err == "login") {
                echo "<br><h6 style='color:#FF4C4C'>Cet identifiant n'existe pas. Veuillez en saisir un autre.</h6>";
            };
            ?>
            <br>
            <label for="password">Mot de passe</label><br>
            <input id="password" type="password" name="password" placeholder="Saisissez votre mot de passe" required>
            <?php
            if (isset($err) && $err == "password") {
                echo "<br><h6 style='color:#FF4C4C'>Votre mot de passe est incorrect</h6>";
            };
            ?><br>
            <button id="show-hide-btn" type="button" onclick="showHidePassword()">Show/Hide Password</button>
            <input type=submit name="allez" value="Se connecter">
        </form>
    </div>
    <?php if (isset($result) && ($result == false)) {
        echo ("Utilisateur ou mot de passe incorrect.");
    }
    ?>
</body>
<script>
    function showHidePassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</html>