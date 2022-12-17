<?php
  include("base.php");
  include("conexion.php");

  $conexion = conexion();

  $id = $_GET["id"];

  //echo $id;

  $sql = "SELECT * FROM oradores WHERE id=$id";
  $query = mysqli_query($conexion, $sql);
  $fila = mysqli_fetch_array($query);
?>

<div class="container w-75 my-3">
    <h3 class="text-center my-3">Editar Orador</h3>  
    <div class="card p-3 my-5">

        <form action="editarOrador.php" method="POST" class="row g-3 my-3">
            <div class="col d-none">
                <input class="" type="text" name="id" id="id" value="<?php echo $fila["id"] ?>">
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila["nombre"] ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $fila["apellido"] ?>">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-6">
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $fila["email"] ?>">
                </div>
            </div>

            <div class="row row mb-3">
                <label for="temario" class="col-sm-2 col-form-label">Temario:</label>
                <div class="col-md-6">
                    <textarea class="form-control" name="temario" id="textArea" rows="3"><?php echo $fila["temario"]?></textarea>
                </div>
            </div>
            <div class="row row justify-content-md-center">
                <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-lg btn-block w-50">Modificar</button>
                </div>
            </div>

        </form>
    </div>
</div>

<?php
    include("footer.php");
?>
