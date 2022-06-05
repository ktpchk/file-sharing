<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->userName() . '.' . $this->faker->fileExtension(),
            'size' => $this->faker->randomNumber(3)
        ];
    }
}
