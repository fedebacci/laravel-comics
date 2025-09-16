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
        </section>



        <section id="current-series" class="list-section bg-dark text-bg-dark pt-5 pb-3">
            {{-- Titolo della sezione --}}
            <div class="container">
                <h2 class="list-section-title text-uppercase bg-primary d-inline-block px-4 py-2 m-0">
                    Current Series
                </h2>
            </div>

            {{-- Lista effettiva --}}
            <div class="container">
                <div class="row gx-3">
                    {{-- Ciclo sui fumetti --}}
                    @foreach ($comics as $comic)
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">

                            <a href="#" class="card border-0 h-100 bg-dark text-bg-dark text-decoration-none">
                                <img src="{{ $comic['thumb'] }}" class="img-fluid card-img-top rounded-0" alt="{{ $comic['title'] }}">
                                <div class="card-body px-0">
                                    <h5 class="card-title m-0">
                                        {{ $comic['series'] }}
                                    </h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-12 text-center mt-3">
                        {{-- Bottone Load More --}}
                        <a href="#" class="btn-load-more btn btn-primary rounded-0 px-5 py-1">
                            Load More
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
