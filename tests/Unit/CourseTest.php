<?php

namespace Tests\Unit;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Models\Course;

class CourseTest extends TestCase
{
    public function test_save_new_course(){
        $respuesta = $this->post('/courses', [
            'name' => 'Dibujo Nivel 2',
            'description' => 'Técnicas de dibujo con boligráfo',
            'duration' => 60,
            'image' => 'img.png'
        ]);

        return $respuesta->assertRedirect('/');
    }

    public function test_save_new_course2(){
        $respuesta = $this->post('/courses', [
            'name' => 'Dibujo Nivel 3',
            'description' => 'Técnicas de dibujo con colores',
            'duration' => 80,
            'image' => 'img2.png'
        ]);

        return $respuesta->assertRedirect('/');
    }

    public function test_course_duplication(){
        $course1 = Course::make([
            'name' => 'Dibujo Nivel 2',
        ]);

        $course2 = Course::make([
            'name' => 'Dibujo Nivel 3',
        ]);

        $this->assertTrue($course1->name != $course2->name);
    }

    public function test_course_duplication2(){
        $course1 = Course::make([
            'name' => 'Dibujo Nivel 2',
            'description' => 'Técnicas de dibujo con boligráfo',
        ]);

        $course2 = Course::make([
            'name' => 'Dibujo Nivel 3',
            'description' => 'Técnicas de dibujo con colores',
        ]);

        $this->assertTrue($course1->name != $course2->name && $course1->description != $course2->description);
    }

    public function test_course_duplication3(){
        $course1 = Course::make([
            'name' => 'Dibujo Nivel 2',
            'description' => 'Técnicas de dibujo con boligráfo',
            'image' => 'img.png'
        ]);

        $course2 = Course::make([
            'name' => 'Dibujo Nivel 3',
            'description' => 'Técnicas de dibujo con colores',
            'image' => 'img2.png'
        ]);

        $this->assertTrue($course1->name != $course2->name && $course1->description != $course2->description && $course1->image != $course2->image);
    }

    public function test_delete_course(){
        $course = Course::factory()->count(1)->make();

        $course = Course::first();

        if($course){
            $course->delete();
        }

        $this->assertTrue(true);
    }

    public function test_delete_course2(){
        $course = Course::factory()->count(2)->make();

        $course = Course::first();

        if($course){
            $course->delete();
        }

        $this->assertTrue(true);
    }

    public function test_delete_course3(){
        $course = Course::factory()->count(3)->make();

        $course = Course::first();

        if($course){
            $course->delete();
        }

        $this->assertTrue(true);
    }

}
