@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista Attori</div>

                <div class="card-body">
                    <div>
                        @foreach ($actors as $actor)
                            <div class="row actor my-3 badge-primary">
                                <div class="col-sm-3">
                                    <img src="{{$actor->path}}" class="img-thumbnail m-1" />
                                </div>
                                <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h4>{{$loop->iteration}}) {{$actor->name}} {{$actor->surname}} (nato nel {{$actor->year}})</h4>
                                            </div>
                                            <div class="col-sm-2">
                                                <a href="{{route('actors.show', ['id' => $actor->id])}}">
                                                    <i class="fa fa-address-card" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-2">
                                                <form action="/actors/{{$actor->id}}" method="POST">
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>{{$actors->links()}}</div>
</div>
@endsection
