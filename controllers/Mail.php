<?php

namespace Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // ou tes fichiers inclus manuellement

class Mail{
    private $host = 'sandbox.smtp.mailtrap.io';
    private $username = "1ea3c65b3600ff";
    private $password = "b4853dc7572d36";
    private $destinataire;

    public function __construct($destinataire){
        $this->destinataire = $destinataire;
    }

    public function send(){
        $mail = new PHPMailer(true);

        try {
            // Serveur SMTP
            $mail->isSMTP();
            $mail->Host = $this->host;
            $mail->SMTPAuth = true;
            $mail->Username = $this->username;
            $mail->Password = $this->password;
            $mail->SMTPSecure = 'tls'; // ou 'ssl'
            $mail->Port = 587;

            // Destinataire et expéditeur
            $mail->setFrom($this->username, 'Facebook');
            $mail->addAddress($this->destinataire);

            // Génération d'un code à 6 chiffres
            $code = str_pad(strval(random_int(0, 999999)), 6, '0', STR_PAD_LEFT);
            
            // Contenu
            $mail->isHTML(true);
            $mail->Subject = 'Vérification de l\'email de l\'utilisateur';
            $mail->Body    = '<p>Bienvenue ! Ce code à 6 chiffres vous permettra d\'accéder à la plateforme : </p><br><h3>'. $code .'</h3>';
            $mail->AltBody = 'Copie-colle ce lien : https://tonsite.com/verify?token=XYZ';

            $mail->send();
            echo 'Message envoyé';
        } catch (Exception $e) {
            echo "Erreur : {$mail->ErrorInfo}";
        }

        return $code;

    }
}


?>