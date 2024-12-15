<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('enrollments')->insert([
            [
                'id' => 1,
                'name' => 'Mayates 101',
                'description' => 'Estudio del arte de la mayateria'
            ]
       ]); 
    }
}
