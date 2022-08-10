<?php

require_once __DIR__ . '/vendor/autoload.php';

use League\CLImate\CLImate;

$climate = new CLImate();


$climate->red('Make CLI Great Again');
$climate->green('Make CLI Great Again');
$climate->yellow('Make CLI Great Again');
$climate->blue('Make CLI Great Again');
$climate->magenta('Make CLI Great Again');
$climate->cyan('Make CLI Great Again');
$climate->white('Make CLI Great Again');

$climate->backgroundRed()
->green('Make CLI Great Again');