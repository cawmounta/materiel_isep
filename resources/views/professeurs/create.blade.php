@extends('materiels.layout')

@section('title', "Demande de materiel")

@section("content")
    <div class="row">
        <h3>Formulaire de demande de materiel</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('professeurs.store') }}" method="post">
            @csrf
            @include('professeurs.form')
            <div class="d-grip gap-2">
                <button type="submit" class="btn btn-primary">
                    Ajout du demande
                </button>
            </div>
        </form>
    </div>
@endsection
