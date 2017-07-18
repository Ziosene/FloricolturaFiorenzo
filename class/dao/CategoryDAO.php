<?php

/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 11:52
 */

require_once(dirname(__FILE__)."/../util/LabelValue.php");
class CategoryDAO
{
    private $conn;
    function CategoryDAO($conn){
        $this->conn = $conn;
    }

    /**
     * Ritorna il numero delle categorie
     * */
    function numCategory(){
        $result = mysqli_query($this->conn,"SELECT count(id) FROM categorie");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else
            return 0;
    }

    /**
     * Crea una categoria
     * */
    function createCategory($cat){
        $prepare = $this->conn->prepare("INSERT INTO categorie (nome) VALUES (?)");
        $prepare->bind_param("s",$cat);
        $prepare->execute();

        mkdir(dirname(__FILE__)."/../../resources/".$cat."/",0777) ;
    }

    /**
     * Cancella una categoria
     * */
    function deleteCategory($id){
        $prepare = $this->conn->prepare("DELETE FROM categorie WHERE id = ?");
        $prepare->bind_param("i",$id);
        $prepare->execute();
    }

    /**
     * Recupera tutte le categorie
     * */
    function retrieveCategorys(){

        $result = mysqli_query($this->conn,"SELECT id,nome FROM categorie");
        if(mysqli_num_rows($result) > 0) {
            for($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);
                $category[$i] = new LabelValue();
                $category[$i]->setValue($row[0]);
                $category[$i]->setLabel($row[1]);
            }
        }
        return $category;
    }

    function retrieveIdByName($name){
        $result = mysqli_query($this->conn,"SELECT id FROM categorie where nome = '".$name."'");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else return NULL;
    }

    function retrieveNameById($id){
        $result = mysqli_query($this->conn,"SELECT nome FROM categorie where id = ".$id);
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else return NULL;
    }

    function existCategory($name){
        $result = mysqli_query($this->conn,"SELECT count(id) FROM categorie where LOWER(nome) = LOWER('".$name."')");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else return 0;
    }

    /**
     * Recupera tutte le categorie
     * */
//    function retrieveCategorys(){
//
//        $result = mysqli_query($this->conn,"SELECT id,nome,descrizione,img FROM categorie");
//        if(mysqli_num_rows($result) > 0) {
//            for($i = 0; $i < mysqli_num_rows($result); $i++) {
//                $row = mysqli_fetch_array($result);
//                $category[$i] = new Category();
//                $category[$i]->setId($row[0]);
//                $category[$i]->setName($row[1]);
//                $category[$i]->setDesc($row[2]);
//                $category[$i]->setImgPath($row[3]);
//            }
//        }
//        return $category;
//    }
//
//    /**
//     * Recuperata una categoria in base all'id
//     * */
//    function retrieveCategory($id){
//        $result = mysqli_query($this->conn,"SELECT id,nome,descrizione,img FROM categorie where id = ".mysqli_real_escape_string($this->conn,$id));
//        if(mysqli_num_rows($result) > 0)
//        {
//            $row = mysqli_fetch_array($result);
//            $category = new Category();
//            $category->setId($row[0]);
//            $category->setName($row[1]);
//            $category->setDesc($row[2]);
//            $category->setImgPath($row[3]);
//        }
//        return $category;
//    }
//
//    /**
//     * Controlla l'esistenza della categoria
//     * */
//    function existCategory($name){
//        $result = mysqli_query($this->conn,"SELECT count(id) FROM categorie where LOWER(nome) = LOWER('".$name."')");
//        if(mysqli_num_rows($result) > 0)
//        {
//            $row = mysqli_fetch_array($result);
//            return $row[0];
//        }
//        else return 0;
//    }

}