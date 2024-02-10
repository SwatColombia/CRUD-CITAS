<?php
include('../header.php');
include('../navbar.php');

include "../modelo/conexion.php";


$idCita = $_GET["idCita"];

$sql = $conexion->query("SELECT * FROM citas_sena.cita where idCita = $idCita");



?>
<br>


    <div class="col-4 p-3 m-auto">
      <form class="col-auto" method="post">

        <h2 class="text-center pb-2">MODIFICAR CITA</h2>
        <input type="hidden" name="idCita" value="<?= $_GET["idCita"]?>"> 
        <?php

        include "../controlador/modificar_cita.php";

        while ($datos = $sql->fetch_object()){ ?>

        <div class="mb-3" >
          <label for="fecha" class="form-label">Fecha Tentativa</label>
          <input type="date" class="form-control" placeholder="Fecha posible" name="fecha"  value="<?=$datos -> fecha?>">
        </div>
        <div class="mb-3">
          <label for="hora" class="form-label">Selecciona una hora</label>
          <input type="time" class="form-control" placeholder="Hora Posible" name="hora" value="<?=$datos -> hora?>">
        </div>
        <div class="mb-3">
          <label for="identificacion" class="form-label">Identificacion de Paciente</label>
          <input type="text" class="form-control" placeholder="Tu identificacion" name="id_paciente" id="formulario" value="<?=$datos ->id_paciente?>">
        </div>
        <div class="mb-3" width="32px">
          <label for="disabledSelect" class="form-label">Nombre Medico</label>
          <select id="disabledSelect" class="form-select" placeholder="Relaciona tu medico" name="nombre_med" value="<?=$datos ->nombre_med?>">
            <option value="Elije una" name="0">Elije una...</option>
            <option value="Juan Perez">Juan Perez-Pediatria</option>
            <option value="Claudia Melo">Claudia Melo-Medicina General</option>
            <option value="Myriam Sanchez">Myriam Sanchez-Fisiatria</option>
          </select>
        </div>

        <div class="mb-3" width="32px">
          <label for="disabledSelect" class="form-label">Especialidad</label>
          <select id="disabledSelect" class="form-select" placeholder="Relaciona la especialidad de tu medico" name="especialidad" value="<?=$datos ->especialidad?>">
            <option value="Elije una" name="0">Elije una...</option>
            <option value="Pediatría">Pediatría</option>
            <option value="Medicina General">Medicina General</option>
            <option value="Fisiatria">Fisiatria</option>
          </select>

        </div>
        <div class="mb-3">
          <label for="estado_cita" class="form-label">Estado de cita</label>
          <select id="disabledSelect" class="form-select" placeholder="Selecciona estado de tu cita" name="estadoCita" value="<?=$datos ->estadoCita?>">
            <option value="Elije estado de cita" name="0">Elije una...</option> 
            <option value="asignada">Asignada</option>
            <option value="pendiente">Pendiente</option>
            <option value="cumplida">Cumplida</option>
          </select>
        </div>


        <?php }


        ?>

        
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Acepto terminos y condiciones</label>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar cita</button>
        </div>

      </form>
    </div>