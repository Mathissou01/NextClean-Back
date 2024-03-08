@extends('layouts/contentNavbarLayout')

@section('title', 'Modifier la Session')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Modifier la Session</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('session.update', $session->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        <div class="mb-3">
                            <label for="campus_id" class="form-label">Campus</label>
                            <select class="form-select" id="campus_id" name="campus_id" required>
                                @foreach($campuses as $campus)
                                    <option value="{{ $campus->id }}" {{ $session->campus_id == $campus->id ? 'selected' : '' }}>
                                        {{ $campus->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="start_time" class="form-label">Date et Heure de Début</label>
                            <input type="datetime-local" class="form-control" id="start_time" name="start_time" value="{{ $session->start_time->format('Y-m-d\TH:i') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="end_time" class="form-label">Date et Heure de Fin</label>
                            <input type="datetime-local" class="form-control" id="end_time" name="end_time" value="{{ $session->end_time->format('Y-m-d\TH:i') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        <a href="{{ route('sessions') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
