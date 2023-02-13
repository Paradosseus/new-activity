<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lastName' => fake()-> lastName(),
            'firstName' => fake()-> firstName(),
            'email' => fake()-> safeEmail(),
            'address' => fake()-> address(),
            'contactNumber' => fake()->phoneNumber()
        ];
    }
}
