@extends('layouts.master')

@section('title', 'Laravel Comics - Characters')



@section('content')
    <main>
        <section class="py-5">
            <div class="container">
                <h1 class="text-center">
                    Characters Page
                </h1>
            </div>
        </section>

        <x-merchandise>
            <x-banner>
                <x-slot:background>
                    warning
                </x-slot:background>
                <x-slot:color>
                    dark
                </x-slot:color>
                

                10% Discount on all Batman comics until tomorrow!

            </x-banner>
        </x-merchandise>
    </main>
@endsection