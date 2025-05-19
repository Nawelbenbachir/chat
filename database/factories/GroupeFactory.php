<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Groupe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Groupe>
 */
class GroupeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'created_at' => fake()->dateTimeBetween('-2 years', 'now'),
            'createur'=>User::all()->random()->id,
            'description'=>$this->faker->text(255),
            'nombres_de_membres'=>$this->faker->numberBetween(1, 100),
        ];
    }
}
