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
            'name' => $this->faker->text(50),
            'createur'=>User::all()->random()->id,
            'description'=>$this->faker->text(255),
            'max_user'=>$this->faker->numberBetween(1, 100),
        ];
    }
}
