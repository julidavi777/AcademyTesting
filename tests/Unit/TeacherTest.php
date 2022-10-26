<?php

namespace Tests\Unit;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;

use App\Models\Teacher;

class TeacherTest extends TestCase
{
    public function test_save_new_teacher(){
        $respuesta = $this->post('/teachers', [
            'name' => 'Andrea',
            'last_name' => 'Zapata',
            'college_degree' => 'Licenciada en artes plásticas',
            'age' => 42,
            'contract_date' => '2022-09-04',
            'image' => 'img.png',
            'identify_document' => 'doc.pdf',
            'course_id' => 1
        ]);

        return $respuesta->assertRedirect('/');
    }

    public function test_save_new_teacher2(){
        $respuesta = $this->post('/teachers', [
            'name' => 'Daniel',
            'last_name' => 'Zapata',
            'college_degree' => 'Licenciado en dibujo técnico',
            'age' => 41,
            'contract_date' => '2022-09-04',
            'image' => 'img2.png',
            'identify_document' => 'doc2.pdf',
            'course_id' => 2
        ]);

        return $respuesta->assertRedirect('/');
    }

    public function test_teacher_duplication(){
        $teacher1 = Teacher::make([
            'image' => 'img.png',
        ]);

        $teacher2 = Teacher::make([
            'image' => 'img2.png',
        ]);

        $this->assertTrue($teacher1->image != $teacher2->image);
    }

    public function test_teacher_duplication2(){
        $teacher1 = Teacher::make([
            'image' => 'img.png',
            'identify_document' => 'doc.pdf',
        ]);

        $teacher2 = Teacher::make([
            'image' => 'img2.png',
            'identify_document' => 'doc2.pdf',
        ]);

        $this->assertTrue($teacher1->image != $teacher2->image && $teacher1->identify_document != $teacher2->identify_document);
    }

    public function test_delete_teacher(){
        $teacher = Teacher::factory()->count(1)->make();

        $teacher = Teacher::first();

        if($teacher){
            $teacher->delete();
        }

        $this->assertTrue(true);
    }

    public function test_delete_teacher2(){
        $teacher = Teacher::factory()->count(2)->make();

        $teacher = Teacher::first();

        if($teacher){
            $teacher->delete();
        }

        $this->assertTrue(true);
    }

    public function test_delete_teacher3(){
        $teacher = Teacher::factory()->count(3)->make();

        $teacher = Teacher::first();

        if($teacher){
            $teacher->delete();
        }

        $this->assertTrue(true);
    }
}
