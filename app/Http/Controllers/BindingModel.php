<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class BindingModel extends Controller
{
    public function index(Member $key){
        return $key;
    }
}
