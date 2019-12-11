<?php
if ($_SERVER[HTTP_REFERER] == "https://www.iscaife.com.br/" ||
	$_SERVER[HTTP_REFERER] == "https://www.iscaife.com.br/") {

    require_once("class.phpmailer.php");

    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->SMTPDebug = 1;
    $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails. Utilize obrigatoriamente a porta 587.

    $mailer->Host = 'mail.380v.com.br'; //Onde em 'servidor_de_saida' deve ser alterado por um dos hosts abaixo:
    //Para cPanel: 'mail.dominio.com.br';
    //Para Plesk 11 / 11.5: 'smtp.dominio.com.br';

    //Descomente a linha abaixo caso revenda seja 'Plesk 11.5 Linux'
    //$mailer->SMTPSecure = 'tls';

    $nome = addslashes($_POST[nome]);
    $email = addslashes($_POST[email]);
    $mensagem = addslashes($_POST[textarea]);
    // $mensagem = addslashes($_POST[mensagem]);


    $mailer->SMTPAuth = false; //Define se haverá ou não autenticação no SMTP
    $mailer->Username = 'iscaife@380v.com.br'; //Informe o e-mai o completo
    $mailer->Password = 'agencia@380'; //Senha da caixa postal
    $mailer->FromName = 'Contato pelo site'; //Nome que será exibido para o destinatário
    $mailer->From = 'iscaife@380v.com.br'; //Obrigatório ser a mesma caixa postal indicada em "username"
    $mailer->AddAddress('iscaife@380v.com.br'); //Destinatários
    $mailer->Subject = 'Dúvida site - ' . date("H:i") . '-' . date("d/m/Y");
    $mailer->Body = "Dados do contato

    Nome: $nome

    Email: $email

    Dúvida: $mensagem";

    $mailer->CharSet = 'UTF-8';
    if (!$mailer->Send()) {
        echo "Mensagem não enviada";
        echo "Erro: " . $mailer->ErrorInfo;
        exit;
    } else {
        ?>
        <script>
            alert("Sua mensagem foi enviada com sucesso.");
            window.location = "https://www.iscaife.com.br/";
        </script>
    <?php
    }

}
else{
    echo "Acesso não autorizado";
    exit;
}

?>
