<?php
session_start();
$con = mysqli_connect("localhost","root","","task");


if(isset($con)){
    //echo "Conectado";
}else{
    //echo "Error";
}

?>