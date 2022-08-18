<?php 

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellido'];
        $email = $_POST['email'];
        $mensaje = $_POST['msg'];
        $movil= $_POST['movil'];

        $asunto= 'CONTACTO DE WEB';
        $para='info@saltandobarreras.org.ar';

        $header = 'From: ' . $email . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $mensaje = "Este mensaje fue enviado por " . $nombre . " " . $apellido .  " \r\n";
        $mensaje .= "Su e-mail es: " . $email . " \r\n";
        $mensaje .= "Su movil es: " . $movil . " \r\n";
        $mensaje .= "Mensaje: " . $_POST['msg'] . " \r\n";
        $mensaje .= "Enviado el " . date('d/m/Y', time());

        mail($para, $asunto, $mensaje, $header);

        
        echo "  <script>
                        alert('Mensaje enviado correctamente')
                </script>";
       
        echo "  <script>
                        setTimeout(\"location.href='index.html'\",1000)
                </script>";

?>