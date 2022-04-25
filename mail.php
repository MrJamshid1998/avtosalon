<?php 

// require_once('phpmailer/PHPMailerAutoload.php');
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //-----------bazaga yozish----------//
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $baza = 'autosalon';

    $link = mysqli_connect($host, $user, $pass, $baza);
    if(!$link){
        echo 'Хато: '
        .mysqli_connect_errno()
        .':'
        .mysqli_connect_error();
      }

    $result = mysqli_query($link, "INSERT INTO `contact` (`id`, `name`, `email`, `kasbi`, `xabar`) VALUES (NULL, '$name', '$email', '$subject', '$message')");

    if($result){
        echo("Bazaga saqlandi!");
    }
    else{
        echo("Bazaga saqlashda xatolik yuz berdi!");
    }
    //-----------bazaga yozish tugadi----------//

}    
//     $mail = new PHPMailer;
//     $mail->CharSet = 'utf-8';

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $message = $_POST['message'];

//     //-----------bazaga yozish----------//
//     $host = 'localhost';
//     $user = 'root';
//     $pass = '';
//     $baza = 'autosalon';

//     $link = mysqli_connect($host, $user, $pass, $baza);
//     $result = mysqli_query($link, 'INSERT INTO `contact` (`id`, `name`, `email`, `kasbi`, `xabar`) VALUES (NULL, `Nusrat`, `nusrat@mail.ru`, `dasturchi`, `salom`);');
//     if($result){
//         echo("Bazaga saqlandi!");
//     }
//     else{
//         echo("Bazaga saqlashda xatolik yuz berdi!");
//     }

// //-----------bazaga yozish tugadi----------//

//     //$mail->SMTPDebug = 3;                               // Enable verbose debug output

//     $mail->isSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
//     $mail->Username = 'autosalon2022@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
//     $mail->Password = 'UpuoPOAi1e1_'; // Ваш пароль от почты с которой будут отправляться письма
//     $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//     $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

//     $mail->setFrom('autosalon2022@mail.ru'); // от кого будет уходить письмо?
//     $mail->addAddress('jamshid.shoymardonov@mail.ru');     // Кому будет уходить письмо 
//     //$mail->addAddress('ellen@example.com');               // Name is optional
//     //$mail->addReplyTo('info@example.com', 'Information');
//     //$mail->addCC('cc@example.com');
//     //$mail->addBCC('bcc@example.com');
//     //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//     $mail->isHTML(true);                                  // Set email format to HTML

//     $mail->Subject = $subject;
//     $mail->Body    = 'Jo`natuvchi: ' .$name . '<br> Email: ' .$email. '<br><br> Xabar:<br><br> ' .$message;
//     $mail->AltBody = '';

//     if(!$mail->send()) {
//         echo 'Error';
//     } else {
//         header('location: index.html');
//     }
?>