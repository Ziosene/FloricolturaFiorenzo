<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 12:01
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/NewsletterDAO.php");

$id=$_POST['idDelete'];

$dBManger = new DBManager();
$DAO = new NewsletterDAO($dBManger->getConnection());
$DAO->deleteNewsletter($id);

header("location:../../newsletter.php?delete=success");