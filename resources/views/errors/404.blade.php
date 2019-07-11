@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">La pagina non esiste</div>

                <div class="card-body">
                    <h3><a href="{{route('home')}}">Hai sbagliato pagina, torna sul sito</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
