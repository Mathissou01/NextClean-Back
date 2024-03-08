@extends('layouts/contentNavbarLayout')

@section('title', 'Gestion des Campus')

@section('content')
<div class="container mt-4">
<h1 class="h3 mb-3">Campus</h1>
    <div class="card">
        <div class="card-body">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Informations</h5>
                <a href="{{ route('campuses.create') }}" class="btn btn-primary">
                <i class="bx bx-plus me-1"></i> Créer un campus
                </a>
            </div>
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Nom</th>
                        <th>Emplacement</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($campuses as $campus)
                    <tr>
                        <td>{{ $campus->name }}</td>
                        <td>{{ $campus->city }}</td>
                        <td>
                            <a href="{{ route('campuses.edit', $campus->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                            <form action="{{ route('campuses.destroy', $campus->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce campus ?');">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">Aucun campus enregistré.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
