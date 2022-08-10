<?php

require_once __DIR__ . '/vendor/autoload.php';

use League\CLImate\CLImate;

$climate = new CLImate();


$climate->out('Make <bold>' .
'<background_red>CLI </background_red>' .
 '</bold> Great Again');