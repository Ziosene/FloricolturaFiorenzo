<?php

/**
 * Created by PhpStorm.
 * User: William
 * Date: 07/10/2016
 * Time: 19:27
 */

require_once("DBManager.php");
class Login
{
    function signin($username,$password){

        $dbManager = new DBManager();
        $conn = $dbManager->getConnection();

        $prepare = $conn->prepare("SELECT count(*) FROM gestionaleUser WHERE username= ? and password= ?");
        $prepare->bind_param("ss",$username,MD5($password));
        $prepare->execute();
        $prepare->bind_result($result);
        $prepare->fetch();

        return $result;
    }

    function changePwd($password){

        $dbManager = new DBManager();
        $conn = $dbManager->getConnection();

        $prepare = $conn->prepare("UPDATE gestionaleUser SET password = ? WHERE id = 1");
        $prepare->bind_param("s",MD5($password));
        $prepare->execute();
    }

    function signinCustomer($email,$password){

        $dbManager = new DBManager();
        $conn = $dbManager->getConnection();

        $prepare = $conn->prepare("SELECT count(*) FROM clienti WHERE email= ? and password= ?");
        $prepare->bind_param("ss",$email,MD5($password));
        $prepare->execute();
        $prepare->bind_result($result);
        $prepare->fetch();

        return $result;
    }

    function registerCustomerSession($email,$password){
        session_start();
        $_SESSION['customer'] = $email;
        $_SESSION['cpassword'] = $password;
    }

    function checkCustomerLoginStatus(){
        session_start();
        if(!$_SESSION['customer']){
            header("location:../portal.php");
            return "failed";
        }
    }

    function registerSession($username,$password){
        session_start();
        $_SESSION['myusername'] = $username;
        $_SESSION['mypassword'] = $password;
    }

    function checkLoginStatus(){
        session_start();
        if(!$_SESSION['myusername']){
            header("location:../gestionale/index.php");
            return "failed";
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header("location:../index.php");
    }

}