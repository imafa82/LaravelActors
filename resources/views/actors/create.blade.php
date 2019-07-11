@extends('layouts.app')
@section('title', 'Creazione attore')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crea nuovo attore</div>

                <div class="card-body">
                    <h1>Crea il nuovo attore</h1>
                   <form action="/actors" method="POST">
                        @csrf
                        <div class="form-group">
                            <label >Nome</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Nome Attore">
                        </div>
                        <div class="form-group">
                            <label >Cognome</label>
                            <input type="text" name="surname" class="form-control" value="{{old('surname')}}"  placeholder="Cognome Attore">
                        </div>
                        <div class="form-group">
                            <label>Anno di Nascita</label>
                            <input type="text" name="year" class="form-control" value="{{old('year')}}" placeholder="Anno di Nascita">
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
                        <button type="submit" class="btn btn-primary">Salva</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
