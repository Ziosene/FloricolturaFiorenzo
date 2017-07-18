<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 12:01
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/FotogalleryDAO.php");
require_once(dirname(__FILE__)."/../../../class/util/UploadUtil.php");

$uploader = new UploadUtil();

$id=$_POST['idDel'];

$dBManger = new DBManager();
$DAO = new FotogalleryDAO($dBManger->getConnection());

$fotogallery = $DAO->retrieveFotogalleryById($id);
$uploader->deleteImage($fotogallery->getCategoryName()."/".$fotogallery->getFilename());
$DAO->deleteFotogallery($id);

header("location:../../fotogallery.php?delete=success");