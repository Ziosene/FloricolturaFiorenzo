<?php
/**
 * Created by PhpStorm.
 * User: Lorenzo.Senesi
 * Date: 24/08/2017
 * Time: 17:27
 */
    include "class/DBManager.php";
    include "class/domain/Newsletter.php";
    include "class/dao/NewsletterDAO.php";

    $db= new DBManager();
    $newsDAO = new NewsletterDAO($db->getConnection());
    $newsletterAcc = new Newsletter();
    $newsletterAcc->setEmail($_POST['emailNewsletter']);
    $controlEmail = $newsDAO->existNewsletter($_POST['emailNewsletter']);
    if($controlEmail == 0) {
        $newsDAO->createNewsletter($newsletterAcc);
    }
?>