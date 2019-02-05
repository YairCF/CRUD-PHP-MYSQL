<?php
include("db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM products WHERE id = $id";
    mysqli_query($con,$query);

    header("Location:products.php");
}

?>