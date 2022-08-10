<?php

if (php_sapi_name() !== 'cli') {
    exit;
}

echo "Hello CLI".PHP_EOL;