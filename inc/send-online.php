    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '/home1/socie783/public_html/inc/lib/vendor/autoload.php';

    $nome = addslashes($_POST['nome-online']);
    $email = addslashes($_POST['email-online']);
    $telefone = addslashes($_POST['tel-online']);

    $c = addslashes($_POST['coloracao-online']);
    $cc = addslashes($_POST['cronograma-coloracao-online']);
    $cm = addslashes($_POST['coloracao-mentoria-online']);
    $ccm = addslashes($_POST['cronograma-coloracao-mentoria-online']);

    $date = addslashes($_POST['date-online']);
    $time = addslashes($_POST['time-online']);

    $total = addslashes($_POST['total-online']);


    $mail = new PHPMailer(true);

    try {
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email ';
        $mail->SMTPAuth = true;
        $mail->Username = 'contato@sociedaderuiva.com.br';
        $mail->Password = 'ruivaSociety@389#';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('contato@sociedaderuiva.com.br' , 'Cliente');
        $mail->addAddress('contato@sociedaderuiva.com.br', 'Admin');

        
        $mail->isHTML(true);                                 
        $mail->Subject = 'Sociedade Ruiva - AGENDAMENTO (ONLINE)';
    
        $mail->Body =   '<div> 
                            <p>Name: ' .$nome.'</p>
                            <p>Telefone: ' .$telefone.'</p>
                            <p>Email: ' .$email.'</p>
                            <p>Serviços solicitados:</p>
                            <p> '.$c.'</p>
                            <p> '.$cc.'</p>
                            <p> '.$cm.'</p>
                            <p> '.$ccm.'</p>
                            <p>Data: '.$date.'</p>
                            <p>Horário: '.$time.'</p>
                            <p>Total: '.$total.'</p>
                        </div>';



        $mail->send();
        
        echo 'E-mail enviado com sucesso!<br>';
    } catch (Exception $e) {
        echo "Erro: E-mail não enviado com sucesso. Error PHPMailer: {$mail->ErrorInfo}";
        //echo "Erro: E-mail não enviado com sucesso.<br>";
    }
    ?>









