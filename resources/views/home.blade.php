@extends('layouts.app')

@section('main-content')
    <h1>Laravel Viaggi</h1>
    
    <div class="container">
        <div class="cards">
            @foreach ($travels as $travel)
            <div class="card">
                <h3>Partenza: {{ $travel->partenza }}</h3>
                <h4>Data partenza: {{ $travel->orario_partenza }}</h4>
                <h3>Destinazione: {{ $travel->destinazione }}</h3>
                <h4>Data arrivo: {{ $travel->orario_arrivo }}</h4>
    
                <h3>Prezzo: </h3> <h4>{{$travel->prezzo}}</h4>
    
                <h3>Numero Camere: </h3>
                <h4>{{ $travel->numero_camere }}</h4>
                <h3>Numero Persone: </h3>
                <h4>{{ $travel->numero_persone }}</h4>
    
                <h3>Wifi Gratis: </h3> <h4>{{$travel->wifi_gratis ? 'Si' : 'No'}}</h4>
            </div>
            @endforeach
        </div>
    </div>

@endsection
