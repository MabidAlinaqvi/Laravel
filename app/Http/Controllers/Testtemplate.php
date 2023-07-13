<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testtemplate extends Controller
{
    function viewLoad(){
        $data = ['ali','abbas','naqvi','raza'];
        return view('test_template',["users"=>$data]);
    }
}
//"test"=>['ali','abbas','raza'],