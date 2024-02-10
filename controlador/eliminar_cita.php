<?php

include('../header.php');

if (!empty($_GET["idCita"])) {
    $idCita = $_GET["idCita"];
    $sql =$conexion ->query (" DELETE FROM citas_sena.cita where idCita=$idCita");
                
            if ($sql == 1) {
                echo '<div class="alert alert-success">CITA ELIMINADA CORRECTAMENTE</div>';
                echo '<script>
                setTimeout(function() {
                    window.location.href = "./modulo_citas.php";
                }, 3000);
                </script>';
                
            } else {
                echo '<div class="alert alert-danger">ERROR CITA NO ELIMINADA</div>';
            }
        } 
    


?>