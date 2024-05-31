<div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" ariadescribedby="emailHelp" placeholder="Entrez un nom" name="name" required>
</div>
<div class="form-group">
    <label for="birthdate">description</label>
    <input type="text" class="form-control" id="description" ariadescribedby="emailHelp" placeholder="entrez une decription" name="description" required>
</div>
<div class="form-group">
    <label for="filiere_id">Filiere</label>
    <select name="filiere_id" id="filiere_id" class="form-control" required>
        @foreach ($filieres as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>