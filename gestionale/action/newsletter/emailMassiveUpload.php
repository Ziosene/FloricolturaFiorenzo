<?php


require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/domain/PlannedMail.php");
require_once(dirname(__FILE__)."/../../../class/dao/PlannedMailDAO.php");

if($_POST['oggetto'] && $_POST['testo']){
    $db = new DBManager();
    $text = $_POST['testo']."\n\n\n"."Floricoltura Fiorenzo"."\n"."Via Cascina Villa 1, Cernusco Sul Naviglio (MI)"."\n"."+39 333 681 9062";
    $plannedDAO = new PlannedMailDAO($db->getConnection());
    $planned = new PlannedMail();
    $planned->setOggetto($_POST['oggetto']);
    $planned->setTesto($text);
    $planned->setSent("In Attesa");
    $plannedDAO->createPlannedMail($planned);
}

header("location:../../dashboard.php?email=added");

?>