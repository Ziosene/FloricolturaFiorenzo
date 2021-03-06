<?php

/**
 * Created by PhpStorm.
 * User: william
 * Date: 26/01/17
 * Time: 12.09
 */
require_once(dirname(__FILE__) . "/../domain/PlannedMail.php");
class PlannedMailDAO
{
    private $conn;

    function PlannedMailDAO($conn){
        $this->conn = $conn;
    }

    function createPlannedMail($plannedmail){
        $prepare = $this->conn->prepare("INSERT INTO plannedmail (oggetto,testo,sent) VALUES (?,?,?)");
        $prepare->bind_param("sss", $plannedmail->getOggetto(), $plannedmail->getTesto(), $plannedmail->getSent());
        if(!$prepare->execute()){
            echo "MySQL error: ". $this->conn->error;
            exit();
        }
    }



    function sentScheduledEmail($id){
        $prepare = $this->conn->prepare("UPDATE plannedmail set sent = 'Spedite' WHERE id = ?");
        $prepare->bind_param("i",$id);
        $prepare->execute();
    }

    function retrieveScheduledPlannedMail(){

        $result = mysqli_query($this->conn,"SELECT id,oggetto,testo,sent FROM plannedmail WHERE sent = 'In Attesa'");
        if(mysqli_num_rows($result) > 0) {
            for($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);
                $newsletter[$i] = new PlannedMail();
                $newsletter[$i]->setId($row[0]);
                $newsletter[$i]->setOggetto($row[1]);
                $newsletter[$i]->setTesto($row[2]);
                $newsletter[$i]->setSent($row[3]);
            }
        }
        return $newsletter;
    }

    function deletePlannedMail($id){

        $prepare = $this->conn->prepare("DELETE FROM plannedmail WHERE id = ?");
        $prepare->bind_param("i",$id);
        $prepare->execute();
    }

    function numPlannedMail(){

        $result = mysqli_query($this->conn,"SELECT count(id) FROM plannedmail");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else
            return 0;
    }
}