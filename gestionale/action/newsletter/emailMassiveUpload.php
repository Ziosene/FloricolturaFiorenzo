<?php


require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/domain/PlannedMail.php");
require_once(dirname(__FILE__)."/../../../class/dao/PlannedMailDAO.php");

if($_POST['oggetto'] && $_POST['testo']){
    $db = new DBManager();
    $plannedDAO = new PlannedMailDAO($db->getConnection());
    $planned = new PlannedMail();
    $planned->setOggetto($_POST['oggetto']);
    $planned->setTesto($_POST['testo']);
    $planned->setSent("In Attesa");
    $plannedDAO->createPlannedMail($planned);
}

header("location:../../dashboard.php?email=added");

?>