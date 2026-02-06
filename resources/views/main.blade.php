<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gluten Free</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-control:focus {
            border-color: #D4AF37;
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.25);
        }
        
        /* Effet au survol du bouton principal */
        .btn-lg:hover {
            background-color: #8B6B3E !important;
            transform: translateY(-2px);
        }

        /* Fond de page léger pour faire ressortir les cartes blanches */
        body {
            background-color: #FBF9F4;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .nav-link:hover {
            color: #f8f9fa !important;
            transform: translateY(-1px);
        }
        .dropdown-item:hover {
            background-color: #F7F2E8;
            color: #D4AF37;
        }
        .btn {
            transition: all 0.3s ease;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        #heroSlider {
            margin-top: -1px; /* Évite un petit décalage blanc */
        }

        /* Overlay pour rendre les images un peu plus sombres et le texte lisible */
        .overlay-dark {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); /* Ajustez l'opacité selon vos besoins */
            z-index: 1;
        }

        .carousel-caption {
            z-index: 2;
            bottom: 0 !important; /* Centre verticalement avec d-flex */
        }

        .object-fit-cover {
            object-fit: cover;
        }

        /* Style du bouton doré personnalisé */
        .btn-gold {
            background-color: #D4AF37;
            color: white;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-gold:hover {
            background-color: #8B6B3E;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        /* Animation douce pour le texte */
        .carousel-item h1 {
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }
</style>
</head>
<body style="background-color: #FFFFFF; color: #8B6B3E;">

    {{-- Inclure le menu --}}
    @include('menu')

    {{-- Contenu principal --}}
    @yield('content')

    {{-- Inclure le footer --}}
    @include('footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
