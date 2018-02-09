<?php 
include_once '../includes/PHPMailer-master/PHPMailerAutoload.php';

function mailContacto($nombre, $correo, $asun, $mensaje, $telefono)
{
    	
	$destino1 = "contacto@vivens.mx";
    $asunto = "Nuevo mensaje del area de Contacto";
    $mensaje = "

    <!DOCTYPE html>
    <html lang=\"es-MX\">
    <head>
    	<meta charset=\"utf-8\"/>
    	<title></title>
    </head>
    <body>
    	<table style='border-collapse: collapse; text-align: left; width: 100%; font: normal 12px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 1px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; '>
            <tr>
                <th style='background-color:#006699; color:#ffffff; font-size: 15px; font-weight: bold; border-left: 1px solid #0070A8;  padding: 10px 10px; ' colspan='2' align='center'>Un nuevo mensaje se ha generado</th>
            </tr>
            <tr align='left'>
                <th style='background: #E1EEF4;color: #00496B;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 5px;text-align: center;'>Nombre:</th>
                <td style='background: #FFF;color: #000;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 1px;text-align: center;'>" . $nombre . "</td>
            </tr>
            <tr align='left'>
                <th style='background: #E1EEF4;color: #00496B;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 5px;text-align: center;'>Correo:</th>
                <td style='background: #FFF;color: #000;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 1px;text-align: center;'>" . $correo . "</td>
            </tr>
            <tr align='left'>
                <th style='background: #E1EEF4;color: #00496B;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 5px;text-align: center;'>Asunto:</th>
                <td style='background: #FFF;color: #000;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 1px;text-align: center;'>" . $asun . "</td>
            </tr>
            <tr align='left'>
                <th style='background: #E1EEF4;color: #00496B;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 5px;text-align: center;'>Teléfono:</th>
                <td style='background: #FFF;color: #000;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 1px;text-align: center;'>" . $telefono . "</td>
            </tr>
            <tr align='left'>
                <th style='background: #E1EEF4;color: #00496B;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 5px;text-align: center;'>Mensaje:</th>
                <td style='background: #FFF;color: #000;border-left: 1px solid #E1EEF4;font-size: 15px;font-weight: normal;padding: 1px;text-align: center;'>" . $mensaje . "</td>
            </tr>
        </table>
    	<br>
    	<p><b>No contestar este mensaje, se genera automaticamente por el sistema</b></p>
    	<br>
    	<p style='color: #7C7C5F;'>Vivens | 2017 | Desarrollado por Diametral28 (<a target='_blank' href='mailto:soporte@diametral28.com'>soporte@diametral28.com</a>)</p>
    </body>
    </html>";

$mail = new PHPMailer(); // defaults to using php "mail()"
$mail->SetFrom('no-reply@vivens.mx', 'Contacto Vivens');
$mail->AddAddress($destino1);
$mail->Subject = $asunto;
$mail->MsgHTML($mensaje);
$mail->AltBody = "No contestar este mensaje, se genera automaticamente por el sistema"; // optional, comment out and test
$mail->CharSet = 'UTF-8';
//$mail->AddReplyTo("silvarud@mx1.ibm.com");
//$mail->AddAttachment("img/camara.jpg");      // attachment

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

    
}


 ?>