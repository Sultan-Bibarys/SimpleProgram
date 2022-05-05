<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function index(){
        return view('index');
    }
    public function second_page(){
        return view('second');
    }
}
