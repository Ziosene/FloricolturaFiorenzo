<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 12:01
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/ClientiDAO.php");

$id=$_POST['idDel'];

$dBManger = new DBManager();
$DAO = new ClientiDAO($dBManger->getConnection());

$DAO->deleteCustomerById($id);

header("location:../../clienti.php?delete=success");