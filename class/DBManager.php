<?php

/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 10:28
 *
 * Classe per la gestione delle connessioni
 */
class DBManager
{
    private $user       = "Sql530120";
    private $password   = "39b80652";
    private $database   = "Sql530120_1";

    public $conn;

    /*
     * Crea un poll
     * */
    function getConnection(){
        if( !$this->conn){
            $this->conn = mysqli_connect("62.149.150.149", $this->user, $this->password,  $this->database) or exit("Connection Error");
        }

        return $this->conn;
    }

    /*
     * Chiude un poll
     * */
    function closeConn(){
        mysqli_close($this->conn);
        $this->conn = null;
    }

}