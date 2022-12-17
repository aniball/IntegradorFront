  <?php
    include("base.php");
    include("conexion.php");

    $conexion = conexion();

    $oradores = "SELECT * FROM oradores";
    //guardamos el resultado de ejecutar la consulta
    $consulta = mysqli_query($conexion, $oradores);
  ?>  
    <h3 class="text-center my-3">Listado de Oradores Inscriptos</h3>  
    <section class="container my-3">
        <table class="table table-bordered mt-3">
            <thead>
                <th class="col-sm-2 text-center">Nombre</th>
                <th class="col-sm-2 text-center">Apellido</th>
                <th class="col-sm-2 text-center">Email</th>
                <th class="col-sm-4 text-center">Temario</th>
                <th class="col-sm-1 text-center">Operacion</th>
            </thead>
            <tbody>
              <?php                 
                  while($fila = mysqli_fetch_array($consulta)){
              ?>            
                <tr>
                    <td class="col-sm-2"><?php echo $fila["nombre"] ?></td>
                    <td class="col-sm-2 text-center"><?php echo $fila["apellido"] ?></td>
                    <td class="col-sm-2 text-center"><?php echo $fila["email"] ?></td>
                    <td class="col-sm-4 text-center"><?php echo $fila["temario"] ?></td>
                    <td>
                      <a href="formEditarItem.php?id=<?php echo $fila['id']?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                      <a href="eliminarOrador.php?id=<?php echo $fila['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
                  
              <?php
                  }              
              ?> 
            </tbody>
        </table>
    </section>

  <?php
    include("footer.php");
  ?>