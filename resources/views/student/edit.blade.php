<form method="POST" action="{{ route('student.update') }}">
<div class="form-group">
<label for="nom">Nom</label>
<input type="text" class="form-control" id="nom" ariadescribedby="emailHelp" placeholder="{{$Student->name}}"
name="name" required>
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" id="email" ariadescribedby="emailHelp" placeholder="{{$Student->email}}"
name="email" required>
<small id="emailHelp" class="form-text text-muted">Nous ne partagerons
jamais votre e-mail avecquelqu'un d'autre.</small>
</div>
<div class="form-group">
<label for="phone">Telephone</label>
<input type="text" class="form-control" id="phone" ariadescribedby="emailHelp"
placeholder="{{$Student->phone}}" name="phone" required>
</div>
<div class="form-group">
<label for="birthdate">Date Naissance</label>
<input type="date" class="form-control" id="birthdate" ariadescribedby="emailHelp" placeholder="{{$Student->date}}"
name="birthdate" required>
</div>