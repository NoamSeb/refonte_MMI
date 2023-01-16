<?php

function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=refonte_mmi;port:3306', 'root', 'root');
    return $db;
}

function connectUser()
{
    $db = dbConnect();
    $requete = "SELECT * FROM utilisateur where login=:login";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(':login', $_POST["login"], PDO::PARAM_STR);
    $stmt->execute();


    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_POST['password'], $user['password'])) {
            return $user;
        }
        return false;
    }
    return false;
}
?>