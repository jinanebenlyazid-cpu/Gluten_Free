@extends('main')

@section('content')
<div class="container my-5">

    <h2 class="text-center mb-4 text-uppercase" style="color:#8B6B3E;">
        Paiement en ligne
    </h2>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow border-0">
                <div class="card-body">

                    <h5 class="text-center mb-3">
                        Montant à payer :
                        <strong style="color:#8B6B3E;">
                            {{ $total }} DH
                        </strong>
                    </h5>

                    <form action="{{ route('payment') }}" method="POST">
                        @csrf

                        <!-- Nom du client -->
                        <div class="mb-3">
                            <label class="form-label">Nom complet</label>
                            <input type="text" class="form-control" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required>
                        </div>

                        <!-- Carte bancaire (simulation Stripe) -->
                        <div class="mb-3">
                            <label class="form-label">Numéro de carte</label>
                            <input type="text" class="form-control" placeholder="4242 4242 4242 4242">
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="MM/YY">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="CVC">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning w-100 mt-4 text-white">
                            Payer {{ $total }} DH
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
