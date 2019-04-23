<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de teste", "<p>Esse é um <br>email de teste</br>!</p>", "jallespassos@hotmail.com", 
        "Jalles Passos", "jallespassos@hotmail.com", "Jalles");

var_dump($novoEmail);