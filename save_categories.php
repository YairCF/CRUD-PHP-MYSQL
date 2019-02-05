<?php

    include 'db.php';

    $nombre = $_POST['nameCategories'];
    $description = $_POST['descriptionCategories'];

    if(empty($nombre) || empty($description)){
        echo "<script> alert('Deber Ingresar los Datos'); </script>";
        
    }else{
        $query = "INSERT INTO categories (name, description) VALUES ('$nombre','$description')";
        $res = mysqli_query($con,$query);
        header("Location:categories.php");
    }


   


?>