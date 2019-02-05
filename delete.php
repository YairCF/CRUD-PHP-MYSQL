<?php 

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        mysqli_query($con, $query);
        if(!$query){
            die("Fail Detele");
        }else{
            $_SESSION['message'] = "Task Delete Succesfully";
            $_SESSION['message_type'] = "danger";
            header("Location:index.php");
        }
    }




?>
