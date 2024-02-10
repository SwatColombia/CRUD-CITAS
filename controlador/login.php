<?php

if (!empty($_POST["submit"])) {
    if (!empty($_POST["id"]) and !empty($_POST["password"])){
        echo "ingreso correcto";


    $id = $_POST["id"];

    $password = $_POST["password"];


    $sql = $conexion->query("SELECT * FROM citas_sena.paciente WHERE id = $id AND password = '$password'");

    if ($sql == 1) {
        echo '<div class="alert alert-warning">CITA REGISTRADA</div>';
        echo '<script>
            setTimeout(function() {
                window.location.href = "./modulo_citas.php";
            }, 5000);
          </script>';

    } else {
        echo '<div class="alert alert-danger">ERROR CITA NO REGISTRADO</div>';
    }

    }
}


