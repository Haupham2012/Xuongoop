<?php
namespace Admin\XuongOop\Controllers\Client;
use Admin\XuongOop\Commons\Controller;

class HomeController extends Controller
{
    public function index() {
        $name = 'Haupham';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}