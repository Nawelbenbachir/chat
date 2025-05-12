<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\View\View;

class HomeController extends Controller
{
//Nouvelle synthaxe php8 permet de préciser quel type de variable retourne la fonction
    public function index() : View
    {
        return view('contact');
        //return view('a-propos');


        //récupère tout les messages dans la variable $message 
        // et trier les messages du plus vieux au plus récent 
        $messages = Message::query()
        ->orderBy('date_heure','asc')
        ->get();
        return view("home",compact('messages'));
        //compresse les msg pour aller plus vite


    }
}
