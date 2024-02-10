<?php
include('../header.php');
include('../navbar.php');
?>
<br>

<div class="container-fluid px-4">
  <div class="text-center fw-bold text-xxl-center p-2 m-3" id="titulo">MODULO DE CITAS</div>
  <?php
  include "../modelo/conexion.php";
  include "../controlador/eliminar_cita.php";
  
  ?>
  <div class="row">
    <div class="col-md-4">
      <form class="col-auto" method="post">

        <h2 class="align-content-center">CREAR CITA</h2>


        <div class="mb-3">
          <label for="fecha" class="form-label">Fecha Tentativa</label>
          <input type="date" class="form-control" placeholder="Fecha posible" name="fecha">
        </div>
        <div class="mb-3">
          <label for="hora" class="form-label">Selecciona una hora</label>
          <input type="time" class="form-control" placeholder="Hora Posible" name="hora">
        </div>
        <div class="mb-3">
          <label for="identificacion" class="form-label">Identificacion de Paciente</label>
          <input type="text" class="form-control" placeholder="Tu identificacion" name="id_paciente" id="formulario">
        </div>
        <div class="mb-3" width="32px">
          <label for="disabledSelect" class="form-label">Nombre Medico</label>
          <select id="disabledSelect" class="form-select" placeholder="Relaciona tu medico" name="nombre_med">
            <option value="Elije una" name="0">Elije una...</option>
            <option value="Juan Perez">Juan Perez-Pediatria</option>
            <option value="Claudia Melo">Claudia Melo-Medicina General</option>
            <option value="Myriam Sanchez">Myriam Sanchez-Fisiatria</option>
          </select>
        </div>

        <div class="mb-3" width="32px">
          <label for="disabledSelect" class="form-label">Especialidad</label>
          <select id="disabledSelect" class="form-select" placeholder="Relaciona la especialidad de tu medico" name="especialidad">
            <option value="Elije una" name="0">Elije una...</option>
            <option value="Pediatría">Pediatría</option>
            <option value="Medicina General">Medicina General</option>
            <option value="Fisiatria">Fisiatria</option>
          </select>

        </div>
        <div class="mb-3">
          <label for="estado_cita" class="form-label">Estado de cita</label>
          <select id="disabledSelect" class="form-select" placeholder="Selecciona estado de tu cita" name="estadoCita">
            <option value="Elije estado de cita" name="0">Elije una...</option> 
            <option value="asignada">Asignada</option>
            <option value="pendiente">Pendiente</option>
            <option value="cumplida">Cumplida</option>
          </select>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Acepto terminos y condiciones</label>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary" name="btnsolicitar" value="ok">Solicitar cita</button>
        </div>

      </form>
    </div>
    <div class="col-lg-8">
      <table class="table" method="post">
        <thead class="bg-info">
          <tr>
            <th scope="col">No</th>
            <th scope="col">IdCita</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Documento Paciente</th>
            <th scope="col">Nombre Medico</th>
            <th scope="col">Especialidad</th>
            <th scope="col">Estado cita</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <script>
             function eliminar(){
                let respuesta = confirm ("Estas seguro de eliminar la cita");
                return respuesta;
               
             }
          </script>
          <?php
          
          include "../controlador/registro_cita.php";
          ?>
          <?php 
          $sql = $conexion->query("SELECT cita.idCita, cita.id_paciente, cita.fecha, cita.hora, cita.nombre_med, cita.especialidad, cita.estadoCita FROM citas_sena.cita");

          while ($datos = $sql->fetch_object()) {
            ?>
            <tr>
              <th class="row" class="align-items-center">1</th>
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
              
              <td>
                <a href="editar_cita.php?idCita=<?= $datos->idCita ?>"> 
                <span title="Modificar"> 
                  <i class="fa-solid fa-rotate fa-xl" style="color: #00f549;"></i></a>
                </span>
                <a onclick ="return eliminar()" href="modulo_citas.php?idCita=<?= $datos->idCita ?>">
                <span title="Eliminar">
                <i class="fa-solid fa-trash  fa-xl" style="color: #fa0025;"></i></a>
                </span>
                <a href="listar_citas.php"> 
                  <span title="Listar Citas"> 
                    <i class="fa-solid fa-list fa-xl" style="color: #1936c8;"></i></a>
          </span>
              </td>
            </tr>

          <?php }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>