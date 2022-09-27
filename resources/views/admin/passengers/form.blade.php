<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome Passeggero</label>
    <input type="text" name="Name" value="{{ old('Name', isset($passenger) ? $passenger->Name : '') }}" class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cognome Passeggero</label>
    <input type="text" name="Surname" value="{{ old('Surname', isset($passenger) ? $passenger->Surname : '') }}" class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Data di nascita</label>
    <input type="date" name="Birthday" value="{{ old('Birthday', isset($passenger) ? $passenger->Birthday : '') }}" class="form-control" id="exampleInputEmail1"
        aria-describedby="emailHelp">
</div>
