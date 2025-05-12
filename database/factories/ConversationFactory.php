<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Conversation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ConversationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre'=>$this->faker->text(255),
            'createur_id'=>User::all()->random()->id,
            'interlocuteur1_id'=>User::all()->random()->id,
            'interlocuteur2_id'=>User::all()->random()->id,
            'created_at' => fake()->dateTimeBetween('-2 years', 'now'),
            //'updated_at' => fake()->dateTimeBetween('created_at', 'now'),

        ];
    }
}
