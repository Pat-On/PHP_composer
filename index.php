<?php

require __DIR__ . "/vendor/autoload.php";

$errorHandler = new Whoops\Run;

$errorHandler->pushHandler(new Whoops\Handler\PrettyPageHandler);
$errorHandler->register();

use App\Book;
use App\TextBook;
use App\Model\Model;

new Book();
echo "<br />";
new TextBook();
echo "<br />";

new Model();

// require __DIR__ . "/classes/Move.php";
// require __DIR__ . "/library/Lib.php";

use Carbon\Carbon;

$today = Carbon::now();

// composer dump-autoload
// composer dump-autoload -o
var_dump($today->tzName . "\n");
echo "\n";
var_dump($today->toDateTimeString());


echo "<br />";
new Lib();
echo "<br />";
new Move();

echo "<br />";
connect();
