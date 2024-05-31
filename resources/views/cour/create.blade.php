@extends('layouts.app')
@section('content')
    <div class="container" id="main">
        <div class="card">
            <div class="card-header">
                <h4 style="color: black">Ajout un nouveau cour</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('cour.store') }}">
                    @csrf
                    @include('cour.form')
                    <div class="mt-2">
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection