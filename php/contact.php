<?php
  $destino = "m.zea@live.com.mx";
  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $subject = $_POST["Subject"];
  $comments = $_POST["Comments"];
  $contenido = "Name: " . $name . "\nEmail: " . $email . "\nSubject:" . $subject . "\nComments: " . $comments;
  mail($destino, "Visitante", $contenido);
  header("Location:../index.html")
?>