<?php

include('../header.php');

if (!empty($_POST["btnsolicitar"])) {
    if (!empty($_POST["fecha"]) and 
    !empty($_POST["hora"]) and 
    !empty($_POST["id_paciente"]) and 
    !empty($_POST["nombre_med"]) and 
    !empty($_POST["especialidad"])and 
    !empty($_POST["estadoCita"])
    ) 
    {
        echo "SOLICITUD DE CITA CORRECTA";


        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $id_paciente = $_POST["id_paciente"];
        $nombre_med = $_POST["nombre_med"];
        $especialidad = $_POST["especialidad"];
        $estadoCita = $_POST["estadoCita"];

        $sql = $conexion->query("INSERT INTO citas_sena.cita ( fecha, hora, id_paciente , nombre_med , especialidad, estadoCita ) VALUES ( '$fecha' , '$hora' , $id_paciente ,'$nombre_med', '$especialidad','$estadoCita')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">CITA REGISTRADA</div>';
            echo '<script>
            setTimeout(function() {
                window.location.href = "";
            }, 3000);
          </script>';

        } else {
            echo '<div class="alert alert-danger">ERROR CITA NO REGISTRADO</div>';
        }
    } else {
        echo '<div class="alert alert-danger">ALGUNOS CAMPOS FALTAN POR DILIGENCIAR </div>';

    }

}
?>

