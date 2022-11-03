<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'id' => 1,
            'name' => 'fundamentos de dibujo',
            'description' => 'Aquí aprenderás lo más básico en dibujo.',
            'duration' => 30,
            'image' => 'public/courses/course1.jpg'
        ]);

        Course::create([
            'id' => 2,
            'name' => 'Dibujo intermedio',
            'description' => 'Aquí aprenderás técnicas de dibujo con lapicero.',
            'duration' => 50,
            'image' => 'public/courses/course2.jpg'
        ]);

        Course::create([
            'id' => 3,
            'name' => 'Avanzado',
            'description' => 'Si completas este curso, Leonardo Da Vinci te admirará',
            'duration' => 50,
            'image' => 'public/courses/course3.jpg'
        ]);
    }
}
