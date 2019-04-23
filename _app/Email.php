<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    private $mail = \stdClass::class;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;
        $this->mail->isSMTP();
        $this->mail->Host = 'smtp.outlook.com';
        $this->mail->SMTPAuth = (true);
        $this->mail->Username = 'jallespassos@hotmail.com';
        $this->mail->Password = 'kk';
        $this->mail->SMTPSecure = 'TLS';
        $this->mail->SMTPAuth = true;
        $this->mail->Port = 587;
        $this->mail->CharSet = 'utf-8';
        //$this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('jallespassos@hotmail.com', 'Equipe PassosInfo');
    }

    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName) {
        $this->mail->Subject = (string) $subject;
        $this->mail->Body = $body;
        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->Sendmail;
            echo 'SUCESSO';
        } catch (Exception $ex) {
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$ex->getMessage()}";
        }
    }

}
