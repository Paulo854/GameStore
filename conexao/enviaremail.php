<?php
session_start();
include('conexao.php');

if(empty($_POST['email'])) {
	header('Location: ../recuperar.php');
	exit();
}else{

	$email = mysqli_real_escape_string($conexao, $_POST['email']);

	$random = randomPassword();

	$sql = "update usuarios set senha = md5('{$random}') where email = '{$email}'";

	if($conexao->query($sql) === TRUE){

		$conexao->close();

		require '../PHPMailer-master/src/PHPMailer.php';
		require '../PHPMailer-master/src/SMTP.php';
		require '../PHPMailer-master/src/Exception.php';

	    $mail = new PHPMailer\PHPMailer\PHPMailer();
	    $mail->IsSMTP(); // enable SMTP

	    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	    $mail->SMTPAuth = true; // authentication enabled
	    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	    $mail->Host = "smtp.sendgrid.net";
	    $mail->Port = 465; // or 587
	    $mail->IsHTML(true);
	    $mail->Username = "apikey";
	    $mail->Password = "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";
	    $mail->SetFrom("dcsantos136@gmail.com");
	    $mail->Subject = "Recuperar senha";
	    $mail->Body = "<b>Sua nova senha é: </b> " . $random ." <b> @GameStore </b>";
	    $mail->AddAddress($email);

	     if(!$mail->Send()) {
	        echo "Mailer Error: " . $mail->ErrorInfo;
	     } else {
	        echo "Message has been sent";
	     }

		header('Location: ../enviado.php');
		exit();
	} else {
		$_SESSION['nao_autenticado'] = true;
		header('Location: ../index.php');
		exit();
	}

}


function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
