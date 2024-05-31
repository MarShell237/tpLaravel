@extends('layouts.app')
@section('content')
    <div class="container" id="main">
        <div class="card">
            <div class="card-header">
                <h4 style="color: black">Ajout des etudiants</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('student.update',$student) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" ariadescribedby="emailHelp" value="{{$student->name}}" placeholder="Entrez un nom" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" ariadescribedby="emailHelp" value="{{$student->email}}" placeholder="Entrez un email"name="email" required>
                            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avecquelqu'un d'autre.</small>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telephone</label>
                            <input type="text" class="form-control" id="phone" ariadescribedby="emailHelp" value="{{$student->phone}}" placeholder="Entrez un numero de telephone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Date Naissance</label>
                            <input type="date" class="form-control" id="birthdate" ariadescribedby="emailHelp" value="{{$student->birthdate}}" placeholder="Date naissance" name="birthdate" required>
                        </div>
                        <div class="form-group">
                            <label for="filiere_id">Filiere</label>
                            <select name="filiere_id" id="filiere_id" class="form-control" required>
                                @foreach ($filieres as $key => $filiere_name)
                                    <option value="{{$key}}">{{ $filiere_name }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-success">mettre a jour</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
@endsection