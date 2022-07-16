<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

class clsMail{

    private $mail = null;
    
    function __construct(){
        $this->mail = new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->Port = 587;
        $this->mail->Username = "samirzetalmlsak@gmail.com";
        $this->mail->Password = "dqqiumnmepeqeajb";
    }


    public function metEnviar( $titulo,  $nombre,  $correo,  $asunto,  $bodyHTML)
    {
        $this->mail->setFrom("samirzetalmlsak@gmail.com", 'Samir Zuñiga');
        $this->mail->addAddress("duanealiaga93@gmail.com");
        $this->mail->Subject = "Prueba de envío";
        $this->mail->Body = "Hola, <br>Esta es una prueba de <b>envío</b>";
        $this->mail->isHTML(true);
        $this->mail->CharSet = "UTF-8";
        $this->mail->addAttachment('PHPMailer/docs/documento.pdf', 'Samir_Zuñiga.pdf');
        return $this->mail->send();
        echo "Correo enviado exitosamente";
    }
}

?>