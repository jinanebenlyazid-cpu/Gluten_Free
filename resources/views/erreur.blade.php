@extends('main')

@section('content')
<div class="container d-flex justify-content-center align-items-center" 
     style="height: 70vh; text-align: center; flex-direction: column;">
    <h1 style="font-size: 100px; color: #D4AF37;">404</h1>
    <h2 style="color: #8B6B3E;">Oups ! Page non trouvée</h2>
    <p style="color: #8B6B3E;">
        La page que vous recherchez n'existe pas ou a été déplacée.
    </p>
    <a href="/" class="btn" style="background-color: #D4AF37; color: #FFFFFF; margin-top: 20px;">
        Retour à l'accueil
    </a>
</div>
@endsection
