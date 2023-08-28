@extends('materiels.layout')

@section('title', "la liste des demandes")

@section("content")
    <div class="row">
        <h3>Liste des demandes</h3>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('professeurs.create') }}" class="btn btn-primary">
                Nouvelle demande
            </a>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom du chef de filiere</th>
                    <th>Filiere</th>
                    <th>Materiel</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($professeurs as $professeur)
                    <tr>
                        <td>{{ $professeur->nom }}</td>
                        <td>{{ $professeur->filiere }}</td>
                        <td>{{ $professeur->materiel }}</td>
                        <td style="display: flex">
                            <a class="btn btn-warning btn-sm" style="margin-right: 5px"
                               href="{{ route('professeurs.edit', $professeur->id) }}">
                                Modifier
                            </a>
                            <form action="{{ route('professeurs.destroy', $professeur->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input onclick="return confirm('Êtes-vous sûr ?')" class="btn btn-danger btn-sm"
                                       type="submit" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
