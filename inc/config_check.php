<?php require 'inc/dbConnect.php';


 session_start();
$us = $_SESSION['usuario'];
$sessionID = $_SESSION['sessionID'];



if($us && $sessionID){
 $sql = "SELECT usuario from usuarios where usuario='$us' and "
        . "sessionID = '$sessionID' and status='A' and statusCuenta='A' ";



$result = $conn->query($sql);
$row = $result->fetch_assoc();



if(!$row['usuario']){

        //QUITO LA SESSION PARA EVITAR INJECT
        session_start();
  $_SESSION['token']="";
  $_SESSION['sessionID']="";
 echo '<script>window.location.replace("login.php");</script>';
  
    }
}else{
     //QUITO LA SESSION PARA EVITAR INJECT
        session_start();
  $_SESSION['token']="";
  $_SESSION['sessionID']="";
    
  echo '<script>window.location.replace("login.php");</script>';
}


//echo '<script>window.alert("FIN DE SESSION '.$sql.$_SESSION['sessionID'].'");</script>';