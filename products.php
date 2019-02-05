<?php include("db.php"); ?>

<?php include_once 'includes/header.php'; ?>

  <?php include("includes/nav.php"); ?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="save_product.php" method="POST">
                        <div class="form-group">
                            <label for="name_product">Nombre</label>
                            <input type="text" class="form-control" autofocus name="name_product" id="name_product" aria-describedby="helpId" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="description_product">Descripcion</label>
                            <textarea class="form-control" name="description_product" id="description_product" rows="2" placeholder="Descripcion"></textarea>
                        </div>
                        <input type="submit" value="Guardar" name="save_product" id="" class="btn btn-success btn-block" />
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
        <div class="card">
          <div class="card-body">
           <table class="table table-bordered">
               <thead>
                   <tr>
                       <th>Nombre</th>
                       <th>Descripcion</th>
                       <th>Accion</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                   $query = "SELECT * FROM products";
                   $resul_products = mysqli_query($con,$query);

                   while($row = mysqli_fetch_array($resul_products)){?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td>
                            <a href="edit_product.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
                            <a href="delete_product.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt" aria-hidden="true"></i></a>
                        </td>
                   </tr>
                <?php
                   }
                   ?>
               </tbody>
           </table>
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



