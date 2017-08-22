<?php

/**
 * Created by PhpStorm.
 * User: william
 * Date: 26/01/17
 * Time: 12.09
 */
require_once(dirname(__FILE__) . "/../domain/Newsletter.php");
class NewsletterDAO
{
    private $conn;

    function NewsletterDAO($conn){
        $this->conn = $conn;
    }

    function createNewsletter($newsletter){
        $prepare = $this->conn->prepare("INSERT INTO newsletter (email,nomeCognome) VALUES (?, ?)");
        $prepare->bind_param("ss", $newsletter->getEmail(), $newsletter->getNomeCognome());
        $prepare->execute();
    }

}