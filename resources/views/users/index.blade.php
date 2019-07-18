@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista Utenti</div>

                <div class="card-body">
                    <div>
                        @foreach ($users as $user)
                            <div class="row actor my-3 badge-primary">
                                <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <h4>{{$user->name}}</h4>
                                            </div>
                                            <div class="col-sm-2">
                                                @can('permission', 'editUser')
                                                    <a href="{{route('users.show', ['id' => $user->id])}}">
                                                        <i class="fa fa-address-card" aria-hidden="true"></i>
                                                    </a>
                                                @endcan
                                            </div>
                                        </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div>{{$users->links()}}</div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
