<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/class/Login.php');

	$login = new Login();
    $login->checkLoginStatus();
?>