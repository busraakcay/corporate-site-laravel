<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "Mehmet Uçar",
            'username' => 'root',
            'email' => "mehmetucar@example.com",
            'password' => "$2y$10$4LR/3ltwCe7qkT3WPs0nmu9TUC89ffUQL1N/Cos19Lnb/US9MYl6K",
        ];
    }
}
