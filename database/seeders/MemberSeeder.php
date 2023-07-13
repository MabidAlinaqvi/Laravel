<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('members')
        ->insert([
            'id'=>rand(20,100),
            'firstname'=>Str::random(10),
            'lastname'=>Str::random(10),
            'phoneno'=>Str::random(10),
            'company'=>Str::random(10)
        ]);
    }
}
