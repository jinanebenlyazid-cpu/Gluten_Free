<nav class="navbar navbar-expand-lg" style="background-color: #D4AF37;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src='/images/gluten-free-logo.jpg' 
                 alt="Logo" 
                 style="height: 50px; margin-right: 10px;" 
                 class="rounded">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/" style="color: #FFFFFF;">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/produits" style="color: #FFFFFF;">Produits</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false" style="color: #FFFFFF;">
                        Catégories
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categori as $cat)
                        <li>
                            <a class="dropdown-item"
                            href="/categorie/{{$cat->categorie}}">
                            {{ $cat->categorie }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Produits/create" style="color: #FFFFFF;">Ajouter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about" style="color: #FFFFFF;">À propos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/contact" style="color: #FFFFFF;">Contact</a>
                </li>

                

            </ul>
        </div>
    </div>
</nav>
