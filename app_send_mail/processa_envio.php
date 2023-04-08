<?php
    // Importando às bibliotecas do PHPMiler
    require "../../app_send_mail/bibliotecas/PHPMailer/Exception.php";
    require "../../app_send_mail/bibliotecas/PHPMailer/OAuthTokenProvider.php";
    require "../../app_send_mail/bibliotecas/PHPMailer/PHPMailer.php";
    require "../../app_send_mail/bibliotecas/PHPMailer/POP3.php";
    require "../../app_send_mail/bibliotecas/PHPMailer/SMTP.php";

    //Protegendo arquivos sigilosos da aplicação
    require "../../app_send_mail/processa_envio.php";