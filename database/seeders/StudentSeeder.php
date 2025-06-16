<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Student::create([
            'name' => 'Paul Wahing',
            'age'=> 21,
            'gender'=>'male',
        ]);

        Student::create([
            'name' => 'Mark Cedrix',
            'age'=> 21,
            'gender'=>'male',
        ]);
    }
}
