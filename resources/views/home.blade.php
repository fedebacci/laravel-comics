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
    Contenuto
    <ul>
        @foreach ($comics as $comic)
            <li>
                <h5>{{ $comic['title'] }}</h5>
            </li>
        @endforeach
    </ul>
</main>
@endsection
