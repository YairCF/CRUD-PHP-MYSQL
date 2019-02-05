<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM products WHERE id = $id";
        $result_product = mysqli_query($con,$query);

    if(mysqli_num_rows($result_product) == 1){
        $row = mysqli_fetch_array($result_product);
        $name = $row['name'];
        $description = $row['description'];
    }


    if(isset($_POST['update_product'])){
        $id = $_GET['id'];
        $name = $_POST['name_product'];
        $description = $_POST['description_product'];

        $query = "UPDATE products SET name = '$name', description = '$description' WHERE id = '$id'";
        mysqli_query($con,$query);
        header("Location:products.php");
    }
}



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Update</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container m-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <form action="edit_product.php?id=<?php echo $_GET['id'];?>" method="POST">
                        <div class="form-group">
                            <label for="name_product">Nombre</label>
                            <input type="text" value="<?php echo $name; ?>" class="form-control" autofocus name="name_product" id="name_product" aria-describedby="helpId" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="description_product">Descripcion</label>
                            <textarea class="form-control" name="description_product" id="description_product" rows="2" placeholder="Descripcion"><?php echo $description;?></textarea>
                        </div>
                        <input type="submit" name="update_product" id="" class="btn btn-warning btn-block" value="Actualizar" />
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>