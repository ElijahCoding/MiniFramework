<?php

use App\Config\Config;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../');
$dotenv->load();

var_dump(getenv('APP'));
