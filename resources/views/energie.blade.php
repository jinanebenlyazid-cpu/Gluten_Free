@extends('main')

@section('content')
<div class="py-5" style="background: #F7F2E8; border-bottom: 5px solid #D4AF37;">
    <div class="container text-center">
        <span class="badge rounded-pill bg-success mb-3 px-3 py-2">Force & Positivité</span>
        <h1 class="display-4 fw-bold" style="color: #8B6B3E;">La Maladie Cœliaque n'est pas une Limite</h1>
        <p class="lead mx-auto" style="max-width: 700px; color: #5d4a2d;">
            C'est le début d'une nouvelle relation avec votre corps. Une opportunité de manger mieux, de vous sentir plus fort et de reprendre le contrôle.
        </p>
    </div>
</div>

<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-6">
            <h2 class="h3 fw-bold mb-4" style="color: #D4AF37;">Votre corps vous parle 🌿</h2>
            <p>
                Être cœliaque, ce n'est pas être "malade" au sens traditionnel, c'est avoir un système digestif <strong>ultra-sensible et intelligent</strong>. En choisissant le sans gluten, vous ne faites pas que supprimer un ingrédient, vous offrez à votre organisme :
            </p>
            <div class="d-flex align-items-start mb-3">
                <div class="bg-white shadow-sm p-3 rounded-circle me-3" style="color: #D4AF37;">✨</div>
                <div>
                    <h5 class="fw-bold mb-1">Une clarté mentale retrouvée</h5>
                    <p class="small text-muted">Fini le "brouillard cérébral". Une alimentation adaptée booste votre concentration.</p>
                </div>
            </div>
            <div class="d-flex align-items-start mb-3">
                <div class="bg-white shadow-sm p-3 rounded-circle me-3" style="color: #D4AF37;">💪</div>
                <div>
                    <h5 class="fw-bold mb-1">Une énergie stable</h5>
                    <p class="small text-muted">Sans inflammation, votre corps utilise enfin 100% de l'énergie de vos aliments.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?q=80&w=800" class="img-fluid rounded-5 shadow" alt="Yoga et bien être">
                <div class="position-absolute bottom-0 start-0 m-4 p-3 bg-white rounded-4 shadow-lg d-none d-md-block" style="max-width: 250px;">
                    <p class="mb-0 fw-bold" style="color: #8B6B3E;">"Le sans-gluten m'a redonné la vie que je méritais."</p>
                    <small class="text-muted">- Témoignage client</small>
                </div>
            </div>
        </div>
    </div>

    <div class="my-5 p-4 rounded-4 shadow-sm text-white" style="background-color: #8B6B3E;">
        <div class="row align-items-center">
            <div class="col-md-2 text-center fs-1">💡</div>
            <div class="col-md-10">
                <h4 class="fw-bold">Le saviez-vous ?</h4>
                <p class="mb-0">Au Maroc, notre cuisine traditionnelle regorge naturellement de plats sans gluten : le <strong>Tagine</strong>, la <strong>Harira</strong> (sans farine), ou encore le <strong>Baddaz</strong> (couscous de maïs). Vous n'avez pas à renoncer à votre culture pour rester en bonne santé !</p>
            </div>
        </div>
    </div>

    <div class="text-center py-5">
        <h2 class="fw-bold mb-4" style="color: #D4AF37;">Transformez votre cuisine en pharmacie naturelle</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="p-4 border-top border-5 border-warning shadow-sm h-100">
                    <h5 class="fw-bold">Explorez</h5>
                    <p class="small">Découvrez de nouvelles saveurs : quinoa, millet, sarrasin, riz rouge.</p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 border-top border-5 border-warning shadow-sm h-100">
                    <h5 class="fw-bold">Cuisinez</h5>
                    <p class="small">Reprenez le plaisir de préparer vos propres plats sains et gourmands.</p>
                </div>
            </div>
            <div class="col">
                <div class="p-4 border-top border-5 border-warning shadow-sm h-100">
                    <h5 class="fw-bold">Partagez</h5>
                    <p class="small">Invitez vos proches à goûter : la santé se partage aussi autour d'une table.</p>
                </div>
            </div>
        </div>
        
        <div class="mt-5">
            <p class="fs-5 mb-4">Besoin de produits sûrs pour commencer ?</p>
            <a href="/produits" class="btn btn-dark btn-lg px-5 rounded-pill shadow">Accéder à la boutique de confiance</a>
        </div>
    </div>
</div>
@endsection