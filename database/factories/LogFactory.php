<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'ip' => $this->faker->ipv4(),
            'message' => $this->faker->sentence(),
            'error' => $this->faker->sentence(),
        ];
    }
}
