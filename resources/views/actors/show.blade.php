@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                Pagina di {{$actor->name}} {{$actor->surname}}
                <a href="{{route('actors.edit', $actor->id)}}">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </a>
            </div>

                <div class="card-body">
                    <div class="row align-items-center p-2">
                        <div class="col-sm-6 imgView p-2">
                            <img src="{{$actor->path}}" alt="{{$actor->name}} {{$actor->surname}}">
                        </div>
                        <div class="col-sm-6 p-2">
                                <div class="col-sm-12 p-2">
                                    Nome: {{$actor->name}}
                                </div>
                                <div class="col-sm-12 p-2">
                                    Cognome: {{$actor->surname}}
                                </div>
                                <div class="col-sm-12 p-2">
                                    Anno di nascita: {{$actor->year}}
                                </div>
                        </div>

                    </div>
                    <div>
                        <h2>
                            Lista film di {{$actor->name}} {{$actor->surname}}
                            <a href="{{route('movies.create', $actor->id)}}">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </h2>
                        @forelse ($actor->movies as $movie)
                            <div class="row">
                                <div class="col-sm-8 offset-sm-2">
                                    <div class="row">
                                        <div class="col-8">
                                                {{$movie->title}}
                                        </div>
                                        <div class="col-2">
                                                <a href="{{route('movies.show', $movie->id)}}">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                        </div>
                                        <div class="col-2">
                                        <form action="{{route('movies.destroy', $movie->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary-outline">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>


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
