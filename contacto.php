<?php 

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $movil= $_POST['movil'];

        $asunto= 'CONTACTO DE WEB';
        $para='info@saltandobarreras.org.ar';

        $header = 'From: ' . $email . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
        $mensaje .= "Su e-mail es: " . $email . " \r\n";
        $mensaje .= "Su movil es: " . $movil . " \r\n";
        $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
        $mensaje .= "Enviado el " . date('d/m/Y', time());

        mail($para, $asunto, utf8_decode($mensaje), $header);
        echo "<script>alert('Mensaje enviado correctamente');</script>";
        echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>