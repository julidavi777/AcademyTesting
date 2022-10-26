<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'id' => 1,
            'name' => 'Dibujo 1',
            'hourly_intensity' => '40'
        ]);

        Subject::create([
            'id' => 2,
            'name' => 'Dibujo 2',
            'hourly_intensity' => '50'
        ]);

        Subject::create([
            'id' => 3,
            'name' => 'Dibujo 3',
            'hourly_intensity' => '60'
        ]);

        Subject::create([
            'id' => 4,
            'name' => 'Dibujo 4',
            'hourly_intensity' => '80'
        ]);

        Subject::create([
            'id' => 5,
            'name' => 'Dibujo 5',
            'hourly_intensity' => '80'
        ]);

        // Subject::create([
        //     'id' => 6,
        //     'name' => 'Dibujo 6',
        //     'hourly_intensity' => '40'
        // ]);

        // Subject::create([
        //     'id' => 7,
        //     'name' => 'Dibujo 7',
        //     'hourly_intensity' => '30'
        // ]);

        // Subject::create([
        //     'id' => 8,
        //     'name' => 'Dibujo 8',
        //     'hourly_intensity' => '30'
        // ]);

        // Subject::create([
        //     'id' => 9,
        //     'name' => 'Dibujo 9',
        //     'hourly_intensity' => '40'
        // ]);

        // Subject::create([
        //     'id' => 10,
        //     'name' => 'Dibujo 10',
        //     'hourly_intensity' => '50'
        // ]);
    }
}
