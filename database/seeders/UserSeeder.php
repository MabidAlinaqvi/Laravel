<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')
            ->insert([
                'ID'=>rand(20,100),
                'FirstName'=>Str::random(10),
                'LastName'=>Str::random(10),
                'PhoneNo'=>Str::random(10),
                'Company'=>Str::random(10)
            ]);
    }
}
