<?php

require __DIR__ . "/vendor/autoload.php";

$errorHandler = new Whoops\Run;

$errorHandler->pushHandler(new Whoops\Handler\PrettyPageHandler);
$errorHandler->register();



use Devscreencast\ResponseClass\JsonResponse;


$student = array(
    'name' => 'John Doe',
    'course' => 'Software Engineering',
    "level" => "200",
    "collections" => ["books" => "Intro to UML", "music"=> "rap"]
);

new JsonResponse("ok", "", $student);