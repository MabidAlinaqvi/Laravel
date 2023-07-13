<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionControl extends Controller
{
    public function sessionData(Request $req){
        $data = $req->input();
        $req->session()->put('userIs',$data['username']);
        return redirect('userprofile');
    }
}
