@extends('layouts/contentNavbarLayout')

@section('title', 'Créer une nouvelle session')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Créer une nouvelle session</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('session.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="agent_id" class="form-label">Agent</label>
                            <select class="form-select" id="agent_id" name="agent_id" required>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->first_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="campus_id" class="form-label">Campus</label>
                            <select class="form-select" id="campus_id" name="campus_id" required>
                                @foreach ($campuses as $campus)
                                    <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="start_time" class="form-label">Heure de début</label>
                            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
                        </div>

                        <div class="mb-3">
                            <label for="end_time" class="form-label">Heure de fin</label>
                            <input type="datetime-local" class="form-control" id="end_time" name="end_time" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Créer</button>
                        <a href="{{ route('sessions') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
