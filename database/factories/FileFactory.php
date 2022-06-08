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
            'name' => $this->faker->word() . '.' . $this->faker->fileExtension(),
            'path' => 'uploads/' . preg_replace('#[ \\.]#', '', $this->faker->sentence()),
            'size' => $this->faker->randomNumber(3),
            'description' => $this->faker->paragraph(3)
        ];
    }

    // Relationship To User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
