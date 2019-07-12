@extends('layouts.app')
@section('title', 'Modifica '.$movie->title)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Modifica i dati del film {{$movie->title}}</div>

                <div class="card-body">
                    <form action="/movies/{{$movie->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" name="title" class="form-control" value="{{$movie->title}}" placeholder="Titolo film">
                        </div>
                        <div class="form-group">
                            <label >Anno</label>
                            <input type="number" name="year" class="form-control" value="{{$movie->year}}"  placeholder="Anno del film">
                        </div>
                        <div class="form-group">
                            <label>Descrizione</label>
                            <textarea  name="description" class="form-control" placeholder="Descrizione film">
                                    {{$movie->description}}
                            </textarea>
                        </div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Aggiorna</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
