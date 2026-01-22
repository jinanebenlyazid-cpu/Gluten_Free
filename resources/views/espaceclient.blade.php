@extends('main')

@section('content')
<div class="container my-5">

    <h2 class="mb-5 text-center text-uppercase" style="color: #8B6B3E;">
        Produits en solde
    </h2>

    <div class="row">
        @forelse ($produitsSolde as $p)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0 position-relative">

                    {{-- Badge de solde --}}
                    <span class="badge bg-danger position-absolute top-0 end-0 m-2">
                        -{{ $p->solde }}%
                    </span>

                    {{-- Image du produit --}}
                    <img src="{{ $p->image }}" class="card-img-top" alt="{{ $p->produitnom }}" style="height: 250px; object-fit: cover;">

                    {{-- Contenu --}}
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $p->produitnom }}</h5>

                        <p class="text-muted text-decoration-line-through mb-1">
                            {{ $p->prix }} DH
                        </p>

                        <p class="fw-bold text-success mb-2">
                            {{ $p->prix - ($p->prix * $p->solde / 100) }} DH
                        </p>

                        <a href="#" class="btn btn-warning text-white">
                            Ajouter au panier
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center w-100">Aucun produit en solde pour le moment.</p>
        @endforelse
    </div>

    {{-- Pagination si nécessaire --}}
    <div class="d-flex justify-content-center mt-4">
        {{-- {{ $produitsSolde->links() }} --}}
        {{-- Décommente si $produitsSolde est paginé --}}
    </div>

</div>
@endsection
