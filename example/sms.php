<?php

require_once('../Mesabot.php');

define("MESABOT_TOKEN","sZXnH7KYrG9AphGo5s7CncaLTqQ8dzW9j1qZrXWp");


try {

    // 1 phone number
    $data = [
        'destination' => '08992110102',
        'text' => 'test mesabot'
    ];

    // boradcast
    // $data = [
    //     'destination' => ['phone_number1','phone_number2'],
    //     'text' => 'test'
    // ];

    $mesabot = new Mesabot();
    $mesabot->sms($data);
    print_r($mesabot->response());
} catch (Exception $e) {
    echo $e->getMessage();
}
