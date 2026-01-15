@extends('main') 

@section('content')
<div class="container my-5">

    <h2 class="mb-5 text-center text-uppercase" style="color: #8B6B3E;">
        Tous les produits
    </h2>

    @foreach ($allProducts as $categorie => $products)
        {{-- Titre catégorie --}}
        <h3 class="mt-4 mb-3" style="color: #8B6B3E;">{{ $categorie }}</h3>

        <div class="row">
            @foreach ($products as $produit)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        @php
                            // On enlève le slash au début si présent
                            $url = asset('images/' . ltrim($produit['image'], '/'));
                            
                            // On remplace les doubles slashs éventuels par un seul
                            $url = preg_replace('#(?<!:)//+#', '/', $url);
                        @endphp
                        <img src="{{ $url }}" 
                             class="card-img-top" 
                             alt="{{ $produit['nom'] }}" 
                             style="height: 250px; object-fit: cover;">

                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $produit['nom'] }}</h5>
                            <p class="card-text">{{ $produit['description'] }}</p>
                            <p class="card-text fw-bold">{{ $produit['prix'] }} DH</p>
                            <a href="#" class="btn btn-warning text-white">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    <div class="text-center mt-4">
        <a href="/" class="btn btn-outline-secondary">Retour à l'accueil</a>
    </div>

</div>
@endsection
