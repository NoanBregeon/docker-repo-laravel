<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Affichage (Read)
    public function index() {
        $produits = Product::all();
        return view('produits', ['lesProduits' => $produits]);
    }

    // Enregistrement (Create)
    public function store(Request $request) {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required|numeric'
        ]);

        Product::create($request->all());
        return redirect()->back()->with('success', 'Produit ajouté !');
    }

    // Suppression (Delete)
    public function destroy($id) {
        Product::destroy($id);
        return redirect()->back()->with('success', 'Produit supprimé !');
    }

    // Edition (Edit)
    public function edit($id) {
        $produit = Product::findOrFail($id);
        return view('edit', compact('produit'));
    }

    // Mise à jour (Update)
    public function update(Request $request, $id) {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required|numeric'
        ]);
        $produit = Product::findOrFail($id);
        $produit->update($request->all());
        return redirect('/products');
    }
}
