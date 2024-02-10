<?php

include('../header.php');

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["id"]) and !empty($_POST["nombre"]) and !empty($_POST["telefono"]) and !empty($_POST["fechanac"]) and !empty($_POST["eps"]) and !empty($_POST["password"])) {
        echo "TE HAS REGISTRADO SATISFACTORIAMENTE";

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $fechanac = $_POST["fechanac"];
        $eps = $_POST["eps"];
        $password = $_POST["password"];

        $sql = $conexion->query("INSERT INTO citas_sena.paciente(id,nombre,telefono,fechanac,eps,password) values($id,'$nombre','$telefono','$fechanac','$eps', '$password')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">USUARIO REGISTRADO</div>';
            echo '<script>
            setTimeout(function() {
                window.location.href = "./index.php";
            }, 3000);
          </script>';

        } else {
            echo '<div class="alert alert-danger">ERROR USUARIO NO REGISTRADO</div>';
        }
    } else {
        echo '<div class="alert alert-warning">ALGUNOS CAMPOS FALTAN POR DILIGENCIAR </div>';

    }

}

?>