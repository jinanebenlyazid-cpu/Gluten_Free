<nav class="navbar navbar-expand-lg" style="background-color: #D4AF37;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="/images/gluten-free-logo.jpg"
                 alt="Logo"
                 style="height: 50px; margin-right: 10px;"
                 class="rounded">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <!-- Liens publics (visiteur + connecté) -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/produits">Produits</a>
                </li>

                <!-- Catégories -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white"
                       href="#"
                       id="navbarDropdown"
                       role="button"
                       data-bs-toggle="dropdown">
                        Catégories
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categori as $cat)
                            <li>
                                <a class="dropdown-item"
                                   href="/categorie/{{ $cat->categorie }}">
                                    {{ $cat->categorie }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/about">À propos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/contact">Contact</a>
                </li>

                <!-- ===== UTILISATEUR CONNECTÉ ===== -->
                @auth

                    <!-- ADMIN -->
                    @if(Auth::user()->role === 'ADMIN')
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/Produits/create">
                                Ajouter Produit
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="/espaceadmin">
                                Espace Admin
                            </a>
                        </li>
                    @endif

                    <!-- USER -->
                    @if(Auth::user()->role === 'USER')
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/espaceclient">
                                Espace Client
                            </a>
                        </li>
                    @endif

                    <!-- Déconnexion -->
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="btn nav-link text-white">
                                Déconnexion
                            </button>
                        </form>
                    </li>

                <!-- ===== VISITEUR ===== -->
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/login">
                            Connexion
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="/register">
                            Inscription
                        </a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
