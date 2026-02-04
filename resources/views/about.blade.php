@extends('main')

@section('content')

<style>
    .hero-about {
        background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
        url('https://static.vecteezy.com/system/resources/previews/046/930/754/non_2x/gluten-free-label-no-gluten-icon-grain-free-forbidden-ban-or-prohibition-logo-badge-symbol-stamp-logo-logotype-sticker-emblem-mark-or-seal-vector.jpg') center/cover no-repeat;
        min-height: 60vh;
        display: flex;
        align-items: center;
        color: #fff;
        border-radius: 20px;
    }

    .section-title {
        color: #D4AF37;
        font-weight: 700;
    }

    .text-soft {
        color: #6f5a3e;
        line-height: 1.8;
    }

    .card-custom {
        border: none;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
        transition: transform 0.3s ease;
    }

    .card-custom:hover {
        transform: translateY(-8px);
    }

    .icon-circle {
        width: 60px;
        height: 60px;
        background: #D4AF37;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 24px;
        margin-bottom: 15px;
    }

    .bg-soft {
        background-color: #faf7f2;
        border-radius: 20px;
    }
</style>

<div class="container py-5">

    <!-- HERO -->
    <div class="hero-about p-5 mb-5">
        <div>
            <h1 class="display-4 fw-bold">À propos de nous</h1>
            <p class="lead mt-3">
                Le meilleur du sans gluten, pensé pour votre bien-être 🌿
            </p>
        </div>
    </div>

    <!-- INTRO -->
    <div class="bg-soft p-5 mb-5">
        <p class="text-soft fs-5">
            Nous avons choisi la niche des <strong>produits alimentaires sains sans gluten</strong>
            afin de répondre aux besoins des personnes souffrant d'intolérance au gluten,
            de maladie cœliaque ou souhaitant simplement adopter un mode de vie plus sain.
        </p>

        <p class="text-soft fs-5">
            Ce marché en pleine croissance reflète une prise de conscience globale autour
            de la santé, de la nutrition et du bien-être. Chaque produit est soigneusement
            sélectionné pour garantir qualité et sécurité.
        </p>
    </div>

    <!-- MISSION / VISION -->
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card card-custom p-4 h-100">
                <div class="icon-circle">🎯</div>
                <h3 class="section-title">Notre mission</h3>
                <p class="text-soft">
                    Offrir des produits sans gluten de <strong>haute qualité</strong>,
                    naturels et sûrs, accessibles à tous, tout en accompagnant nos clients
                    vers une alimentation plus saine et responsable.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-custom p-4 h-100">
                <div class="icon-circle">🌍</div>
                <h3 class="section-title">Notre vision</h3>
                <p class="text-soft">
                    Devenir une référence dans le domaine des produits sans gluten,
                    en plaçant la santé du consommateur au cœur de chaque décision.
                </p>
            </div>
        </div>
    </div>

    <!-- POURQUOI NOUS -->
    <div class="card card-custom p-5 mb-5">
        <h3 class="section-title mb-4">Pourquoi nous faire confiance ?</h3>
        <ul class="text-soft fs-5">
            <li>✔ Sélection rigoureuse de produits certifiés sans gluten</li>
            <li>✔ Fournisseurs fiables et engagés</li>
            <li>✔ Respect strict des normes de qualité</li>
            <li>✔ Informations claires et transparentes</li>
        </ul>
    </div>

    <!-- VALEURS -->
    <div class="card card-custom p-5">
        <h3 class="section-title mb-4">Nos valeurs</h3>
        <div class="row g-3 text-soft fs-5">
            <div class="col-md-6">🌟 <strong>Qualité & authenticité</strong></div>
            <div class="col-md-6">🌱 <strong>Durabilité</strong></div>
            <div class="col-md-6">🚀 <strong>Innovation</strong></div>
            <div class="col-md-6">🔍 <strong>Transparence</strong></div>
            <div class="col-md-12 mt-2">❤️ <strong>Satisfaction client</strong></div>
        </div>
    </div>

</div>

@endsection
