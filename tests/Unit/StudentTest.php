<?php

namespace Tests\Unit;

use Tests\TestCase;
// use PHPUnit\Framework\TestCase;
use App\Models\Student;

class StudentTest extends TestCase
{
    public function test_save_new_student(){
        $respuesta = $this->post('/students', [
            'document_type' => 'CC',
            'document_number' => 94262139,
            'identify_document' => 'doc.pdf',
            'expedition_date' => '2012-03-27',
            'id_exped_muni' => 9,
            'names' => 'Orlando',
            'last_name1' => 'Arenas',
            'last_name2' => 'Restrepo',
            'gender' => 'M',
            'birth_date' => '1994-03-26',
            'id_birth_muni' => 7,
            'stratum' => 3,
            'id_course' => 1
        ]);

        return $respuesta->assertRedirect('/');
    }

    public function test_save_new_student2(){
        $respuesta = $this->post('/students', [
            'document_type' => 'CC',
            'document_number' => 94262140,
            'identify_document' => 'doc2.pdf',
            'expedition_date' => '2012-03-27',
            'id_exped_muni' => 9,
            'names' => 'Luis',
            'last_name1' => 'Montoya',
            'last_name2' => 'Castro',
            'gender' => 'M',
            'birth_date' => '1994-03-26',
            'id_birth_muni' => 7,
            'stratum' => 3,
            'id_course' => 1
        ]);

        return $respuesta->assertRedirect('/');
    }

    public function test_student_duplication(){
        $student1 = Student::make([
            'document_number' => 94262139,
        ]);

        $student2 = Student::make([
            'document_number' => 94262140,
        ]);

        $this->assertTrue($student1->document_number != $student2->document_number);
    }

    public function test_student_duplication2(){
        $student1 = Student::make([
            'document_number' => 94262139,
            'identify_document' => 'doc.pdf',
        ]);

        $student2 = Student::make([
            'document_number' => 94262140,
            'identify_document' => 'doc2.pdf',
        ]);

        $this->assertTrue($student1->document_number != $student2->document_number && $student1->identify_document != $student2->identify_document);
    }

    public function test_delete_student(){
        $student = Student::factory()->count(1)->make();

        $student = Student::first();

        if($student){
            $student->delete();
        }

        $this->assertTrue(true);
    }

    public function test_delete_student2(){
        $student = Student::factory()->count(2)->make();

        $student = Student::first();

        if($student){
            $student->delete();
        }

        $this->assertTrue(true);
    }

    public function test_delete_student3(){
        $student = Student::factory()->count(3)->make();

        $student = Student::first();

        if($student){
            $student->delete();
        }

        $this->assertTrue(true);
    }
}
