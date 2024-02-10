<?php
namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactoController
{
    public function send()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recoger datos del formulario
            $name = isset($_POST['name']) ? $_POST['name'] : 'Nombre no proporcionado';
            $phone = isset($_POST['phone']) ? $_POST['phone'] : 'Teléfono no proporcionado';
            $email = isset($_POST['email']) ? $_POST['email'] : 'Email no proporcionado';
            $message = isset($_POST['message']) ? $_POST['message'] : 'Mensaje no proporcionado';
            $option = isset($_POST['option']) ? $_POST['option'] : 'Mensaje no proporcionado';

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->SMTPDebug = 2;
                $mail->Host = 'smtp.hostinger.com';
                $mail->SMTPAuth = true;
                $mail->Username = '*****';
                $mail->Password = '*****';
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

                 $this->redirect('/home/contacto');
                echo 'Mensaje enviado con éxito';
            } catch (Exception $e) {
                echo 'El mensaje no se pudo enviar. Error: ' . $mail->ErrorInfo;
            }
        } else {
            echo 'Método no permitido';
        }
    }

}