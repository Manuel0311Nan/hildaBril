<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require APP . '/PHPMailer/src/Exception.php';
require APP . '/PHPMailer/src/PHPMailer.php';
require APP . '/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Recoger datos del formulario
    $name = isset($_POST['name']) ? $_POST['name'] : 'Nombre no proporcionado';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : 'Teléfono no proporcionado';
    $email = isset($_POST['email']) ? $_POST['email'] : 'Email no proporcionado';
    $message = isset($_POST['message']) ? $_POST['message'] : 'Mensaje no proporcionado';
    $option = isset($_POST['option']) ? $_POST['option'] : 'Mensaje no proporcionado';
    // Configuración del servidor
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pruebasweb@littleodin.es';
    $mail->Password = '6!MWZQb&ANeBjfU4EemL@4';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Destinatarios
    $mail->setFrom($email, $name);
    $mail->addAddress('pruebasweb@littleodin.es');

    // Contenido
    $mail->isHTML(true);
    $mail->Subject = 'Consulta para nuevo pedido';
    $mail->Body    = "Nombre: {$name}<br>Teléfono: {$phone}<br>Email: {$email}<br>Opción: {$option}<br>Mensaje: {$message}";
    $mail->AltBody = "Nombre: {$name}\nTeléfono: {$phone}\nEmail: {$email}\nOpción: {$option}\nMensaje: {$message}";    

    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo 'El mensaje no pudo ser enviado. Error: ', $mail->ErrorInfo;
}
header("Location: " . URL . "/contacto.php");
