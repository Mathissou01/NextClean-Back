@extends('layouts/contentNavbarLayout')

@section('title', 'Gestion des Tâches')

@section('content')
<h1 class="h3 mb-3">Tâches</h1>
<!-- Basic Bootstrap Table -->
<div class="card">
  <!-- Card header with "Create Task" button -->
  <div class="card-header d-flex justify-content-between align-items-center">
    <h5>Liste des Tâches</h5>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">
      <i class="bx bx-plus me-1"></i> Ajouter une tâche
    </a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Description</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @forelse ($tasks as $task)
        <tr>
          <td>{{ $task->name }}</td>
          <td>{{ $task->description }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('tasks.edit', $task->id) }}"><i class="bx bx-edit-alt me-1"></i> Modifier</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item"><i class="bx bx-trash me-1"></i> Supprimer</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="4" class="text-center">Aucune tâche à afficher.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
