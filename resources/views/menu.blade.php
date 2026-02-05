<nav class="navbar navbar-expand-lg sticky-top shadow-sm" style="background: #D4AF37;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="/images/gluten-free-logo.jpg" alt="Logo" style="height: 55px; width: 70px; object-fit: cover;" class="rounded-circle border border-white">
            <span class="ms-2 fw-bold text-white d-none d-sm-inline"></span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item mx-1"><a class="nav-link text-white fw-medium active" href="/">Accueil</a></li>
                <li class="nav-item mx-1"><a class="nav-link text-white fw-medium" href="/produits">Produits</a></li>
                
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle text-white fw-medium" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Catégories</a>
                    <ul class="dropdown-menu shadow border-0 mt-2">
                        @foreach ($categori as $cat)
                            <li><a class="dropdown-item py-2" href="/categorie/{{ $cat->categorie }}">{{ $cat->categorie }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item mx-1"><a class="nav-link text-white fw-medium" href="/about">À propos</a></li>
                <li class="nav-item mx-1 me-lg-3"><a class="nav-link text-white fw-medium" href="/contact">Contact</a></li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="btn btn-outline-light dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown">
                            Mon Compte
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                            @if(Auth::user()->role === 'ADMIN')
                                <li><a class="dropdown-item" href="/Produits/create">➕ Ajouter Produit</a></li>
                                <li><a class="dropdown-item" href="/espaceadmin">📊 Espace Admin</a></li>
                                <li> <a class="dropdown-item" href="/email">📧 Envoyer Email</a> </li>
                            @else
                                <li><a class="dropdown-item" href="/espaceclient">👤 Espace Client</a></li>
                            @endif
                            
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/cart">🛒 Panier</a></li>
                            <li>
                                <form action="/logout" method="POST" class="px-3">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm w-100">Déconnexion</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item"><a class="btn btn-warning  ms-lg-2 rounded-pill px-4 text-dark" href="/login">Connexion</a></li>
                    <li class="nav-item"><a class="btn btn-light ms-lg-2 rounded-pill px-4 text-dark" href="/register">S'inscrire</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>