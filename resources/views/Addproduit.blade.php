@extends('main') 
@section('content')
<div class="container mt-5">
    @include('alert')

    
   
    <div class="card shadow-lg border-0"
         style="background-color:#F7F2E8;">
        
        <div class="card-header text-center"
             style="background-color:#8B6B3E; color:white;">
            <h4>Ajouter un produit</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('Produits.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Catégorie -->
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color:#8B6B3E;"> Catégorie</label>
                    <input type="text" name="categorie" class="form-control" placeholder="Pains & Viennoiseries" >
                </div>
                @error('categorie')
                        <div class="text-danger mt-1 small">
                            {{ $message }}
                        </div>
                @enderror

                <!-- Nom du produit -->
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color:#8B6B3E;">  Nom du produit</label>
                    <input type="text" name="produitnom" class="form-control"  placeholder="Pain complet sans gluten" >
                </div>
                @error('produitnom')
                        <div class="text-danger mt-1 small">
                            {{ $message }}
                        </div>
                @enderror
                <!-- Description -->
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color:#8B6B3E;">Description </label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Pain riche en fibres, bio" ></textarea>
                </div>
                @error('description')
                        <div class="text-danger mt-1 small">
                            {{ $message }}
                        </div>
                @enderror

                <!-- Prix -->
                <div class="mb-3">
                    <label class="form-label fw-bold" style="color:#8B6B3E;"> Prix (DH) </label>
                    <input type="number" step="0.01" name="prix" class="form-control" placeholder="45.00" >
                </div>
                @error('prix')
                        <div class="text-danger mt-1 small">
                            {{ $message }}
                        </div>
                @enderror

                <!-- Image -->
                <div class="mb-4">
                    <label class="form-label fw-bold" style="color:#8B6B3E;">Image du produit</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                @error('image')
                        <div class="text-danger mt-1 small">
                            {{ $message }}
                        </div>
                @enderror

                <!-- Boutons -->
                <div class="text-center">
                    <button type="submit" class="btn px-4" style="background-color:#D4AF37; color:white;">Ajouter</button>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary ms-2">Annuler</a>
                </div>

            </form>

        </div>
    </div>

</div>
@endsection

<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Inclure les fichiers JavaScript de Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>