@extends('layouts.app')
@section('content')
    <div class="container" id="main">
        <div class="card">
            <div class="card-header">
                <div class="row col-md-12">
                    <div class="col-md-6">
                        <h4>Liste des etudiants</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('student.create') }}" class="btn btn-success" style="float: right">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                <thead>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Date De Naissance</th>
                    <th>Filiere</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @forelse ($students as $item)
                        <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->birthdate }}</td>
                        <td>{{ $item->filiere->name }}</td>
                        <td>
                            <a href="{{ route('student.destroy') }}"><button class="btn btn-danger" >supprimer</button></a>
                            <a href="{{ route('student.edit',$item->id) }}"><button class="btn btn-danger" >mis a jour</button></a>
                        </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">
                                <div class="text-center">Aucun Etudiant Pour le moment</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $students->links() !!}
            </div>
            </div>
            </div>
        </div>
    </div>
    
@endsection