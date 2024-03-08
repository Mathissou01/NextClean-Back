@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<div class="col-xl">
  <div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Entrez les informations de l'agent(e) :</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('agents.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label" for="first_name">Prénom</label>
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-user"></i></span>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Prénom" required />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="last_name">Nom</label>
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-user"></i></span>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nom" required />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="email">Email</label>
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
            <input type="email" class="form-control" id="email" name="email" placeholder="exemple@example.com" required />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="phone_number">N° de téléphone</label>
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-phone"></i></span>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+33 6.." />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="address">Adresse</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Adresse" />
        </div>
        <div class="mb-3">
          <label class="form-label" for="city">Ville</label>
          <input type="text" class="form-control" id="city" name="city" placeholder="Ville" />
        </div>
        <div class="mb-3">
          <label class="form-label" for="postal_code">Code Postal</label>
          <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Code Postal" />
        </div>
        <div class="mb-3">
          <label class="form-label" for="country">Pays</label>
          <input type="text" class="form-control" id="country" name="country" placeholder="Pays" />
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
  </div>
</div>
@endsection
