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
        //récupère tout les messages dans la variable $message 
        // et trier les messages du plus vieux au plus récent 
        $messages = Message::query()
        ->orderBy('date_heure','asc')
        ->get();
        return view("welcome");
        // return view("home",compact('messages'));
        //compresse les msg pour aller plus vite


    }
    public function a_propos(): View{
        return view ('a-propos');
    }
    public function contact(): View{
        return view ('contact');
    }
}
