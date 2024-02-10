<?php
include('../header.php');
include('../navbar.php');
?>
<br>


<h2 class="text-center pb-2">LISTA PACIENTES</h2>
<div class="col-12">
    <table class="table">
        <thead class="bg-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Identificacion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha nacimiento</th>
                <th scope="col">Eps</th>
                <th scope="col" type="Password">Password</th>
                


            </tr>
        </thead>
        <tbody>
            <?php
            include("../modelo/conexion.php");
            $sql = $conexion->query("select * from paciente");
            while ($datos = $sql->fetch_object()) {
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <?= $datos->id ?>
                    </td>
                    <td>
                        <?= $datos->nombre ?>
                    </td>
                    <td>
                        <?= $datos->telefono ?>
                    </td>
                    <td>
                        <?= $datos->fechanac ?>
                    </td>
                    <td>
                        <?= $datos->eps ?>
                    </td>
                    <td >
                        <?= $datos->password ?>
                    </td>
 
                </tr>

            <?php }
            ?>