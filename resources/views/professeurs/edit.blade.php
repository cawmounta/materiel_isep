@extends('materiels.layout')

@section('title', "Modification  du demande")

@section("content")
    <div class="row">
        <h3>Formulaire de demande d'un materiel</h3>
    <form action="{{ route("professeurs.update", $professseur->id) }}"
        method="post">
        @csrf
        @method("PUT")

        @include("professeurs.form")

        <div class="d-grip gap-2">
            <button type="submit" class="btn btn-wraning btn-sm">
                Enregistre les modifications
            </button>


        </div>

    </form>
</div>

    @endsection
