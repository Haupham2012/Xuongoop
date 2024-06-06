<?php
session_start();
 require 'vendor/autoload.php';
Dotenv\Dotenv::createImmutable(__DIR__)->load();
echo '<pre>';

 require_once __DIR__ . '/routes/index.php';


