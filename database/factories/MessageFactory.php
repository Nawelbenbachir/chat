<?php

namespace Database\Factories;
use App\Models\Users;
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
            'expediteur_id'=>User::all()->random()->id,
            'date_heure'=>fake()->dateTimeBetween('2-year','now'),
            'message'=>$this->faker->words(500),
            
        ];
    }
   
}
