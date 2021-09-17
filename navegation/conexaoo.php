<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "concessionaria";

if ($conn = mysqli_connect($server, $user, $pass, $bd)) {
    //echo "Conectado!";
} else {
    echo "Error";
}
?>