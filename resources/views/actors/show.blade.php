@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Pagina di {{$actor->name}} {{$actor->surname}}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 p-2">
                            Nome: {{$actor->name}}
                        </div>
                        <div class="col-sm-6 p-2">
                            Cognome: {{$actor->surname}}
                        </div>
                        <div class="col-sm-6 p-2">
                            Anno di nascita: {{$actor->year}}
                        </div>
                    </div>
                    <div>
                        <h2>Lista film di {{$actor->name}} {{$actor->surname}}</h2>
                        @forelse ($actor->movies as $movie)
                            <div class="row">
                                <div class="col-sm-8 offset-sm-2">
                                    {{$movie->title}}
                                </div>
                            </div>
                        @empty
                            <p>Non vi sono film per questo attore</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
