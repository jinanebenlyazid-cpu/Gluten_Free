<?php

namespace App\Http\Controllers;
use App\Http\Requests\AddProduitRequest;
use App\Models\Produits;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
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
        return back()->with('success','Vous avez ajouté un nouveau produit avec succès !!');

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
        $produit=Produits::find($id);
        return view('modifier',['produit'=>$produit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddProduitRequest $request, $id)
    {
        $request->validated();

        $categorie=$request->input("categorie");
        $produitnom=$request->input("produitnom");
        $description=$request->input("description");
        $prix=$request->input("prix");
        $image='';
        $produit=Produits::find($id);
        $produit->categorie=$categorie;
        $produit->produitnom=$produitnom;
        $produit->description=$description;
        $produit->prix=$prix;

        if($request->hasFile('image')) {
            $image=$request->file('image')->getClientOriginalName();
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
            $image = $result['secure_url'];   
            }
            else{
                $image=$produit->image;
            }
            $produit->image=$image;
            $produit->save();
            return back()->with('successupdate','Vous avez mis à jour le produit avec succès!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Produit=Produits::find($id);
        $Produit->delete();

         return back()->with('successdelete','Vous avez supprimé le produit avec succès!!');
    }
    public function espaceadmin(){
        $produits=Produits::paginate(3);
        return view('espaceadmin', ['products' => $produits ]);
    }
    public function sendEmail(Request $request)
    {
        $data = [
            'recipient_email' => $request->input('recipient_email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        // Envoyer l'e-mail en utilisant la classe Mailable
        Mail::to($data['recipient_email'])->send(new TestMail($data));

        return back()->with('success','Email sent successfully!');
    }


    public function email()
        {
            return view('emailc');
        }

}
