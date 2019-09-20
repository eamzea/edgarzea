<?php
  $destino = "m.zea@live.com.mx";
  $nombre = $_POST["Nombre"];
  $telefono = $_POST["Phone"];
  $correo = $_POST["Email"];
  $mensaje = $_POST["Comments"];
  $contenido = "Nombre: " . $nombre . "\nTeléfono: " . $telefono . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
  mail($destino, "Visitante", $contenido);
  header("Location:../index.html")
?>
