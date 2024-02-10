<?php

include('../header.php');

if (!empty($_POST["btnmodificar"])){
    if (!empty($_POST["fecha"]) and 
    !empty($_POST["hora"]) and 
    !empty($_POST["id_paciente"]) and 
    !empty($_POST["nombre_med"]) and 
    !empty($_POST["estadoCita"]) and 
    !empty($_POST["especialidad"])) 
    {

        $idCita = $_POST["idCita"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $id_paciente = $_POST["id_paciente"];
        $nombre_med = $_POST["nombre_med"];
        $especialidad = $_POST["especialidad"];
        $estadoCita = $_POST["estadoCita"];

        $sql = $conexion->query("UPDATE citas_sena.cita SET fecha ='$fecha', hora='$hora' , id_paciente = $id_paciente, nombre_med ='$nombre_med', especialidad ='$especialidad', estadoCita ='$estadoCita' WHERE idCita = '$idCita' ");
        if ($sql == 1) {
            echo '<div class="alert alert-success">CITA REGISTRADA</div>';
            echo '<script>
            setTimeout(function() {
                window.location.href = "./modulo_citas.php";
            }, 5000);
          </script>';

        } else {
            echo '<div class="alert alert-danger">ERROR CITA NO REGISTRADO</div>';
        }
    } else {
        echo '<div class="alert alert-danger">ALGUNOS CAMPOS FALTAN POR DILIGENCIAR </div>';

    }

}
?>