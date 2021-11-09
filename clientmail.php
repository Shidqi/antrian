<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sistemnotif@gmail.com';                 // SMTP username
    $mail->Password = 'kmzway87aa';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sistemnotif@gmail.com', 'PT. Asli Isoae Solusine');
    $mail->addAddress($_POST['email'], $_POST['nama']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Pemesanan Anda Telah Kami Terima';
    $mail->Body    = 'Pesanan anda telah kami terima dengan data : <br><br>
                    Nama Pemesan : '.$_POST['nama'].'
                    <br> No. Telfon : '.$_POST['tlp'].'
                    <br> Email : '.$_POST['email'].'
                    <br> Detail Pesanan : '.$_POST['detail'].
                    '<br><br> Mohon menunggu pihak kami menghubungin anda untuk melakukan konfirmasi <br>
                    Terimakasih';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>