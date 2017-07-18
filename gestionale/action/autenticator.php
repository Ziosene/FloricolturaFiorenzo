<?php

    require_once('../../class/Login.php');

    $login = new Login();

    // username and password sent from form
    $myusername=$_POST['username'];
    $mypassword=$_POST['password'];

    $result = $login->signin($myusername,$mypassword);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($result){
        $login->registerSession($myusername,$mypassword);
        header("location:../dashboard.php");
    }else {
        header("location:../index.php?errorLogIn=err");
    }

?>