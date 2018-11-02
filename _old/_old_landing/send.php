<?php 

use PHPMailer\PHPMailer\PHPMailer;

$servername="localhost";
$username="radiko";
$password="radiko1357";
$dbname="radiko";

$conn = new mysqli($servername, $username, $password, $dbname);

function validateEmail($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}   

if (!empty($_POST) && !empty($_POST['email']) && validateEmail($_POST['email'])) {

  $emailExists = mysqli_query($conn, "SELECT * FROM usuarios_newsletter WHERE EMAIL = '". $_POST['email'] ."'");

  if (mysqli_num_rows($emailExists) > 0){
    echo -2;
    //$status = 'error';
    //$message = 'Este email ya ha sido registrado';
  } else {
    $addEmail = "INSERT INTO usuarios_newsletter (EMAIL) VALUES ('" . $_POST['email'] . "')";

    $conn->query($addEmail);

    require_once('vendor/autoload.php');

    $mail = new PHPMailer;

    $mail->From = "info@radiko.com";
    $mail->FromName = "Radiko";

    $mail->addAddress("florenciasepulveda.26@gmail.com", "Flor");

    $mail->addReplyTo($_POST['email']);

    $mail->isHTML(true);

    $mail->Subject = "Nuevo usuario registrado en Newsletter";
    $mail->Body = "";
    $mail->Body .= "<h3>Mensaje enviado desde Radiko</h3>";
    $mail->Body .= "<b>Email: </b>" . $_POST['email'] . "<br>";

    if(!$mail->Send())  {
      /*error_log("Error al enviar el email: " . $mail->ErrorInfo);*/
      //$status = 'success';
      //$message = 'Hubo un error al enviar el formulario';  
      echo 0;

    }  else  {

      $mail->ClearAddresses();
      $mail->AddAddress($_POST['email']);
      $mail->Body = file_get_contents('mail_example.html') ;
      $mail->Send();

      /* header('Location: ' . $_SERVER['HTTP_REFERER']);*/

      //$status = 'success';
      //$message = '¡Te has suscrito con éxito!';  
      echo 1;
    }
  }
} else {
  //$status = 'error';
  //$message = 'Por favor corrobora los datos o ingresa un email correcto';
  echo -1;
}

// $data = array(
//   'status' => $status,
//   'message' => $message
// );

// return json_encode($data);

// exit;

