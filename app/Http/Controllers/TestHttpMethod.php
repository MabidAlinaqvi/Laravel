<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestHttpMethod extends Controller
{
    public function httpMethod(Request $req){
            return $req->input();
    }
}
