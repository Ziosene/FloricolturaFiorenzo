<?php
/**
 * Created by PhpStorm.
 * User: Lorenzo.Senesi
 * Date: 23/08/2017
 * Time: 17:52
 */

require_once('../../class/Login.php');
require_once('../../class/DBManager.php');
require_once("../../class/dao/NewsletterDAO.php");
require_once("../../class/dao/PlannedMailDAO.php");


$db = new DBManager();
$plannedDAO = new PlannedMailDAO($db->getConnection());
$newsletterDAO = new NewsletterDAO($db->getConnection());

$mailPlanned = $plannedDAO->retrieveScheduledPlannedMail();

if(isset($mailPlanned)) {
    $newsRes = $newsletterDAO->retrieveNewsletter();
    foreach ($mailPlanned as $mail) {
        foreach ($newsRes as $news) {

            $mail_boundary = "=_NextPart_" . md5(uniqid(time()));

            $to = $news->getEmail();
            $subject = $mail->getOggetto();
            $sender = "info@floricolturafiorenzo.it";

            $headers = "From: $sender\n";
            $headers .= "MIME-Version: 1.0\n";
            $headers .= "Content-Type: multipart/alternative;\n\tboundary=\"$mail_boundary\"\n";
            $headers .= "X-Mailer: PHP " . phpversion();

            // Corpi del messaggio nei due formati testo e HTML
            $text_msg = $mail->getTesto();

            // Costruisci il corpo del messaggio da inviare
            $msg = "This is a multi-part message in MIME format.\n\n";
            $msg .= "--$mail_boundary\n";
            $msg .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
            $msg .= "Content-Transfer-Encoding: 8bit\n\n".$text_msg;

            // Boundary di terminazione multipart/alternative
            $msg .= "\n--$mail_boundary--\n";

            mail($to, $subject, $msg, $headers, "-f$sender");
        }
        $plannedDAO->sentScheduledEmail($mail->getId());
    }
}


?>