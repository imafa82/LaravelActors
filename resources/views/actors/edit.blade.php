@extends('layouts.app')
@section('title', 'Modifica '.$actor->name.' '.$actor->surname)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Modifica i dati di {{$actor->name}} {{$actor->surname}}</div>

                <div class="card-body">
                    <form action="{{route('actors.update', $actor->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label >Nome</label>
                        <input type="text" name="name" class="form-control" value="{{$actor->name}}" placeholder="Nome Attore">
                        </div>
                        <div class="form-group">
                            <label >Cognome</label>
                            <input type="text" name="surname" class="form-control" value="{{$actor->surname}}"  placeholder="Cognome Attore">
                        </div>
                        <div class="form-group">
                            <label>Anno di Nascita</label>
                            <input type="text" name="year" class="form-control" value="{{$actor->year}}" placeholder="Anno di Nascita">
                        </div>

                        <div class="form-group">
                            <input type="file" name="imageFile">
                        </div>
                        @if($actor->photo)
                            <div class="p-2 imgView">
                                <img  src="{{$actor->path}}" alt="immagine di {{$actor->name}} {{$actor->surname}}">
                            </div>
                        @endif
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
