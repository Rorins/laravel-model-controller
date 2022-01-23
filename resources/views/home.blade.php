@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="text-center">MOVIES</h1>
    <section>
        @foreach ($movies as $movie )
        {{-- oggetto movie e proprietà dell'oggetto sono le colonne della tabella, prendiamo quindi title etc --}}
        <div class="card" >
            <h3>{{$movie->title}}</h3>
            <h3>{{$movie->original_title}}</h3>
            <h3>{{$movie->nationality}}</h3>
            <h3>{{$movie->date}}</h3>
            <h3>{{$movie->vote}}</h3>
        </div>
            
        @endforeach
    </section>
</div>
@endsection