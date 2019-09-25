<?php 
$respuesta = array();

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['correo'];
$monto = $_POST['monto'];
$plazo = $_POST['plazo'];
$ventas = $_POST['ventas'];

$mensaje_text = "
Nombre: $nombre
Telefono: $telefono
Email: $email
Monto: $monto
Plazo: $plazo
Ventas: $ventas
";

// Always set content-type when sending HTML email
/*$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";*/

// More headers
$headers .= 'From: '.$email;

if(mail("contacto@sinergiaeconomica.com.mx",$correo,$mensaje_text,$headers)){
    $respuesta['estatus'] = 'success';
}else{
    $respuesta['estatus'] = 'error';
}
 

echo json_encode($respuesta);
?>