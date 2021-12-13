<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6628343c5a.js" crossorigin="anonymous"></script>
    <title>Contactenos - Mensaje enviado</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,700;1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="whatsapp.css">
</head>
<body>
     
<!--Codigo para el formulario de contacto-->
<?php 
$myemail = 'luisnoguera2017@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
 







 <center>
<h1>Contacto</h1>
  <form method="post" action="enviar.php">
    <input type="text" name="nombre" placeholder="Nombre Completo">
    <input type="email" name="email" placeholder="Correo Electronico">
    <br>
    <textarea type="text" name="mensaje" placeholder="Mensaje"></textarea>
    <br>
     <input type="submit" value="Enviar">

  </form>
</center>
</body>
</html>