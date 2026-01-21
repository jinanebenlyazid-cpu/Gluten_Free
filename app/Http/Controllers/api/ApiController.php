<?php

namespace App\Http\Controllers\Api;
use Cloudinary\Cloudinary;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produits;
use GuzzleHttp\Handler\Proxy;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $produit = Produits::all(); 
        return response()->json($produit);

    }

    public function filtrer(Request $request) 
    { 
        $query = $request->input('p'); 
        $peoduit = Produits::where('produitnom', 'like', "$query%")->get(); 
        return response()->json($peoduit); 
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    return response()->json([
        'data' => $request->all()
    ]);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
