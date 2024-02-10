<?php
include('../header.php');
include('../navbar.php');
?>
<br>



<div class="container px-4">
<div class="col-12">
    <table class="table">
        <thead class="bg-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Medico</th>
                <th scope="col">Nombre Medico</th>
                <th scope="col">Especialidad</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            include("../modelo/conexion.php");
            $sql = $conexion->query("select * from medico");
            while ($datos = $sql->fetch_object()) {
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>
                <?= $datos->id ?>
              </td>
              <td>
                <?= $datos-> nombre ?>
              </td>
              <td>
                <?= $datos->especialidad ?>
              </td>
             
                </tr>
</div>
            <?php }
            ?>