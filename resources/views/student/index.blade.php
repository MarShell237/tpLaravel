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
                    @forelse ($students as $student)
                        <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->birthdate }}</td>
                        <td>{{ $student->filiere->name }}</td>
                        <td>
                            <div>
                                <a href="{{ route('student.edit',$student) }}"><button class="btn btn-primary">editer</button></a>
                                <form action="{{ route('student.destroy',$student) }}" method="POST" style="display: inline">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger">supprimer</button>
                                </form>
                            </div>
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