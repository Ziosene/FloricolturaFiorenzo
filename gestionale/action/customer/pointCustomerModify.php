<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 12:01
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/ClientiDAO.php");

$id=$_POST['idPoint'];
$point=$_POST['g-punti'];

$dBManger = new DBManager();
$DAO = new ClientiDAO($dBManger->getConnection());

try{
    $DAO->updateCustomerPoint($id,$point);
    header("location:../../clienti.php?action=success");
} catch (Exception $e) {
    echo $e->getTraceAsTring();
}

