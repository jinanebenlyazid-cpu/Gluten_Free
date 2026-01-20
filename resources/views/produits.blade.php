@extends('main') 

@section('content')
<div class="container my-5">

    <h2 class="mb-5 text-center text-uppercase" style="color: #8B6B3E;">
        Tous les produits
    </h2>

    <div class="row">
        @foreach ($products as $produit)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    {{-- @php
                        $url = asset('images/' . ltrim($produit->image, '/'));
                        $url = preg_replace('#(?<!:)//+#', '/', $url);
                    @endphp --}}
                    <img src="{{$produit->image}}" 
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

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>

</div>
@endsection
