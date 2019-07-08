@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista Attori</div>

                <div class="card-body">
                    <ul>
                        @foreach ($actors as $actor)
                            <li>{{$actor->name}} {{$actor->surname}}
                                <ul>
                                    @forelse ($actor->movies as $movie)
                                        <li>{{$movie->title}}</li>
                                    @empty
                                        Non vi sono film dell'attore
                                    @endforelse
                                </ul>
                            </li>   
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
