@extends('layouts/contentNavbarLayout')

@section('title', 'Liste des Sessions')

@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Sessions</h1>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Liste des Sessions Prévues</h5>
        </div>
        <div class="card-body">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Informations</h5>
                <a href="{{ route('session.create') }}" class="btn btn-primary">
                    <i class="bx bx-plus me-1"></i> Créer une session
                </a>
            </div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Campus</th>
                        <th>Date de Prévision</th>
                        <th>Heure de Début</th>
                        <th>Heure de Fin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>  
                    @foreach($sessions as $session)
                        <tr>
                            <td>{{ $session->campus->name }}</td>
                            <td>{{ $session->start_time->format('d/m/Y') }}</td>
                            <td>{{ $session->start_time->format('H:i') }}</td>
                            <td>{{ $session->end_time->format('H:i') }}</td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                                    class="bx bx-dots-vertical-rounded"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('session.edit', $session->id) }}"><i class="bx bx-edit-alt me-1"></i> Modifier</a>
                                    <a class="dropdown-item" href="{{ route('session.destroy', $session->id) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette session ?');"><i class="bx bx-trash me-1"></i> Supprimer</a>
                                </div>
                                </div>    
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
