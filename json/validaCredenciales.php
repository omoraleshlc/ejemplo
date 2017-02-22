<?php require_once '../inc/dbConnect.php';

$json_d = array();
$json_d = file_get_contents('php://input');
$obj_d = json_decode($json_d);
//$usuario = mysql_real_escape_string($obj_d->usuario);
//$q = mysql_real_escape_string($obj_d->q);
//$result_codigos = array();
//$entidad  = mysql_real_escape_string($obj_d->entidad);
//$data = mysql_real_escape_string($data['matricula']);

$usuario = $obj_d->user;
$password = md5($obj_d->passwd);

$usuario = mysql_real_escape_string($usuario);
$password = mysql_real_escape_string($password);

 
/*
    $split      = explode(" ", $q);
    $sql_like   = "";
    foreach ($split as $row){
        $sql_like .= " 
            UPPER(
                CONCAT_WS(' ', 
                    COALESCE(nombre1,''), 
                    COALESCE(nombre2,''), 
                    COALESCE(apellido1,''), 
                    COALESCE(apellido2,'')
                )
            ) LIKE '%$row%' AND";
    }
    if($sql_like != ""){
        $sql_like = substr($sql_like, 0, -3);
    }
    */
 
$data = array();
 $sql = "SELECT usuario,entidad from usuarios where usuario='$usuario' and "
        . "password = '$password' and status='A' and statusCuenta='A' ";



$result = $conn->query($sql);


    // output data of each row
    $row = $result->fetch_assoc();
      
        
        if($row['usuario']){
        $code = rand(1,100000);
        session_start();
        $_SESSION['sessionID']=$code;
        $_SESSION['usuario']=$row['usuario'];
        $_SESSION['entidad']=$row['entidad'];
        $sql = "UPDATE usuarios SET sessionID='$code' WHERE usuario='$usuario' ";
        $conn->query($sql);
        $data[] = array(
            'token'             => $code,
            'usuario' => $usuario
        );
        }else{
            $code ='';
            session_start();
            $_SESSION['sessionID']="";
            $_SESSION['usuario']="";
            $data[] = array(
            'token'             => "",
                'usuario' => ''
        );
        }
        
        
        
        
        
    
   
   
        //print json_encode($data);
       
   




 