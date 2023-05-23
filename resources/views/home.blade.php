@extends('layouts.app')


@section('content')
    <main>
        <div class="container w-75 py-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3">
                @foreach ($movies as $movie)
                    <div class="col d-flex flex-column">

                            <img class="img-fluid h-100" src="{{ $movie['thumb'] }}" alt="">
                            <p class="text-uppercase py-2">{{ $movie['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
