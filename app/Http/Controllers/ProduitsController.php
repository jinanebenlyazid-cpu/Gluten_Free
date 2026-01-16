<?php

namespace App\Http\Controllers;
use App\Models\Produits;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ProduitsController extends Controller
{
    public function index()
{
    $produits=Produits::paginate(3);
    return view('produits', ['products' => $produits ]);
}
public function getProductsByCategorie($categorie) 
{ 

    $produits = Produits::where('categorie', $categorie)->get(); 
   
    return view('categorie', [ 'produits' => $produits, 'categorie' =>$categorie  ]); 
} 
}
