@extends('layouts.master')


@php
    $comics = config("comics");
    // dd($comics);
@endphp



{{-- @section('title')
Laravel Comics - Home
@endsection --}}
@section('title', 'Laravel Comics - Home')



@section('content')
    <main>
        <section id="jumbotron">
            {{-- <img class="img-fluid" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron"> --}}
        </section>

        <div class="container">
            <ul>
                @foreach ($comics as $comic)
                    <li>
                        <h5>{{ $comic['title'] }}</h5>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
