<?php
require_once "./vendor/autoload.php";

use ScssPhp\ScssPhp\Compiler;
use ScssPhp\Server\Server;

$directory = "./static/scss";

$scss = new Compiler();
$scss->setFormatter('ScssPhp\ScssPhp\Formatter\Compressed');

$server = new Server($directory, null, $scss);
$server->serve();