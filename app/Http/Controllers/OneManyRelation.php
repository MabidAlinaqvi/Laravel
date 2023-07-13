<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
use App\Models\Country;


class OneManyRelation extends Controller
{
    public function relationPrac(){
        $qeury = Company::find(3)->getCountry;
    //    dd($qeury);
    //    dd(Company::find(1));
    //    dd(Country::find(1));
    //      dd(Employee::find(2)->getCompany);
    //    dd(Company::find(1)->getCountry);
    //    $empComp = Employee::find(3)->getCompany;
    //    return $empComp;
    //    dd($empComp);
    //    return Company::find($empComp[0]->comp_id)->getCountry;
    }
}
