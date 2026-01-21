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
         $request->validate([
            'categorie'   => 'required',
            'produitnom'  => 'required',
            'description' => 'required',
            'prix'        => 'required',
            'image'       => 'nullable',
        ], [
            'categorie.required'   => 'La catégorie est obligatoire.',
            'produitnom.required'  => 'Le nom du produit est obligatoire.',
            'prix.required'         => 'Le prix doit être un nombre.',
            'image.required'          => 'Le fichier doit être une image valide.',
            'description.required'    => 'la descriptions est obligatoire'
        ]); 
        
        
         $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key'    => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);

        $result = $cloudinary->uploadApi()->upload(
            $request->file('image')->getRealPath(),
            [
                'folder' => 'produits',
            ]
        );

        $imageUrl = $result['secure_url'];
        $produit = Produits::create([ 
        'categorie' => $request->input('categorie'), 
        'produitnom' => $request->input('produitnom'), 
        'description' => $request->input('description'),
        'prix' => $request->input('prix'),
        'image' => $imageUrl,
        ]); 
        $produit->save();

        return response()->json(['message' => 'produit ajouté avec succès!!', 'product' => $produit]);
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
