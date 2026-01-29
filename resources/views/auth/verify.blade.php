@extends('main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4 text-center">
                <div class="card-body p-5">
                    <div class="mb-4">
                        <span style="font-size: 4rem;">📩</span>
                    </div>

                    <h2 class="fw-bold mb-3" style="color: #8B6B3E;">{{ __('Vérifiez votre Email') }}</h2>

                    @if (session('resent'))
                        <div class="alert alert-success rounded-pill shadow-sm" role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyé !') }}
                        </div>
                    @endif

                    <p class="text-muted mb-4">
                        {{ __('Avant de continuer, veuillez vérifier votre boîte de réception pour le lien de confirmation.') }}
                        <br>
                        {{ __('Si vous n\'avez rien reçu, vérifiez vos courriers indésirables (spams).') }}
                    </p>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link fw-bold text-decoration-none" style="color: #D4AF37;">
                            {{ __('Cliquez ici pour renvoyer un lien') }}
                        </button>
                    </form>
                </div>
                
                <div class="card-footer bg-light border-0 py-3">
                    <small class="text-muted">Besoin d'aide ? <a href="/contact" class="text-dark">Contactez le support</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection