<?php
require 'smtp/PHPMailerAutoload.php';

class SendMail
{
    public $SenderEmail = "shreyans@uniqueconsumerservices.com";
    public $SenderEmailPassword = "WI;&fB,60kJH";
    public $ReciverEmail = "patelhitixa4439@gmail.com";
    public $Subject = "";
    public $Body = "hello";

    public function sendMail()
    {
        $inputData = json_decode(file_get_contents('php://input'), true);
        $subject = isset($inputData['Subject']) ? $inputData['Subject'] : '';
        $body = isset($inputData['Body']) ? $inputData['Body'] : '';


        $mail = new PHPMailer();
        $mail->SMTPDebug = 2; 
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = '';
        $mail->Host = "216.10.241.228";
        $mail->Port = 587;
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Username = $this->SenderEmail;
        $mail->Password = $this->SenderEmailPassword;
        $mail->setFrom($this->SenderEmail, 'Your Name or Company'); 
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->addAddress($this->ReciverEmail);

        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ];

        try {
            if (!$mail->send()) {
                echo json_encode([
                    'status' => false,
                    'message' => 'Message could not be sent.',
                    'error' => $mail->ErrorInfo,
                ]);
            } else {
                echo json_encode([
                    'status' => true,
                    'message' => 'Message sent successfully.',
                ]);
            }
        } catch (Exception $e) {
            echo json_encode([
                'status' => false,
                'message' => 'Message could not be sent. Mailer Error.',
                'error' => $e->getMessage(),
            ]);
        }
    }
}


$mailer = new SendMail();
?>