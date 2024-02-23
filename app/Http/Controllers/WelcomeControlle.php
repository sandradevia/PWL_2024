<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeControlle extends Controller
{
    public function hello() {
        return ('Hello World');
    }
    public function greeting(){
        return view('blog.hello')
        ->with('name', 'Andi')
        ->with('occupation', 'Astronaut');
    }
}
