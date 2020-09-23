<?php
    session_start();
    print_r($_POST);
    if(isset($_POST['username']) && isset($_POST['pass'])){
        echo("password ok and user name also ok");
    }else{
        echo("password not ok");
    }
?>
<?php

    require_once('dataBase.php');
    require_once('Main.class.php');
    require_once("db.php");

    $main = new Main; 
    
     $DB = new DB;

     $DB->conn = $conn;
     $pass = md5($_POST['pass']);

     echo($pass);
     $username = $_POST['username'];
     

     if($DB->isAvailable("login"," WHERE username LIKE '$username' AND password = '$pass';")){
        echo("user available");
        $_SESSION['username'] = "$username";
        header("Location:index.php");
     }else{
        header("Location:login.php");
     }

    //  foreach($arr as $data){

    //     $main->userContainers($data['username']);
    //  }


     $conn->close();
?>




