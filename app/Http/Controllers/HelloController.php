<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function helloAction(){
        return view('hello', ['name' => 'sherif', 'age' => 20, 'books' => ['novel', 'stroy']]);
    }
    public function hello2Action(){
        return "this is function hello 2 action";
    }
}
