<?php

require_once __DIR__ . '/vendor/autoload.php';

use League\CLImate\CLImate;

$climate = new CLImate();

$input = $climate->input('最喜歡的語言?');

// $return_value = match (strtoupper($input->prompt())) {
//     'PHP' => 'test'
// };

$food = 'cake';

$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);