<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FormularioExitoso/ForzaGym</title>
    
    <?php

$name = $_POST['name'];
$email = $_POST['email'];
$mensaje = $_POST['message'];


$header = 'De: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por  " . "$name" . ",\r\n";
$message .= "Su e-mail es: " . "$email" . " \r\n";
$message .= "Mensaje: " . "$mensaje" . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());



$for = 'lucasnunezt5@gmail.com';
$subjet = 'Mensaje de asunto';

mail($for, $subjet, utf8_decode($message), $header);


header("contacto.html");

?>
</head>
<body>
<header>
        <div class="logo">
            <h2>FORZA GYM</h2>
        </div>
    </header>
    <div class="padrephp">
        <h1>¡Muchas gracias por contar con nosotros!</h1>
        <h2>Correo electronico enviado correctamente!</h2>
            <h3><a  href="javascript:history.back()"> Pulsa aquí para volver a la pagina</a></h3>
        </div>
        
    <footer>
        <div class="logo-footer">
            <img src="img/logoforzagym.jpg" alt="logo forza gym footer">
        </div>
        <div class="copy">
            <h4>@ForzaGym</h4>
        </div>
    </footer>
    
</body>
</html>






