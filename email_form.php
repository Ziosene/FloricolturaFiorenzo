<?php

// Genera un boundary
$mail_boundary = "=_NextPart_" . md5(uniqid(time()));

$to = "info@floricolturafiorenzo.it";
$subject = "Mail inviata dal sito: ".$_POST['subject'];
$sender = $_POST['email'];


$headers = "From: $sender\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: multipart/alternative;\n\tboundary=\"$mail_boundary\"\n";
$headers .= "X-Mailer: PHP " . phpversion();

// Corpi del messaggio nei due formati testo e HTML
$text_msg = $_POST['messageEmail'];

// Costruisci il corpo del messaggio da inviare
$msg = "This is a multi-part message in MIME format.\n\n";
$msg .= "--$mail_boundary\n";
$msg .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
$msg .= "Content-Transfer-Encoding: 8bit\n\n";
$msg .= "Email inviata da: ".$_POST['name'].".\n\n".$text_msg;  // aggiungi il messaggio in formato text

// Boundary di terminazione multipart/alternative
$msg .= "\n--$mail_boundary--\n";

if($_POST['saveemail'] = 'vero'){
    include "class/DBManager.php";
    include "class/domain/Newsletter.php";
    include "class/dao/NewsletterDAO.php";

    $db= new DBManager();
    $newsDAO = new NewsletterDAO($db->getConnection());
    $newsletterAcc = new Newsletter();
    $newsletterAcc->setEmail($_POST['email']);
    $newsletterAcc->setNomeCognome($_POST['name']);
    $controlEmail = $newsDAO->existNewsletter($_POST['email']);
    if($controlEmail == 0) {
        $newsDAO->createNewsletter($newsletterAcc);
    }
}

if (mail($to, $subject, $msg, $headers, "-f$sender")) {
    echo "ok";
} else {
    echo "Errore nell'invio dell mail.";
}

?>