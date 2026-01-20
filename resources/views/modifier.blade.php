@extends('main') 
@section('content')
<div class="container mt-5">
    @include('alert')

    <div class="card shadow-lg border-0"
         style="background-color:#F7F2E8;">
        
        <div class="card-header text-center"
             style="background-color:#8B6B3E; color:white;">
            <h4>Modifier le produit</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('Produits.update', $produit->id) }}"  method="POST"  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Catégorie -->
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color:#8B6B3E;">Catégorie</label>
                    <input type="text"  name="categorie" class="form-control"  value="{{ $produit->categorie}}">
                </div>
                @error('categorie')
                    <div class="text-danger mt-1 small">{{ $message }}</div>
                @enderror

                <!-- Nom du produit -->
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color:#8B6B3E;">Nom du produit</label>
                    <input type="text"  name="produitnom"  class="form-control"   value="{{  $produit->produitnom }}">
                </div>
                @error('produitnom')
                    <div class="text-danger mt-1 small">{{ $message }}</div>
                @enderror

                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color:#8B6B3E;">Description</label>
                    <textarea name="description"  class="form-control"  rows="3">{{ $produit->description}}</textarea>
                </div>
                @error('description')
                    <div class="text-danger mt-1 small">{{ $message }}</div>
                @enderror

                <!-- Prix -->
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color:#8B6B3E;">Prix (DH)</label>
                    <input type="number"  step="0.01"  name="prix"  class="form-control "  value="{{$produit->prix}}">
                </div>
                @error('prix')
                    <div class="text-danger mt-1 small">{{ $message }}</div>
                @enderror

                <!-- Image -->
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color:#8B6B3E;">Image du produit</label>
                    <input type="file"  name="image" class="form-control ">
                </div>
                @error('image')
                    <div class="text-danger mt-1 small">{{ $message }}</div>
                @enderror

                <!-- Image actuelle -->
                @if($produit->image)
                    <div class="mb-4 text-center">
                        <p class="fw-bold" style="color:#8B6B3E;">Image actuelle</p>
                        <img src="{{ $produit->image }}"  class="img-thumbnail"  style="max-width:200px;">
                    </div>
                @endif

                <!-- Boutons -->
                <div class="text-center">
                    <button type="submit"  class="btn px-4" style="background-color:#D4AF37; color:white;">
                        Modifier
                    </button>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary ms-2">
                        Annuler
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
