@extends('main')

@section('content')
<div class="container my-5">

    <h2 class="mb-5 text-center text-uppercase" style="color: #8B6B3E;">
        Mon panier
    </h2>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @php $total = 0; @endphp

    @if(session('cart') && count(session('cart')) > 0)

    <div class="row">
        @foreach(session('cart') as $id => $item)
            @php $total += $item['price'] * $item['quantity']; @endphp

            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">

                    <img src="{{ $item['photo'] }}" 
                         class="card-img-top" 
                         style="height: 250px; object-fit: cover;">

                    <div class="card-body text-center">

                        <h5 class="card-title">
                            {{ $item['name'] }}
                        </h5>

                        <p class="card-text fw-bold">
                            {{ $item['price'] }} DH
                        </p>

                        <!-- Modifier quantité -->
                        <form action="{{ url('/update-cart') }}" method="POST" class="d-flex justify-content-center align-items-center gap-2 mb-2">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control w-25">
                            <button type="submit" class="btn btn-outline-warning btn-sm">
                                Modifier
                            </button>
                        </form>
                        <p>
                            Total : <strong>{{ $item['price'] * $item['quantity'] }} DH</strong>
                        </p>
                        <!-- Supprimer -->
                        <form action="{{ url('/remove-cart') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                Supprimer
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Total général -->
    <div class="text-center mt-4">
        <h4 class="fw-bold">
            Total général : 
            <span style="color:#8B6B3E;">
                {{ $total }} DH
            </span>
        </h4>

        <a href="{{ url('/checkout') }}" class="btn btn-warning text-white px-4 mt-3">
            Passer au paiement
        </a>
    </div>

    @else
        <div class="alert alert-warning text-center">
            Votre panier est vide 🛒
        </div>
    @endif

</div>
@endsection
