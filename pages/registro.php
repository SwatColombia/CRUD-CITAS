<?php
include('../header.php');
include('../navbar.php');
?>
<br>

<div class="container col-6 text-center">
    <div class="text-center fw-bold text-xxl-center p-2 m-3">MODULO DE CITAS</div>
    <div class="row justify-content-center fw-bolder ">
        <div class="col-8 ">
            <form id="registroForm" method="post">
                <?php
                include "../modelo/conexion.php";
                include "../controlador/register.php"
                    ?>
                <br>
                <div class=" pt-2 mb-3">
                    <label for="exampleInputIdentificacion" class="form-label">Numero de Identificacion</label>
                    <input type="text" class="form-control" name="id" placeholder="Escribe tu identificacion">
                </div>
                <div class="mb-3">
                    <label for="exampleInputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre y apellidos">

                </div>
                <div class="mb-3">
                    <label for="exampleInputTelefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="telefono" placeholder="Telefono">

                </div>
                <div class="mb-3">
                    <label for="exampleInputFecha" class="form-label">Fecha Nacimiento</label>
                    <input type="date" class="form-control" name="fechanac" placeholder="Fecha Nacimiento">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEps" class="form-label">Entidad de salud</label>
                    <input type="text" class="form-control" name="eps" placeholder="Escribe tu EPS o IPS">

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Asigna tu password</label>
                    <input type="password" class="form-control" name="password" placeholder="Asigna una contraseña">

                </div>
                <div class="mb-3 form-check fw-lighter">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label for="exampleCheck1" class="form-check-label">Acepto terminos y condiciones</label>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrarme</button>
                </div>
            </form>
        </div>
    </div>
</div>