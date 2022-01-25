<?php

use config\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller{

    public function index(){

      
        //  Contact Class Is Accessible Because We Call Page.php-s getModel() Method In index.php Which Loads 
        //  Particular Model For Particular Controller.
        $contact = new Contact();
        
        $this->data['menu'] = $contact->getMenu();

        if(isset($_POST) && !empty($_POST)){

            
            $name = $_POST['name'];
            $lastName = $_POST['last-name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $mail = new PHPMailer(true);

            try {
                //Server settings
                
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = MAIL_HOST;                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = MAIL_USERNAME;                     //SMTP username
                $mail->Password   = MAIL_PASSWORD;                               //SMTP password
                $mail->Port       = MAIL_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $mail->setFrom($email);
                $mail->addAddress(MAIL_TO);     //Add a recipient
                $mail->addReplyTo($email);

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'New message from oop-ug';
                $mail->Body    = '
                    Name: '.$name.'<br>
                    Last name: '.$lastName.'<br>
                    Email: '.$email.'<br>
                ';
            
                $mail->send();
                header("Location:" . $HOST . "?page=contact&e=0");
            } catch (Exception $e) {
                header("Location:" . $HOST . "?page=contact&e=1");
            }
        }

        $this->tpl = 'contact';
    }

}