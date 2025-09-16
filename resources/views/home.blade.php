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

                            {{-- <a href="#" class="card border-0 h-100 bg-dark text-bg-dark text-decoration-none">
                                <img src="{{ $comic['thumb'] }}" class="img-fluid card-img-top rounded-0" alt="{{ $comic['title'] }}">
                                <div class="card-body px-0">
                                    <h5 class="card-title m-0">
                                        {{ $comic['series'] }}
                                    </h5>
                                </div>
                            </a> --}}

                            <x-card :comic="$comic">
                                <x-slot:thumb>
                                    {{ $comic['thumb'] }}
                                </x-slot:thumb>
                                <x-slot:title>
                                    {{ $comic['title'] }}
                                </x-slot:title>
                                <x-slot:series>
                                    {{ $comic['series'] }}
                                </x-slot:series>
                                {{-- B --}}
                            </x-card>

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



        <section id="merchandise" class="bg-primary py-3">
            <div class="container d-flex flex-wrap justify-content-center align-items-center gap-3">

                <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" class="img-fluid" alt="">
                    <div class="card-body p-0 ps-1">
                        <p class="m-0 text-uppercase">
                            Digital Comics
                        </p>
                    </div>
                </div>
                <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" class="img-fluid" alt="">
                    <div class="card-body p-0 ps-1">
                        <p class="m-0 text-uppercase">
                            DC Merchandise
                        </p>
                    </div>
                </div>
                <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" class="img-fluid" alt="">
                    <div class="card-body p-0 ps-1">
                        <p class="m-0 text-uppercase">
                            Subscription
                        </p>
                    </div>
                </div>
                <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" class="img-fluid" alt="">
                    <div class="card-body p-0 ps-1">
                        <p class="m-0 text-uppercase">
                            Comic Shop Locator
                        </p>
                    </div>
                </div>
                <div class="card py-3 d-flex flex-row align-items-center justify-content-center border-0 radius-0">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" class="img-fluid" alt="">
                    <div class="card-body p-0 ps-1">
                        <p class="m-0 text-uppercase">
                            DC Power Visa
                        </p>
                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection
