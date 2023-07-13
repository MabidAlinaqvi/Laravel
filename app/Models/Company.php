<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class Company extends Model
{
    use HasFactory;
    protected $primaryKey = 'comp_id';
    public $timestamps = false;
    // public function getCountry(){
    //     //return $this->hasOne(Country::class,'company_id','idcoutries');
    //     dd($this->hasOne(Country::class,'company_id')->toSql());
    // }
}
