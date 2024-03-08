@extends('layouts/contentNavbarLayout')

@section('title', 'Tables - Basic Tables')

@section('content')
<h1 class="h3 mb-3">Agents</h1>
<!-- Basic Bootstrap Table -->
<div class="card">
  <!-- Card header with "Create Agent" button -->
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5>Informations</h5>
    <a href="{{ route('agents.create') }}" class="btn btn-primary">
      <i class="bx bx-plus me-1"></i> Créer un agent
    </a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Prénom</th>
          <th>Nom</th>
          <th>Email</th>
          <th>Téléphone</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($agents as $agent)
        <tr>
          <td>{{ $agent->first_name }}</td>
          <td>{{ $agent->last_name }}</td>
          <td>{{ $agent->email }}</td>
          <td>{{ $agent->phone_number }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i
                  class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('agents.edit', $agent->id) }}"><i class="bx bx-edit-alt me-1"></i> Modifier</a>
                <a class="dropdown-item" href="{{ route('agents.destroy', $agent->id) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet agent ?');"><i class="bx bx-trash me-1"></i> Supprimer</a>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection