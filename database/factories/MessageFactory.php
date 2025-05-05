<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Message;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //génère un id aléatoire à partir de la classe user
            'expediteur_id'=>User::all()->random()->id,
            'date_heure' => fake()->dateTimeBetween('-2 years', 'now'),
            'message'=>$this->faker->paragraph(),
            
        ];
    }
   
}
