<?php
    require_once(dirname(__FILE__).'/../class/DBManager.php');
    require_once(dirname(__FILE__).'/../class/dao/StatisticDAO.php');

    $db = new DBManager();
    $statDAO = new StatisticDAO($db->getConnection());
    $statDAO->manageConnStoreData();

?>