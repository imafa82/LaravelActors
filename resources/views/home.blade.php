@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                       @component('components.design.icon', [
                           'ico' => 'id-card-o',
                           'url' => url('/actors'),
                           'label' => 'Attori'
                       ])
                       @endcomponent
                       @component('components.design.icon', [
                           'ico' => 'user',
                           'url' => url('/users'),
                           'label' => 'Utenti'
                       ])
                       @endcomponent
                       @component('components.design.icon', [
                           'ico' => 'key',
                           'url' => url('/permissions'),
                           'label' => 'Permessi'
                       ])
                       @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
