@extends('layouts.app')
@section('title', 'Creazione nuovo film')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Creazione nuovo film di {{$actor->name}} {{$actor->surname}}</div>

                <div class="card-body">
                    <form action="/movies" method="POST">
                        @csrf
                        <input type="hidden" name="actor_id" value="{{$actor->id}}">
                        <div class="form-group">
                            <label >Title</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Titolo film">
                        </div>
                        <div class="form-group">
                            <label >Anno</label>
                            <input type="number" name="year" class="form-control" value="{{old('year')}}"  placeholder="Anno del film">
                        </div>
                        <div class="form-group">
                            <label>Descrizione</label>
                            <textarea  name="description" class="form-control" placeholder="Descrizione film">
                                    {{old('description')}}
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
                        <a href="{{route('actors.show', $actor->id)}}" class="btn btn-primary">Annulla</a>
                        <button type="submit" class="btn btn-primary">Crea nuovo film</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
