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

function getUser($id)
{
    $db = dbConnect();

    $requete = "SELECT * FROM utilisateur WHERE id_user=$id";
    $stmt = $db->query($requete);
    $stmt->fetch(PDO::FETCH_ASSOC);
}

function getModules()
{
    $db = dbConnect();
    $requete = "SELECT * FROM modules";
    $stmt = $db->query($requete);
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}
function getOneModule()
{
    $db = dbConnect();
    $requete = "SELECT * FROM modules, projet WHERE id_module = ext_module";
    $stmt = $db->query($requete);
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getEvent()
{
    $db = dbConnect();
    $requete = 'SELECT * FROM evenements ORDER BY date_event DESC';
    $stmt = $db->query($requete);
    $stmt = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $stmt;
}

function getProject()
{
    $db = dbConnect();
    $requete = "SELECT * FROM projet";
    $stmt = $db->query($requete);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getEvents()
{
    $db = dbConnect();
    $requete = "SELECT * FROM evenements";
    $stmt = $db->query($requete);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getOneEvent()
{
    $db = dbConnect();
    $requete = "SELECT * FROM evenements WHERE id_event={$_GET["id"]}";
    $stmt = $db->query($requete);
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function detailEvent($event)
{
    $db = dbConnect();
    $requete = "SELECT * FROM evenements WHERE " . $event . "=id_event";
    $stmt = $db->query($requete);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// insérer un nouvel evenement
function insertEvent($titre, $contenu, $date)
{
    $db = dbConnect();
    // $auteur = $_SESSION['login'];
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $date = $_POST['date'];
    $insert = "INSERT INTO evenements (id_event, nom_event, description_event, date_event, img_event) VALUES (NULL,'$titre','$contenu', '$date','test')";
    $db->query($insert);
};

function editEvent($id, $title, $content, $date)
{
    $db = dbConnect();
    $id = $_POST['id'];
    $title = $_POST['titre'];
    $content = $_POST['contenu'];
    $date = $_POST['date'];
    $query = 'UPDATE evenements SET nom_event ="' . $title . '", description_event ="' . $content . '", date_event ="' . $date . '" WHERE id_event ="' . $id . '"';
    $db->query($query);
}

function detailProjet($projet)
{
    $db = dbConnect();
    $requete = "SELECT * FROM projet WHERE " . $projet . "=id_projet";
    $stmt = $db->query($requete);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

// insérer un nouvel evenement
function insertProjet($titre, $description, $auteur, $image, $module)
{
    $db = dbConnect();
    // $auteur = $_SESSION['login'];
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $date = $_POST['date'];
    $insert = "INSERT INTO projet (id_projet, titre, description, auteur, image, ext_module) VALUES (NULL,'$titre', '$description', '$auteur', '$image', '$module')";
    $db->query($insert);
};

function editProjet($id, $title, $content, $date)
{
    $db = dbConnect();
    $id = $_POST['id'];
    $title = $_POST['titre'];
    $content = $_POST['contenu'];
    $date = $_POST['date'];
    $query = 'UPDATE evenements SET nom_event ="' . $title . '", description_event ="' . $content . '", date_event ="' . $date . '" WHERE id_event ="' . $id . '"';
    $db->query($query);
}
