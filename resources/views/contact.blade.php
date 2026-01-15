@extends('main')

@section('content')
<div class="container py-5" style="background-color: #F7F2E8;">
    <h1 style="color: #D4AF37;">Contactez-nous</h1>

    {{-- @if(session('success'))
        <div style="color: green; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif --}}
    <p style="color: #8B6B3E;">
        N'hésitez pas à nous contacter pour toute question ou suggestion. Nous sommes là pour vous aider.
    </p>

    <form action="/contact" method="POST">
        @csrf
        <div class="mb-3">
            <label style="color: #8B6B3E;" for="name">Nom :</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="mb-3">
            <label style="color: #8B6B3E;" for="email">Email :</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="mb-3">
            <label style="color: #8B6B3E;" for="message">Message :</label>
            <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn" style="background-color: #D4AF37; color: #FFFFFF;">Envoyer</button>
    </form>

    <div class="mt-4" style="color: #8B6B3E;">
        <p>Email: contact@glutenfreemorocco.com</p>
        <p>Téléphone: +212 600 000 000</p>
    </div>
</div>
@endsection
