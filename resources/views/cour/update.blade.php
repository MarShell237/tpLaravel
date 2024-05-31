@extends('layouts.app')
@section('content')
    <div class="container" id="main">
        <div class="card">
            <div class="card-header">
                <h4 style="color: black">Ajout un nouveau cour</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('cour.update',$cour) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" ariadescribedby="emailHelp" placeholder="Entrez un nom" value="{{ $cour->name }}" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="birthdate">description</label>
                        <input type="text" class="form-control" id="description" ariadescribedby="emailHelp" placeholder="Entrez une description" value="{{ $cour->description }}" name="description" required>
                    </div>
                    <div class="form-group">
                        <label for="filiere_id">Filiere</label>
                        <select name="filiere_id" id="filiere_id" class="form-control" required>
                            @foreach ($filieres as $id =>$filiere_name)
                                <option value="{{ $id }}">{{ $filiere_name }}</option>
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