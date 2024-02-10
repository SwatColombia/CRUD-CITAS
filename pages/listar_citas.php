<?php
include('../header.php');
include('../navbar.php');
?>
<br>




<div class="col-12">
    <table class="table">
        <thead class="bg-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">IdCita</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Identificacion</th>
                <th scope="col">Nombre Medico</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Estado de Cita</th>
               
                


            </tr>
        </thead>
        <tbody>
            <?php
            include("../modelo/conexion.php");
            $sql = $conexion->query("select * from cita");
            while ($datos = $sql->fetch_object()) {
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>
                <?= $datos->idCita ?>
              </td>
              <td>
                <?= $datos->fecha ?>
              </td>
              <td>
                <?= $datos->hora ?>
              </td>
              <td>
                <?= $datos->id_paciente ?>
              </td>
              <td>
                <?= $datos-> nombre_med ?>
              </td>
              <td>
                <?= $datos->especialidad ?>
              </td>
              <td class="py-2 ">
                <span class="badge bg-success">
                  <?= $datos->estadoCita ?>
                </span>
                
              </td>
                </tr>

            <?php }
            ?>