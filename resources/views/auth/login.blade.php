@extends('main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="col-md-5">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header border-0 py-4 text-center text-white rounded-top-4" style="background-color: #8B6B3E;">
                    <h3 class="mb-0 fw-bold">{{ __('Connexion') }}</h3>
                    <p class="small mb-0 opacity-75">Heureux de vous revoir parmi nous !</p>
                </div>

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold text-muted small">{{ __('Adresse Email') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0 rounded-start-pill px-3">📧</span>
                                <input id="email" type="email" class="form-control bg-light border-0 rounded-end-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="votre@email.com">
                            </div>
                            @error('email')
                                <span class="invalid-feedback d-block mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold text-muted small">{{ __('Mot de passe') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0 rounded-start-pill px-3">🔒</span>
                                <input id="password" type="password" class="form-control bg-light border-0 rounded-end-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="••••••••">
                            </div>
                            @error('password')
                                <span class="invalid-feedback d-block mt-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label small text-muted" for="remember">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link p-0 border-0 text-decoration-none small" style="color: #D4AF37;" href="{{ route('password.request') }}">
                                    {{ __('Oublié ?') }}
                                </a>
                            @endif
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-lg text-white fw-bold rounded-pill shadow-sm" style="background-color: #D4AF37; transition: 0.3s;">
                                {{ __('Se connecter') }}
                            </button>
                        </div>

                        <div class="text-center mt-4">
                            <p class="small text-muted mb-0">Pas encore de compte ?</p>
                            <a href="{{ route('register') }}" class="fw-bold text-decoration-none" style="color: #8B6B3E;">
                                Créer un compte gratuitement
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styles spécifiques pour polir l'interface */
    .form-control:focus {
        background-color: #fff !important;
        border: 1px solid #D4AF37 !important;
        box-shadow: none;
    }
    
    .btn-lg:hover {
        background-color: #8B6B3E !important;
        transform: translateY(-2px);
    }

    .input-group-text {
        color: #8B6B3E;
    }
</style>
@endsection