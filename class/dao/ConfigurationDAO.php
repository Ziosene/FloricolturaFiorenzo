<?php

/**
 * Created by PhpStorm.
 * User: Lorenzo.Senesi
 * Date: 06/09/2017
 * Time: 14:37
 */

class ConfigurationDAO{

    private $conn;

    function ConfigurationDAO($conn){
        $this->conn = $conn;
    }

    function retrieveConfiguration(){
        $result = mysqli_query($this->conn,"SELECT chiave,valore FROM configuration");
        if(mysqli_num_rows($result) > 0) {
            $conf = array();
            for($i = 0; $i < mysqli_num_rows($result); $i++) {
                $row = mysqli_fetch_array($result);
                $conf[$row[0]] = $row[1];
            }
        }
        return $conf;
    }

    function saveConfiguration($conf){
        $prepare = $this->conn->prepare("UPDATE configuration SET valore = ? WHERE chiave = ?");
        foreach ($conf as $key => $value) {
            $prepare->bind_param("ss",$value,$key);
            $prepare->execute();
        }
    }
}