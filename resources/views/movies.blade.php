@extends('layouts.master')

@section('title', 'Laravel Comics - Movies')



@section('content')
    <main>
        <section class="py-5">
            <div class="container">
                <h1 class="text-center">
                    Movies Page
                </h1>
            </div>
        </section>

        <x-banner>
            <x-slot:background>
                success
            </x-slot:background>
            <x-slot:color>
                white
            </x-slot:color>
            

            The new Aquaman movie is out!

        </x-banner>

    </main>
@endsection