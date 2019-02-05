<?php
    
    include_once 'db.php'; 

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "DELETE FROM categories WHERE id = $id";
        $result = mysqli_query($con, $query);

        if(result){
            header("Location:categories.php");
        }else{
            echo "<script> alert('Error'); </script>";
        }

    }

?>