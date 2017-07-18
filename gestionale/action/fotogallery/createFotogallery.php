<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 12:01
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/FotogalleryDAO.php");
require_once(dirname(__FILE__)."/../../../class/domain/Fotogallery.php");
require_once(dirname(__FILE__)."/../../../class/dao/CategoryDAO.php");
require_once(dirname(__FILE__)."/../../../class/util/UploadUtil.php");

$uploader = new UploadUtil();

$name   =$_POST['nome'];
$desc   =$_POST['desc'];
$cat    =$_POST['cat'];
$img    =$_FILES['img'];

$dBManger  = new DBManager();
$fotogalleryDAO = new FotogalleryDAO($dBManger->getConnection());
$catDAO    = new CategoryDAO($dBManger->getConnection());

$catId = $catDAO->retrieveIdByName($cat);

$exist = $fotogalleryDAO->existFotogallery($name);
if(!$exist){
    $pathImg = $uploader->uploadImage($img,str_replace(" ","",$name),$cat);
    $fotogallery = new Fotogallery();
    $fotogallery->setNome($name);
    $fotogallery->setCategoryId($catId);
    $fotogallery->setDesc($desc);
    $fotogallery->setFilename($pathImg);
    $fotogalleryDAO->createFotogallery($fotogallery);
    header("location:../../fotogallery.php?new=success");
}else{
    //Esiste già ridò l'errore
    header("location:../../fotogallery.php?new=duplicate");
}

