<?php
/*******************************
    Author : Sibin V M
    Title : Blog Fatcory
    Created Date : 10-06-2022
********************************/

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;  

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // set indian timezone
        date_default_timezone_set('Asia/Calcutta');

        return [
            'title' => $this->faker->text(55),
            'content' => $this->faker->paragraph(30),
        ];
    }
}
