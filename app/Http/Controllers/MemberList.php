<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberList extends Controller
{
    public function memberList(){
        $data = Member::all();
        return view('memberlist',['membersInfo'=>$data]);
    }
}
