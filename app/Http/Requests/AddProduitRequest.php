<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProduitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'categorie'   => 'required',
            'produitnom'  => 'required',
            'description' => 'required',
            'prix'        => 'required',
            'image'       => 'nullable',
        ];
    }
     public function messages()
    {
         return [
            'categorie.required'   => 'La catégorie est obligatoire.',
            'produitnom.required'  => 'Le nom du produit est obligatoire.',
            'prix.required'         => 'Le prix doit être un nombre.',
            'image.required'          => 'Le fichier doit être une image valide.',
            'description.required'    => 'la descriptions est obligatoire'
        ];
     }
}
