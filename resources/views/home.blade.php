<div>
<!-- méthode laravel dé déboguage qui permet d'afficher la variable et d'arrêter tout -->
    <!-- {{dd($messages);}} -->
    @foreach($messages as $message)
        <div>
            <h3>{{$messages->date_heure}}</h3>
            <p>{{$messages->message}}</p>
        </div>
    @endforeach
</div>
