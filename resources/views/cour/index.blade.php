@extends('layouts.app')
@section('content')
<div class="container" id="main">
<div class="card">
<div class="card-header">
    <div class="row col-md-12">
        <div class="col-md-6">
            <h4>Liste des cours</h4>
        </div>
        <div class="col-md-6">
            <a href="{{ route('cour.create') }}" class="btn btn-success" style="float: right">Ajouter</a>
        </div>
    </div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
        <th>Nom</th>
        <th>description</th>
        <th>Filiere</th>
        <th>Action</th>
    </thead>
    <tbody>
        @forelse ($cours as $cour)
            <tr>
                <td>{{ $cour->name }}</td>
                <td>{{ $cour->description }}</td>
                <td>{{ $cour->filiere->name}}</td>
                <td>
                    <a href="{{ route('cour.edit',$cour) }}"><button class="btn btn-primary">editer</button></a>
                    <form action="{{ route('cour.destroy',$cour) }}" method="POST" style="display: inline">
                        {{-- @php
                            dd(route('cour.destroy',$cour));
                        @endphp --}}
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">supprimer</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">
                    <div class="text-center">Aucun cour Pour le moment</div>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
<div class="d-flex justify-content-center">
{!! $cours->links() !!}
</div>
@endsection