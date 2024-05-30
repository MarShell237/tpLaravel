@extends('layouts.app')
@section('content')
<div class="container" id="main">
<div class="card">
<div class="card-header">
<h4 style="color: black">Ajout des etudiants</h4>
</div>
<div class="card-body">

@csrf
@include('student.edit')
<div class="mt-2">
<button type="submit" class="btn btnsuccess">mettre a jour</button>
</div>
</form>
</div>
</div>
</div>
@endsection