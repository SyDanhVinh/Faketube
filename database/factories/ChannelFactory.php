<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Channel>
 */
class ChannelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ChannelName' => $this->faker->name(),
            'Description' => $this->faker->text(),
            'SubscribersCount' => $this->faker->randomNumber(),
            'URL' => $this->faker->url()
        ];
    }
}
