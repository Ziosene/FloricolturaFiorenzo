<?php

/**
 * Created by PhpStorm.
 * User: william
 * Date: 26/01/17
 * Time: 12.09
 */
require_once(dirname(__FILE__) . "/../domain/Fotogallery.php");
class FotogalleryDAO
{
    private $conn;
    function FotogalleryDAO($conn){
        $this->conn = $conn;
    }

    function createFotogallery($fotogallery){

        $prepare = $this->conn->prepare("INSERT INTO fotogallery (categoryId,nome,descrizione,filename) VALUES (?,?,?,?)");
        $prepare->bind_param("isss",$fotogallery->getCategoryId(),$fotogallery->getNome(),$fotogallery->getDesc(),$fotogallery->getFilename());
        $prepare->execute();

    }

    function retrieveFotogallery(){

        $result = mysqli_query($this->conn,"SELECT t.id,c.nome,t.nome,t.descrizione,t.filename FROM fotogallery t left join categorie c on c.id = t.categoryId");
        if(mysqli_num_rows($result) > 0) {
            for($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);
                $fotogallerys[$i] = new Fotogallery();
                $fotogallerys[$i]->setId($row[0]);
                $fotogallerys[$i]->setCategoryName($row[1]);
                $fotogallerys[$i]->setNome($row[2]);
                $fotogallerys[$i]->setDesc($row[3]);
                $fotogallerys[$i]->setFilename($row[4]);
            }
        }
        return $fotogallerys;
    }

    function retrieveFotogalleryShowroom(){

        $result = mysqli_query($this->conn,"SELECT t.id,c.nome,t.nome,t.descrizione,t.filename FROM fotogallery t left join categorie c on c.id = t.categoryId ORDER by t.id LIMIT 20");
        if(mysqli_num_rows($result) > 0) {
            for($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);
                $fotogallerys[$i] = new Fotogallery();
                $fotogallerys[$i]->setId($row[0]);
                $fotogallerys[$i]->setCategoryName($row[1]);
                $fotogallerys[$i]->setNome($row[2]);
                $fotogallerys[$i]->setDesc($row[3]);
                $fotogallerys[$i]->setFilename($row[4]);
            }
        }
        return $fotogallerys;
    }

    function retrieveFotogalleryByCategory($catId){

        $result = mysqli_query($this->conn,"SELECT t.id,c.nome,t.nome,t.descrizione,t.filename FROM fotogallery t left join categorie c on c.id = t.categoryId WHERE c.id = ".$catId);
        if(mysqli_num_rows($result) > 0) {
            for($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);
                $fotogallerys[$i] = new Fotogallery();
                $fotogallerys[$i]->setId($row[0]);
                $fotogallerys[$i]->setCategoryName($row[1]);
                $fotogallerys[$i]->setNome($row[2]);
                $fotogallerys[$i]->setDesc($row[3]);
                $fotogallerys[$i]->setFilename($row[4]);
            }
        }
        return $fotogallerys;
    }

    function retrieveFotogalleryById($id){

        $result = mysqli_query($this->conn,"SELECT t.id,c.nome,t.nome,t.descrizione,t.filename FROM fotogallery t left join categorie c on c.id = t.categoryId WHERE t.id = ".$id);
        if(mysqli_num_rows($result) > 0) {
            for($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);
                $fotogallery = new Fotogallery();
                $fotogallery->setId($row[0]);
                $fotogallery->setCategoryName($row[1]);
                $fotogallery->setNome($row[2]);
                $fotogallery->setDesc($row[3]);
                $fotogallery->setFilename($row[4]);
            }
        }
        return $fotogallery;
    }

    function deleteFotogallery($id){
        $prepare = $this->conn->prepare("DELETE FROM fotogallery WHERE id = ?");
        $prepare->bind_param("i",$id);
        $prepare->execute();
    }

    function existFotogallery($name){
        $result = mysqli_query($this->conn,"SELECT count(id) FROM fotogallery where LOWER(nome) = LOWER('".$name."')");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else return 0;
    }

    function existFotogalleryByFilename($filename){
        $result = mysqli_query($this->conn,"SELECT count(id) FROM fotogallery where LOWER(filename) = LOWER('".$filename."')");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else return 0;
    }

    function numFotogallery(){
        $result = mysqli_query($this->conn,"SELECT count(id) FROM fotogallery");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else
            return 0;
    }


}