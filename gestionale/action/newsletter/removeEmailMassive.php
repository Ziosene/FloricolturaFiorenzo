<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 12:01
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/PlannedMailDAO.php");

$id=$_POST['idDeleteMail'];

$dBManger = new DBManager();
$DAO = new PlannedMailDAO($dBManger->getConnection());
$DAO->deletePlannedMail($id);

header("location:../../dashboard.php?delete=success");