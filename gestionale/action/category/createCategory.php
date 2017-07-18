<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 12:01
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/CategoryDAO.php");

$name=$_POST['nome'];

$dBManger = new DBManager();
$DAO = new CategoryDAO($dBManger->getConnection());

$exist = $DAO->existCategory($name);
if(!$exist){
    $DAO->createCategory($name);
    header("location:../../categorie.php?new=success");
}else{
    //Esiste già ridò l'errore
    header("location:../../categorie.php?new=duplicate");
}