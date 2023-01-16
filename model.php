<?php

function dbConnect()
{
    // $db = new PDO('mysql:host=localhost;dbname=refonte_mmi;port:3306', 'root', 'root');
    require('connexion.php');
    $db->query('SET NAMES utf8mb4');
    return $db;
}

function logIn()
{
    $db = dbConnect();
    $db->query('SET NAMES utf8');

    // requete préparée :
    $requete = "SELECT * FROM utilisateur WHERE login=:login";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(':login', $_POST["login"], PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowcount() == 1) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($_POST["password"], $result["password"])) {
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["id_user"] = $result["id_user"];
            return 1;
        } else {
            return 2;
        }
    } else {
        return 3;
    }

}

function getUser($id) {
    $db = dbConnect();

    $requete = "SELECT * FROM utilisateur WHERE id_user=$id";
    $stmt = $db->query($requete);
    $stmt->fetch(PDO::FETCH_ASSOC);
}

function getModules() {
    
}
function getProject(){
    $db = dbConnect();
    $requete = "SELECT * FROM projet";
    $stmt = $db->query($requete);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getEvents(){
    $db = dbConnect();
    $requete = "SELECT * FROM evenements";
    $stmt = $db->query($requete);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function detailEvent($event){
    $db = dbConnect();
    $requete = "SELECT * FROM evenements WHERE " . $event . "=id_event";
    $stmt = $db->query($requete);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
