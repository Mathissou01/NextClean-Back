@extends('layouts/contentNavbarLayout')

@section('title', 'Créer une nouvelle tâche')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Créer une nouvelle tâche</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nom de la tâche</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom de la tâche" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez la description de la tâche" required></textarea>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="isDone" name="isDone">
                            <label class="form-check-label" for="isDone">Tâche accomplie ?</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Créer</button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
