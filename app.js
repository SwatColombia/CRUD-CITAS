// Define el mensaje de la notificación
$mensaje = "Sesión iniciada con éxito";

// Define el tipo de notificación
$tipo = "success";

// Muestra la notificación
swal({
  title: "Sesión iniciada",
  text: $mensaje,
  type: $tipo,
  confirmButtonText: "Aceptar"
});

