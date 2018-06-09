<?php
include_once "dbconnect.php";
require 'phpmailer/PHPMailerAutoload.php';
$usrdata = mysqli_query($con, "SELECT * FROM users");
$py = "";
$c = "";
if ($usrdata->num_rows > 0) {
      while($row = $usrdata->fetch_assoc()){
      if($row['python'] != 0){
      	$t = ($row['python']/167)*100;
      	$py = "Now you enrolled in python course <br>and your progress : ".(int)$t." %";
      }
      if($row['c'] != 0){
      	$t = ($row['c']/104)*100;
      	$c = "Now you enrolled in C course <br>and your progress : ".(int)$t." %<br><br> We suggest you continue your coding with codemenow and complete your course.";
      }
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$name = $row['name'];
$email= $row['email'];
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'codemenow17@gmail.com';                 // SMTP username
$mail->Password = 'codemenow@17';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;  
						                               // TCP port to connect to
$mail->setFrom('support@codemenow.com', 'Codemenow');
$mail->addAddress($email);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('support@codemenow.com', 'Codemenow');
//$mail->addCC('cc@codemenow.com');
//$mail->addBCC('bcc@codemenow.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                              // Set email format to HTML

$mail->Subject = 'Continue your coding';
$mail->Body    = "Hello ".$name.",<br><br>Thank you for choosing Codemenow to learn programming languages.<br><br>".$py."<br><br>".$c."<br><br><a href='http://www.codemenow.com/login'>For continue your coding right now click here...</a><br><br>Enjoy coding with codemenow<br>
NOTE: Do not reply to this mail because this is an auto generated mail!<br><br>Codemenow";
$mail->AltBody = '';
$mail->send();
}
}
?>