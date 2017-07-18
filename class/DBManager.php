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
    private $user       = "";
    private $password   = "";
    private $database   = "";

    public $conn;

    /*
     * Crea un poll
     * */
    function getConnection(){
        if( !$this->conn){
            $this->conn = mysqli_connect(NULL, $this->user, $this->password,  $this->database) or exit("Connection Error");
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