<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Users extends Controller
{
    public function userName($name){
        if(View::exists('aboutqq')){
            return view("about", ['name'=>$name]);
        }
        else{
            return "Brother page not found";
        }
    }
}
