<?php

// Genera un boundary
$mail_boundary = "=_NextPart_" . md5(uniqid(time()));

$to = "info@floricolturafiorenzo.com";
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

// Invia il messaggio, il quinto parametro "-f$sender" imposta il Return-Path su hosting Linux
if (mail($to, $subject, $msg, $headers, "-f$sender")) {
    echo "ok";
} else {
    echo "fail";
}

?>