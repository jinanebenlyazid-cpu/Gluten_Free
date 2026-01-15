<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::fallback(function () { 
    return view('erreur'); 
});



Route::get('/produits', function () { 
    $produits = [
        'Pains & Viennoiseries' => [
            [
                'nom' => 'Pain complet sans gluten',
                'description' => 'Pain riche en fibres, bio',
                'prix' => 45,
                'image' => 'pain_complet.png'
            ],
            [
                'nom' => 'Pan Blanco Pain de Mie',
                'description' => 'Pain Gluten Free Schär 200g',
                'prix' => 31,
                'image' => 'croissant.png'
            ],
            [
                'nom' => 'Pan Blanco (Pain de Mie) Sans Gluten Schär 200g',
                'description' => 'Pain de mie sans gluten, moelleux et léger, idéal pour les sandwiches et le petit-déjeuner.',
                'prix' => 37.80,
                'image' => 'pan_blanco_schar.webp'
            ],
        ],
        'Céréales & Farines' => [
            [
                'nom' => 'Farine de riz bio',
                'description' => 'Idéale pour pâtisserie et pain sans gluten',
                'prix' => 72,
                'image' => 'farine_riz.webp'
            ],
            [
                'nom' => 'Flocons d’avoine sans gluten',
                'description' => 'Pour petit-déjeuner sain',
                'prix' => 69,
                'image' => 'flocons_avoine.png'
            ],
            [
                'nom' => 'Schär Mix B ',
                'description' => 'Farine Sans Gluten pour Pain 1Kg',
                'prix' => 84.60,
                'image' => 'schar_mix_b_1kg.webp'
            ],

        ],
        'Biscuits & Snacks' => [
            [
                'nom' => 'Cookies chocolat sans gluten',
                'description' => 'Cookies croustillants, bio',
                'prix' => 18,
                'image' => 'cookies.webp'
            ],
            [
                'nom' => 'Barres énergétiques sans gluten',
                'description' => 'Snack sain pour la randonnée',
                'prix' => 40,
                'image' => 'barres.png'
            ],
            [
                'nom' => 'Cioccolini Sans Gluten Schär 150g',
                'description' => 'Biscuits croquants sans gluten aux pépites de chocolat, idéals pour une pause gourmande.',
                'prix' => 74.40,
                'image' => 'cioccolini_schar_150g.webp'
            ],

        ],
    ];

    return view('produits', ['allProducts' => $produits]);
});

