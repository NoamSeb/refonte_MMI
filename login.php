<?php session_start();
include('./model.php');
include("./connexion.php");

if(isset($_GET["action"]) && $_GET["action"] == 'login') {
	if (isset($_POST["allez"])) {
	$login = logIn();
	switch ($login) {
		case 1:
			header('Location:./admin/dashboard.php');
			break;
		case 2:
			$err = "password";
			// header('Location:login.php?action=login&err=password');
			break;
		case 3:
			$err = "login";
			// header('Location:login.php?action=login&err=username');
			break;
	}}
};
include('./vuelogin.php');
?>
