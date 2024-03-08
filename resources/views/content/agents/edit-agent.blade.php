@extends('layouts/contentNavbarLayout')

@section('title', 'Modifier un agent')

@section('content')
<div class="col-xl">
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Modifier les informations de l'agent :</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('agents.update', $agent->id) }}" method="POST">
        @csrf
        @method('POST')
        
        <div class="mb-3">
          <label class="form-label" for="first_name">Prénom</label>
          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Prénom" value="{{ $agent->first_name }}" required>
        </div>
        
        <div class="mb-3">
          <label class="form-label" for="last_name">Nom</label>
          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nom" value="{{ $agent->last_name }}" required>
        </div>
        
        <div class="mb-3">
          <label class="form-label" for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="exemple@example.com" value="{{ $agent->email }}" required>
        </div>
        
        <div class="mb-3">
          <label class="form-label" for="phone_number">N° de téléphone</label>
          <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+33 6.." value="{{ $agent->phone_number }}">
        </div>
        
        <div class="mb-3">
          <label class="form-label" for="address">Adresse</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Adresse" value="{{ $agent->address }}">
        </div>
        
        <div class="mb-3">
          <label class="form-label" for="city">Ville</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Ville" value="{{ $agent->city }}">
        </div>
        
        <div class="mb-3">
          <label class="form-label" for="postal_code">Code Postal</label>
          <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Code Postal" value="{{ $agent->postal_code }}">
        </div>
        
        <div class="mb-3">
          <label class="form-label" for="country">Pays</label>
          <input type="text" class="form-control" id="country" name="country" placeholder="Pays" value="{{ $agent->country }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </form>
    </div>
  </div>
</div>
@endsection