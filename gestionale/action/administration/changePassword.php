<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 08/10/2016
 * Time: 12:01
 */

require_once(dirname(__FILE__)."/../../../class/DBManager.php");
require_once(dirname(__FILE__)."/../../../class/Login.php");

$pwd   =$_POST['ad-pass'];
$pwd2   =$_POST['ad-pass2'];

if(!$pwd || !$pwd2 || $pwd != $pwd2){
    header("location:../../dashboard.php");
}else{
    $login = new Login();
    $login->changePwd($pwd);
    header("location:../logout.php");
}