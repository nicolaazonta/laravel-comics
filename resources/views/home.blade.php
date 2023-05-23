@extends('layouts.app')


@section('content')
    
<main>    
    <div class="container w-75 py-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3">
            @foreach ($movies as $movie)
                
            <div class="col">
                <div class="card shadow text-center h-100">
                    <h3 class="card-title">{{ $movie['title'] }}</h3>

                </div>
            </div>

            @endforeach
        </div>
    </div>
</main>

@endsection


