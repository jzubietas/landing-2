<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //return view('web.welcome');
        return view('web.home');
    }

    public function nosotros(){
        //return view('web.welcome');
        return view('web.nosotros');
    }

    public function distribuidores(){
        //return view('web.welcome');
        return view('web.distribuidores');
    }

    public function noticias(){
        //return view('web.welcome');
        return view('web.noticias');
    }
}
