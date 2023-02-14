<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;

    public function __construct ($nombre, $email, $token) {
        $this -> nombre = $nombre;
        $this -> email = $email;
        $this -> token = $token;
    }

    public function enviarConfirmacion() {
        //crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();  
        $mail -> Host = "smtp.mailtrap.io";
        $mail -> SMTPAuth = true;
        $mail -> Port = 2525;
        $mail -> Username = '1a4791cef35bfc';
        $mail -> Password = "047702757ecb47";

        $mail -> setFrom ('cuentas@appsalon.com');
        $mail -> addAddress('cuentas@appsalon.com', 'Appslaon.com');
        $mail ->Subject = 'Confirma tu cuenta';

        //set hrml
        $mail -> isHTML(TRUE);
        $mail -> Charset = 'UTF-8';

        $contenido = "<html>";
        $contenido .= "<p> <strong> Hola " . $this -> nombre . "</strong> Has creado tu cuenta en AppSalon, solo debes confirmar presionando el siguiente enlace </p>";
        $contenido .= "<p>Presiona aqui <a href='http://localhost:3000/confirmar-cuenta?token=". $this-> token ."'>Confirmar Cuenta</a></p>";
        $contenido .= "<p>Si tu no solicitaste esta cuenta, puedes ignorar este mensaje.</p>";
        $contenido .= "</html>";

        $mail -> Body = $contenido;

        //ENVIAR EL EMAIL
        $mail -> send ();
    }

    public function enviarInstrucciones() {

         //crear el objeto de email
         $mail = new PHPMailer();
         $mail->isSMTP();  
         $mail -> Host = "smtp.mailtrap.io";
         $mail -> SMTPAuth = true;
         $mail -> Port = 2525;
         $mail -> Username = '1a4791cef35bfc';
         $mail -> Password = "047702757ecb47";
 
         $mail -> setFrom ('cuentas@appsalon.com');
         $mail -> addAddress('cuentas@appsalon.com', 'Appslaon.com');
         $mail ->Subject = 'Reestablece tu Password';
 
         //set hrml
         $mail -> isHTML(TRUE);
         $mail -> Charset = 'UTF-8';
 
         $contenido = "<html>";
         $contenido .= "<p> <strong> Hola " . $this -> nombre . "</strong> Has solicitado Reestablacer tu Password, sigue el siguiente enlace para hacerlo.</p>";
         $contenido .= "<p>Presiona aqui <a href='http://localhost:3000/recuperar?token=". $this-> token ."'>Reestablacer Password</a></p>";
         $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar este mensaje.</p>";
         $contenido .= "</html>";
 
         $mail -> Body = $contenido;
 
         //ENVIAR EL EMAIL
         $mail -> send ();

    }
}