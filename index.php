<?php

require __DIR__."/vendor/autoload.php";

use Carbon\Carbon;

$today = Carbon::now();

var_dump($today->tzName . "\n");
echo "\n";
var_dump($today->toDateTimeString()); 