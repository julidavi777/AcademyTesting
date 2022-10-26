<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'document_type' => $this->faker->randomElement(['CC', 'TI', 'CE']),
            'document_number' => $this->faker->randomElement([123456789, 987654321]),
            'identify_document' => $this->faker->word(),
            'expedition_date' => $this->faker->date(),
            'id_exped_muni' => $this->faker->randomElement([1,2,3,4,5,6]),
            'names' => $this->faker->name(),
            'last_name1' => $this->faker->lastName(),
            'last_name2' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['M', 'F']),
            'birth_date' => $this->faker->date(),
            'id_birth_muni' => $this->faker->randomElement([1,2,3,4,5,6]),
            'stratum' => $this->faker->randomElement([1,2,3,4,5,6]),
            'id_course' => $this->faker->randomElement([1,2,3,4,5,6]),
        ];
    }
}
