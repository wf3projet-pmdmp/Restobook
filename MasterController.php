<?php 

namespace Controller;

use \W\Controller\Controller;

class MasterController extends Controller
{

    /*
	* Permet l'envoi de mail
	* @param $mail = mail attendu
	* @param $token a envoyer via le mail
	*/
    public function mailTo($email, $token = null)
    {
        //Create a new PHPMailer instance
        $mail = new \PHPMailer;
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        //Set the hostname of the mail server
        $mail->Host = 'smtp.mailtrap.io';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 2525;
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "2d42dccb6706e7";
        //Password to use for SMTP authentication
        $mail->Password = "06208d11697757";
        //Set who the message is to be sent from
        $mail->setFrom('from@example.com', 'First Last');
        //Set an alternative reply-to address
        $mail->addReplyTo('replyto@example.com', 'First Last');
        //Set who the message is to be sent to
        $mail->addAddress($email);
        //Set the subject line
        $mail->Subject = 'Reset password';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        //$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        //Replace the plain text body with one created manually
        //$lien = $this->generateUrl('login');
        $lien = 'http://127.0.0.1/Restobook/restobook/public/users/newpass?token=';
        $mail->Body = 'Voici votre <a href="'.$lien.$token.'">lien</a> de pour changer votre mot de passe ';
        //$mail->Body = 'Voici votre lien de pour changer votre mot de passe <a href="'.$_SERVER['DOCUMENT_ROOT'].$lien.'/'.$token.'">lien</a>';
        $mail->AltBody = "Voici votre lien pour changer votre mot de passe ";
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            return true;
        }
    }

}


?>