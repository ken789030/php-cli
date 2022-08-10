<?php

require_once __DIR__ . '/vendor/autoload.php';

use League\CLImate\CLImate;

$climate = new CLImate();

$data = [
    [
        'time' => '10:00-10:30',
        'title' => '讓黑畫面再次偉大',
        'speaker' => '范聖佑'
    ],
    [
        'time' => '10:40-11:20',
        'title' => '淺談PHP 的Coroutine 發展',
        'speaker' => 'Albert Chen'
    ],
    [
        'time' => '11:30-12:10',
        'title' => 'Laravel Bagisto 電商架站框架',
        'speaker' => 'John Liu'
    ]
];

$climate->table($data);
