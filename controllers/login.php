<?php
require_once('../model.php');

$result = connectUser();
if ($result == false){
    require_once ('../login.php');
}else{
    session_start();
    $_SESSION['login']=$result['login'];
    $_SESSION['id']=$result['id_user'];
    header('location: ../backoffice/main.php');
}
?>