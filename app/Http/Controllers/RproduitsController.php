<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddProduitRequest;
use App\Models\Produits;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;

class RproduitsController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Addproduit'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddProduitRequest $request)
    {
        $request->validated(); 
        
        // $produit=new Produits();
        // $categorie=$request->input('categorie');
        // $produitnom=$request->input('produitnom');
        // $description=$request->input('description');
        // $prix=$request->input('prix');
        // $image = $request->file('image')->getClientOriginalName();
        // $produit= new Produits();
        // $produit->categorie=$categorie;
        // $produit->produitnom=$produitnom;
        // $produit->description=$description;
        // $produit->prix=$prix;
        // $produit->image=$image;
        // $produit->save();

        // return back()->with('success', 'Vous avez ajouté un produit avec succès !');
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
        $produit=new Produits();
        $categorie=$request->input('categorie');
        $produitnom=$request->input('produitnom');
        $description=$request->input('description');
        $prix=$request->input('prix');
        $produit= new Produits();
        $produit->categorie=$categorie;
        $produit->produitnom=$produitnom;
        $produit->description=$description;
        $produit->prix=$prix;
        $produit->image=$imageUrl;
        $produit->save();
        return back()->with('success','You have successfully added a new Product.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
