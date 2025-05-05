<?php

namespace Database\Seeders;
use App\Models\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //génère des données à partir de la classe correspondante (message ou utilisateur)
        Message::factory(100)->create();
    }
}
