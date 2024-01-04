<?php
use PHPMAILER\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php'; // Path to the autoload file from PHPMailer


if (isset($_POST['email'])) {
    include '../component/connect.php';

    $name = $_POST['name'];
    $email = $_POST['guestEmail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $isSent = false;

            require('../component/phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php');
            require('../component/phpmailer/vendor/phpmailer/phpmailer/src/Exception.php');    
            require('../component/phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php');
            $invitationLink = 'http://localhost/invitation/index.php?to=' . $name;
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPDebug = 0;
            $mail->Port = 465;
            $mail->SMTPAuth = true;
            $mail->Timeout = 60;
            $mail->SMTPKeepAlive = true; 
            $mail->Username = "evotingindonesia23@gmail.com";
            $mail->Password = "ldaxltxowanuluyu";
            $mail->SetFrom("evotingindonesia23@gmail.com","Wedding Invitation");
            $mail->Subject = $subject;
            $mail->AddAddress("{$email}", $name);
            $mail->MsgHTML($message.'<br><br><p>Click <a href="' . $invitationLink . '">here</a> to open the invitation.</p>');
            $mail->IsHTML(true);	
            $result = $mail->Send();

            if ($result) {
                $query = "UPDATE guest SET email =?  WHERE name = ?";
                $insert_user = $connect -> prepare($query);
                $insert_user -> execute ([$email,$name]);

                $_SESSION['email_sent'] = true;            
            }
    
            header("Location: guest.php");
            exit();
}
?>
