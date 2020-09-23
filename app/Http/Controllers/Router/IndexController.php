<?php

namespace App\Http\Controllers\Router;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index ($route) {
        $routes = [
            'about' => 'about',
            'contacts' => 'contacts',
            'admin' => 'admin.admin'
        ];
        foreach ($routes as $key => $val) {
            if ($key == $route) {
                return view($val, ['route' => '/' . $key]);
            }
        }
        return view('error');
    }
}
