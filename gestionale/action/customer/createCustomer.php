<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 24/02/17
 * Time: 15.23
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/ClientiDAO.php");

$name       = $_POST['g-nome'];
$surname    = $_POST['g-cognome'];
$email      = $_POST['g-em'];
$password   = $_POST['g-pass'];
$password2   = $_POST['g-pass2'];

$dBManger = new DBManager();
$DAO = new ClientiDAO($dBManger->getConnection());

if(!$name || !$surname || !$password || !$email || $password != $password2)
    header("location:../../clienti.php?register=invpwd");
else {

    $exist = $DAO->existCustomer($email);

    if (!$exist) {
        $DAO->createCustomer($name, $surname, $email, $password);
        header("location:../../clienti.php?new=success");
    } else {
        //Esiste già ridò l'errore
        header("location:../../clienti.php?register=duplicate");
    }
}