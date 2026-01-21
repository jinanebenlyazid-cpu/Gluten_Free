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
    try {

        $request->validate([
            'categorie'   => 'required',
            'produitnom'  => 'required',
            'description' => 'required',
            'prix'        => 'required|numeric',
            'image'       => 'nullable|image',
        ]);

        $imageUrl = null;

        if ($request->hasFile('image')) {
            $cloudinary = new \Cloudinary\Cloudinary([
                'cloud' => [
                    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                    'api_key'    => env('CLOUDINARY_API_KEY'),
                    'api_secret' => env('CLOUDINARY_API_SECRET'),
                ],
            ]);

            $result = $cloudinary->uploadApi()->upload(
                $request->file('image')->getRealPath(),
                ['folder' => 'produits']
            );

            $imageUrl = $result['secure_url'];
        }

        $produit = Produits::create([
            'categorie'   => $request->categorie,
            'produitnom'  => $request->produitnom,
            'description' => $request->description,
            'prix'        => $request->prix,
            'image'       => $imageUrl,
        ]);

        return response()->json([
            'message' => 'Produit ajouté avec succès',
            'product' => $produit
        ], 201);

    } catch (\Throwable $e) {
        return response()->json([
            'error' => $e->getMessage(),
            'file'  => $e->getFile(),
            'line'  => $e->getLine(),
        ], 500);
    }
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
