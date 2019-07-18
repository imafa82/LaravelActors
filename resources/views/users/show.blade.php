@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                Pagina di {{$user->name}}
            </div>

                <div class="card-body">
                    <div class="row p-2">
                            <div class="col-sm-6 p-2">
                                Nome: {{$user->name}}
                            </div>
                            <div class="col-sm-6 p-2">
                                Email: {{$user->email}}
                            </div>
                    </div>
                    <div>
                        <h2>Permessi dell'utente</h2>
                        @forelse ($user->permissions as $permission)
                            <div class="row p-2 m-1">
                                <div class="col-10">{{$permission->name}}</div>
                                <div class="col-2"></div>
                            </div>
                        @empty
                            <div>L'utente non ha alcun permesso</div>
                        @endforelse
                        <div>
                            @if(count($permissions))
                                <form action="/users/{{$user->id}}/permissions" method="POST">
                                    @csrf
                                    <select name="permission">
                                        @foreach ($permissions as $p)
                                            <option value="{{$p->id}}">{{$p->name}}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-success pull-right">Aggiungi permesso</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
