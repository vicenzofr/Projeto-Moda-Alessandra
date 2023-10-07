<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

require '../controle/vendor/autoload.php';

if(isset($_POST['enviar'])){

    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'avbtecnology@gmail.com';                    
    $mail->Password   = 'h u q v x m r n w c ta f c m u _';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;    
    
    //se for usar outro provedor de email deverá ver se as infomações
    //port/SMTPSecure e mudar o Host                        
 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('avbtecnology@gmail.com', 'Mailer');
    $mail->addAddress('avbtecnology@gmail.com', 'Teste no AVB');     //email de quem recebe
    $mail->addReplyTo('avbtecnology@gmail.com', 'Informação');
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mensagem via Site - avbTESTE ';
    
    $nome = $_POST['nome'];
    $corpo="Mensagem enviada Através do site, segue
    informaçõe abaixo:<br>
    Nome:". $_POST['nome']."<br>
    E-mail:". $_POST['email']."<br>
    Assunto:". $_POST['assunto']."<br>
    Mensagem:". $_POST['msg'];

    $mail->Body    = $corpo;
    
    $mail->send();
    echo 'Email enviado com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
}
}else{
    echo"Erro ao enviar e-mail, acesso não foi via fórmulário! ";
}

