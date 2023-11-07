@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">{{ __('Administration') }}</div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <button class="btn btn-primary">Gestion des transferts</button>
            </div>
            <div class="col">
                <button class="btn btn-primary">Gestion des partenaires</button>
            </div>
            <div class="col">
                <button class="btn btn-primary">Gestion des utilisateurs</button>
            </div>
            <div class="col">
                <a href="{{ route('sliders.index') }}" class="btn btn-primary">Gestion des slides</a>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
