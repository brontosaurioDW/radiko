<?php 

use PHPMailer\PHPMailer\PHPMailer;

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}   

if (!empty($_POST) && 
    !empty($_POST['email']) && 
    validateEmail($_POST['email']))
{
    require_once('vendor/autoload.php');


    $mail = new PHPMailer;

    $mail->From = "info@radiko.com";
    $mail->FromName = "Radiko";

    $mail->addAddress("es.hotes@gmail.com", "Emiliano");

    $mail->addReplyTo($_POST['email']);

    $mail->isHTML(true);

    $mail->Subject = "Nuevo usuario registrado en Newsletter";
    $mail->Body = "";
    $mail->Body .= "<h3>Mensaje enviado desde Radiko</h3>";
    $mail->Body .= "<b>Email: </b>".$_POST['email']."<br>";

    if(!$mail->send()) 
    {
        error_log("Error al enviar el email: " . $mail->ErrorInfo);
        echo 0;
    } 
    else 
    {
        echo 1;
    }
}
else
{
    echo -1;
}
?>
