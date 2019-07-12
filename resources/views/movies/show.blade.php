@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                {{$movie->title}}
                <a href="{{route('movies.edit', $movie->id)}}">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </a>
            </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-6 p-2">
                            Titolo: {{$movie->title}}
                        </div>
                        <div class="col-sm-6 p-2">
                            Anno : {{$movie->year}}
                        </div>
                        <div class="col-sm-12 p-2">
                                Descrizione : {{$movie->description}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
