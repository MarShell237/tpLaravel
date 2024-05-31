<div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" ariadescribedby="emailHelp" placeholder="Entrez un nom"name="name" required>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" ariadescribedby="emailHelp" placeholder="Entrez un email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</small>
</div>
<div class="form-group">
    <label for="phone">Telephone</label>
    <input type="text" class="form-control" id="phone" ariadescribedby="emailHelp" placeholder="Entrez un numero de telephone" name="phone" required>
</div>
<div class="form-group">
    <label for="birthdate">Date Naissance</label>
    <input type="date" class="form-control" id="birthdate" ariadescribedby="emailHelp" placeholder="Date naissance" name="birthdate" required>
</div>
<div class="form-group">
    <label for="filiere_id">Filiere</label>
    <select name="filiere_id" id="filiere_id" class="form-control" required>
        @foreach ($filieres as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>