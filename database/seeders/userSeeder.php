<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'smith',
            'email'=>'smith123@mail.com',
            'phoneno'=>'224466',
            'password'=>Hash::make('12345'),
            'Address'=>'Delhi India',


        ]);
    }
}
