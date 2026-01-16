@extends('main') 

@section('content')
<div class="container my-5">

    <h2 class="mb-5 text-center text-uppercase" style="color: #8B6B3E;">
        Catégorie : {{ $categorie }}
    </h2>

    <div class="row">
        @foreach ($produits as $produit)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/' . $produit->image) }}" 
                         class="card-img-top" 
                         alt="{{ $produit->produitnom }}" 
                         style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $produit->produitnom }}</h5>
                        <p class="card-text">{{ $produit->description }}</p>
                        <p class="card-text fw-bold">{{ $produit->prix }} DH</p>
                        <a href="#" class="btn btn-warning text-white">Ajouter au panier</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="/" class="btn btn-outline-secondary">Retour à l'accueil</a>
    </div>

</div>
@endsection
