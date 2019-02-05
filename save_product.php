<?php 

include("db.php");

if(isset($_POST['save_product'])){
    $name = $_POST['name_product'];
    $desc = $_POST['description_product'];
    
    header("Location:products.php");
    $query = "INSERT INTO products(name,description) VALUES ('$name','$desc')";
    mysqli_query($con,$query);
}



?>