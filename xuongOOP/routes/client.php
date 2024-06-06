<?php
// $router->get('/',function(){
//     echo "Trang chu";
// });

//Wesite cos trang la:
// Trang chu
// gioiws thieu
// san pham
// Chi tiet san pham
// Lien he

use Admin\XuongOop\Controllers\Client\AboutController;
use Admin\XuongOop\Controllers\Client\HomeController;
use Admin\XuongOop\Controllers\Client\ContactController;
use Admin\XuongOop\Controllers\Client\ProductController;

$router->get('/', HomeController::class . '@index');
$router->get('/about', AboutController::class . '@index');

$router->get('/contact', ContactController::class . '@index');
$router->post('/contact/store',  ContactController::class . '@store');