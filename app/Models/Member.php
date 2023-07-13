<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getFirstnameAttribute($value){
        return $value. " ali";
    }

    public function setFirstnameAttribute($value){
        if(substr($value,0,3)!="Mr."){
            return $this->attributes['firstname']="Mr. ".$value;
        }
        return $this->attributes['firstname']=$value;
    }
}
