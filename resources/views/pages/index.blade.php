@extends('layouts.main-layout')
@section('head')
    <title>db-movies</title>
@endsection
@section('content')
    <h1>LISTA FILM:</h1>
    <div class="container">
        @foreach($movies as $movies)
        <div class="card">
            <div class="card-title">
                <h2>
                    {{ $movies['title']}}
                </h2>
            </div>
            <div class="card-info">
                <div class="date">
                    <h5>Data di uscita</h5>
                    {{ $movies['date']}}
                </div>
                <div class="rating">
                    <h5>Voto</h5>
                    {{ $movies['vote']}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
