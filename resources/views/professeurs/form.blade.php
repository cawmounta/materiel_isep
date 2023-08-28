<div class="form-group mb-3">
    <label for="nom">
        Nom complet  :
    </label>
    <input
    value="@isset($professeur->nom ) {{ $professeur->nom }}@endisset"
    required type="text" name="nom" class="form-control">
</div>
<div class="form-group mb-3">
    <label for="filiere">
        Nom du filiere :
    </label>
    <input
    value="@isset($professeur->filiere) {{ $professeur->filiere }}@endisset"
    required type="text" name="filiere" class="form-control">
</div>
<div class="form-group mb-3">
    <label for="materiel">
        Nom du materiel :
    </label>
    <input
    value="@isset($professeur->materiel) {{ $professeur->materiel }}@endisset"
    required type="text" name="materiel" class="form-control">
</div>





