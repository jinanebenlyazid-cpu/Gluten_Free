@extends('main')
@section('content')

<div id="heroSlider" class="carousel slide carousel-fade shadow-lg" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 100vh; min-height: 500px;">
            <div class="overlay-dark"></div>
            <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&q=80&w=1600" class="d-block w-100 h-100 object-fit-cover" alt="Pain sans gluten">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                <h1 class="display-2 fw-bold animate__animated animate__fadeInDown" style="color: #D4AF37;">{{__('index.h1')}}</h1>
                <p class="lead fs-3 mb-4 animate__animated animate__fadeInUp">{{trans('index.p1')}}</p>
                <div>
                    <a href="/produits" class="btn btn-gold btn-lg rounded-pill px-5 py-3 fw-bold shadow">{{__('index.a1')}}</a>
                </div>
            </div>
        </div>

       <div class="carousel-item" style="height: 100vh; min-height: 500px;">
    <div class="overlay-dark"></div>
    <img src="https://static.vecteezy.com/system/resources/previews/046/930/754/non_2x/gluten-free-label-no-gluten-icon-grain-free-forbidden-ban-or-prohibition-logo-badge-symbol-stamp-logo-logotype-sticker-emblem-mark-or-seal-vector.jpg" 
         class="d-block w-100 h-100 object-fit-cover" 
         alt="Vivre mieux sans gluten">
    
    <div class="carousel-caption d-flex flex-column justify-content-center h-100">
        <h1 class="display-2 fw-bold animate__animated animate__fadeInDown" style="color: #FFFFFF;">
            {{__('index.h2')}}
        </h1>
        
        <p class="lead fs-3 mb-4 animate__animated animate__fadeInUp" style="max-width: 800px; margin: 0 auto;">
           {{__('index.p2')}}
        </p>
        
        <div>
            <a href="/energie" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold shadow-sm">
                {{__('index.a2')}}
            </a>
        </div>
    </div>
</div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

@endsection