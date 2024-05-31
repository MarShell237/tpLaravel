@extends('layouts.app')
@section('content')
    <div class="container" id="main">
        <div class="card">
        <div class="card-header">
            <h4 style="color: black">Ajout des etudiants</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('student.store') }}">
            @csrf
            @include('student.form')
            <div class="mt-2">
                <button type="submit" class="btn btnsuccess">Ajouter</button>
            </div>
            </form>
        </div>
        </div>
    </div>
@endsection