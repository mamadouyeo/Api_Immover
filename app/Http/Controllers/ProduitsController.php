<?php

namespace App\Http\Controllers;

use App\Models\produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    //

    function ajouter(Request $request){
        $produit = new Produits();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->lien_image = $request->lien_image;
        $produit->prix = $request->prix;
        $produit->tva = $request->tva;
        $produit->save();
        return response()->json($produit);
    }
    function liste(){
        return response()->json(Produits::all());
    }

    function detail($id){
        // Code permettant d'obtenir le produit avec l'identifiant $id (find($id))
    }

}
