<?php
/**
 * Created by PhpStorm.
 * User: Lorenzo.Senesi
 * Date: 06/09/2017
 * Time: 14:46
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/dao/ConfigurationDAO.php");

$db = new DBManager();
$configurationDAO = new ConfigurationDAO($db->getConnection());
$arrayValori = $configurationDAO->retrieveConfiguration();

foreach ($arrayValori as $key => $value) {
    $arrayValori[$key] = $_POST[$key];
}

$configurationDAO->saveConfiguration($arrayValori);

header("location:../../orari.php?save=success");