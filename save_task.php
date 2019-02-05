<?php

include("db.php");

if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    //echo $title;
    //echo $description;

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result =mysqli_query($con, $query);
    if(!$result){
        die("Faild Save");
    }else{
        echo "Save";
        $_SESSION['message'] = 'Task Save Succesfully';
        $_SESSION['message_type'] = "success";
        header("Location:index.php");
    }


}

?>
