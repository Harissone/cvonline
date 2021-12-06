<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'authentification.php';
    require '../vendor/autoload.php';
    require '../vendor/autoload.php';

if (isset($_POST['sendBtn'])) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 1;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'harissonefares4@gmail.com';                     //SMTP username
        $mail->Password   = 'a22052000699671386harissonefares...';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('harissonefares4@gmail.com', 'Nkayoum');
        $mail->addAddress('harissonefares4@gmail.com', 'Cindy');     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('harissonefares4@gmail.com', 'Information');
        //$mail->addCC('harissonefares4@gmail.com');
        //$mail->addBCC('harissonefares4@gmail.com');

        //Attachments
        $mail->addAttachment('../doc/cv - nkayoum.pdf');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/style.css" rel="stylesheet"> 
    <title>Send mail - CVONLINE</title>
</head>
<body>
    <center>
    <form method="post" role="form" enctype="multipart/form-data" >
        <!-- sujet de l'email-->
        <div class="card-body">
        <p>Envoie du CV au format PDF !</p>
            <div class="card-objet">
                <label for="objet">Objet</label>
                <input type="text" id="objet" name="objet" placeholder="Ajoutez un sujet">
            </div>
            <div class="card-objet">
                <label for="sendto">Email destinataire</label>
                <input type="text" id="send" name="send" placeholder="Inserez l'email du destinataire">
            </div>
            
            <div class="card-objet">
                <label class="fichier" for="filebutton">Fichier à envoyer</label>
                <input name="file" class="input-file" type="file">          
            </div>
            <div class="card-objet">
                <label for="message">Message</label>
                <textarea type="text" id="message" name="message" placeholder="Souhaitez-vous inserer un message ?"></textarea>
            </div>
            <center>
                <button class="btn-send" name="sendBtn" type="submit">Envoyer</button>
            </center>
        </div>
    </form>
    </center>
</body>
</html>