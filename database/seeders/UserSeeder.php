<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email' => 'smthutau@gmail.com',
                'user' =>'sebah',
                'password' => Hash::make('1234'),
                'name' => 'Sebas',
                'last_name' => 'Hosan',
                'mother_last_name' => 'Hermon',
            ]
        ]);
    }
}
