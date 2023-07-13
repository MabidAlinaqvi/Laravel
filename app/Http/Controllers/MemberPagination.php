<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberPage;

class MemberPagination extends Controller
{
    public function memberList(){
        $data = MemberPage::paginate(3);
        return view('pagination',['members'=>$data]);
    }
}
