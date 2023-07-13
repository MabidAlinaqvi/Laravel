<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserData extends Controller
{
    public function dbUsers(){
        return DB::select("select * from Persons");
    }
}
