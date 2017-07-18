<?php

/**
 * Created by PhpStorm.
 * User: william
 * Date: 27/01/17
 * Time: 14.51
 */
class StatisticDAO
{
    private $conn;

    function StatisticDAO($conn)
    {
        $this->conn = $conn;
    }

    function manageConnStoreData()
    {
        try {
            $ip = $_SERVER['REMOTE_ADDR'];
            $viewA = mysqli_query($this->conn,"SELECT viewCounter FROM statistic WHERE ip = '" . $ip . "'");
            $view = mysqli_fetch_array($viewA);
            if ($view[0]) {
                $prepare = $this->conn->prepare("UPDATE statistic set viewCounter= ? WHERE ip = ?");
                $v = $view[0] + 1;
                $prepare->bind_param("is",$v,$ip);
                $prepare->execute();
            }
            else {
                $prepare = $this->conn->prepare("INSERT INTO statistic (ip,viewCounter) VALUES (?,1)");
                $prepare->bind_param("s",$ip);
                $prepare->execute();
            }
        } catch (Exception $e) {

        }

    }

    function visualizzazioni(){
        $result = mysqli_query($this->conn,"SELECT SUM(viewCounter) FROM statistic");
        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_array($result);
            return $row[0];
        }
        else
            return 0;
    }
}