@extends('layouts/contentNavbarLayout')

@section('title', 'Modifier la Tâche')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Modifier la Tâche</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tasks.update', $task) }}">
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $task->name) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $task->description) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="isDone" class="form-check-label">
                                <input type="checkbox" class="form-check-input" id="isDone" name="isDone" {{ $task->isDone ? 'checked' : '' }}> Accomplie
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
