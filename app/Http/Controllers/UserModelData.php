<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class UserModelData extends Controller
{
    public function getUsers(){
        return Person::all();
    }
}
