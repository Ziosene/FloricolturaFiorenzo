<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 12:01
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/CategoryDAO.php");

$id=$_POST['idDel'];

$dBManger = new DBManager();
$DAO = new CategoryDAO($dBManger->getConnection());
$DAO->deleteCategory($id);

header("location:../../categorie.php?delete=success");