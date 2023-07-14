<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function phone() : HasOne
    {
       // dd($this->hasone(Phone::class));
        return $this->hasOne(Phone::class);
    }
}
