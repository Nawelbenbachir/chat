<x-guest-layout>

    @foreach($messages as $message)
         <div>
            <h3>{{$message->date_heure}}</h3>
            <p>{{$message->message}}</p>
        </div>
    @endforeach

</x-guest-layout>

