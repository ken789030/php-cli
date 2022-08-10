<?php

require_once __DIR__ . '/vendor/autoload.php';

use League\CLImate\CLImate;

$climate = new CLImate();

// $climate->out('Make CLI Great Again');
// $climate->inline('Make');
// $climate->inline(' ');
// $climate->inline('CLI');
// $climate->inline(' ');
// $climate->inline('Great');
// $climate->inline(' ');
// $climate->inline('Again');
// $climate->out('');

// $climate->bold('Make CLI Great Again');
// $climate->underline('in COSCUP 2022');

$climate->bold()
    ->underline()
    ->dim('Make CLI Great Again');

// if (php_sapi_name() !== 'cli') {
//     exit;
// }

// echo "Hello CLI".PHP_EOL;