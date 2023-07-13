<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashControl extends Controller
{
    public function addFlash(Request $req){
        $data = $req->input('username');
        session()->flash('user',$data);
        return redirect('addmember');
    }
}
