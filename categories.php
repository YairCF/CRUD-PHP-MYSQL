<?php include_once 'db.php'; ?>

<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/nav.php'; ?>


<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="save_categories.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nameCategories" id="nameCategories" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descriptionCategories" id="descriptionCategories" rows="2" class="form-control" placeholder="Descripcion"></textarea>
                    </div>
                    <input type="submit" value="Guardar" name="save_categories" class="btn btn-success btn-block" id="btnCategories">
                </form>
             </div>
        </div>
        
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM categories";
                        $resultado_categories = mysqli_query($con, $query);

                        while($row = mysqli_fetch_array($resultado_categories)){ ?>
                    <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                            <td>
                                <a href="edit_categories.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                <a href="delete_categories.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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


<?php include_once 'includes/footer.php'; ?>