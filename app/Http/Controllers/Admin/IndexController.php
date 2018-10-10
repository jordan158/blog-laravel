<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        return view('welcome');
    }
    public function login(){
      session(['admin' => '10000000000000000']);
      //echo session('key');
        echo 'namespace登陆';

    }
}