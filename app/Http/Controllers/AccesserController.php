<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class AccesserController extends Controller
{
    public function changeValue(){
    //    return Member::all();
        $member = new Member;
        $member->ID = 15;
        $member->firstname = "Mr. amir";
        $member->lastname = "shah";
        $member->phoneno = "125698";
        $member->company = "government";
        $member->save();
        return "data saved successfully";
    }
}
