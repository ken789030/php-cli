<?php

require_once __DIR__ . '/vendor/autoload.php';

use League\CLImate\CLImate;

$climate = new CLImate();


$climate->error('休士頓，這而出了點問題');
$climate->comment('針對這是我的評論');
$climate->whisper('噓~聖誕老人正在爬煙囪');
$climate->short('天啊啊啊啊啊~~~');
$climate->info('===== 這是分隔線======');
