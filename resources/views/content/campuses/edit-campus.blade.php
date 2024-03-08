@extends('layouts/contentNavbarLayout')

@section('title', 'Modifier le Campus')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Modifier le Campus</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('campuses.update', $campus->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $campus->name) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $campus->address) }}">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Ville</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $campus->city) }}">
                        </div>
                        <div class="mb-3">
                            <label for="postal_code" class="form-label">Code Postal</label>
                            <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ old('postal_code', $campus->postal_code) }}">
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Pays</label>
                            <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $campus->country) }}">
                        </div>
                        <div class="mb-3">
                            <label for="fillingRate" class="form-label">Taux de remplissage (%)</label>
                            <input type="number" step="0.01" class="form-control" id="fillingRate" name="fillingRate" value="{{ old('fillingRate', $campus->fillingRate) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                        <a href="{{ route('campuses.index') }}" class="btn btn-secondary">Annuler</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
