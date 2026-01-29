@extends('main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                <div class="card-header border-0 py-4 text-center text-white" style="background-color: #8B6B3E;">
                    <h3 class="mb-0 fw-bold">{{ __('Créer un Compte') }}</h3>
                    <small class="opacity-75">Rejoignez la communauté Gluten-Free Morocco</small>
                </div>

                <div class="card-body p-5 bg-white">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold" style="color: #8B6B3E;">{{ __('Nom complet') }}</label>
                            <input id="name" type="text" class="form-control form-control-lg rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Votre nom">
                            @error('name')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold" style="color: #8B6B3E;">{{ __('Adresse Email') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="exemple@email.com">
                            @error('email')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold" style="color: #8B6B3E;">{{ __('Mot de passe') }}</label>
                            <input id="password" type="password" class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                                <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password-confirm" class="form-label fw-bold" style="color: #8B6B3E;">{{ __('Confirmer le mot de passe') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg rounded-pill" name="password_confirmation" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-lg text-white fw-bold rounded-pill shadow-sm" style="background-color: #D4AF37; transition: 0.3s;">
                                {{ __('S\'inscrire maintenant') }}
                            </button>
                        </div>

                        <div class="text-center mt-3">
                            <small class="text-muted">Déjà inscrit ? <a href="/login" style="color: #D4AF37;">Connectez-vous</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection