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

    function retrieveNewsletter(){

        $result = mysqli_query($this->conn,"SELECT * FROM newsletter");
        if(mysqli_num_rows($result) > 0) {
            for($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);
                $newsletter[$i] = new Newsletter();
                $newsletter[$i]->setId($row[0]);
                $newsletter[$i]->setEmail($row[1]);
                $newsletter[$i]->setNomeCognome($row[2]);
            }
        }
        return $newsletter;
    }

    function existNewsletter($email){

        $result = mysqli_query($this->conn,"SELECT count(id) FROM newsletter where LOWER(email) = LOWER('".$email."')");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else return 0;
    }

    function deleteNewsletter($id){

        $prepare = $this->conn->prepare("DELETE FROM newsletter WHERE id = ?");
        $prepare->bind_param("i",$id);
        $prepare->execute();
    }

    function numEmail(){

        $result = mysqli_query($this->conn,"SELECT count(id) FROM newsletter");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else
            return 0;
    }

}