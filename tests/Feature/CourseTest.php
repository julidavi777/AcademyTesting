<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    public function test_save_course(){
        $response = $this->post('courses', [
            'name' => 'Dibujo Nivel 1',
            'description' => 'Técnicas básicas de dibujo',
            'duration' => 40,
            'image' => 'img.png'
        ]);

        $response->assertJsonStructure([
            "name",
            "description",
            "duration",
            "image"
            ])
        ->assertJson(['name'=>'Dibujo Nivel 1'])
        ->assertStatus(201);

        $this->assertDatabaseHas('courses', [
            'name' => 'Dibujo Nivel 1',
            'description' => 'Técnicas básicas de dibujo',
            'duration' => 40,
            'image' => 'img.png'
        ]);
    }
}
