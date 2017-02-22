<?php
$servername = "localhost";
$dbUser = "sistemas";
$dbPasswd = "wolf3333";
$dbname = "sysrey";

// Create connection
$conn = new mysqli($servername, $dbUser, $dbPasswd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo '<script>window.alert("FALLA EN TU CONEXION! '.$sql.$_SESSION['sessionID'].'");</script>'; 
} 