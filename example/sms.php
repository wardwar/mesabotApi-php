<?php

require_once('../Mesabot.php');

define("MESABOT_TOKEN","your token");


try {

    // 1 phone number
    $data = [
        'destination' => 'phone_number1',
        'text' => 'test mesabot'
    ];

    // boradcast
    $data = [
        'destination' => ['phone_number1','phone_number2'],
        'text' => 'test'
    ];

    $mesabot = new Mesabot();
    $mesabot->sms($data);
    print_r($mesabot->response());
} catch (Exception $e) {
    echo $e->getMessage();
}
