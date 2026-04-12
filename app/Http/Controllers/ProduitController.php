<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
        
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Produit $produit)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Produit $produit)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, Produit $produit)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Produit $produit)
    // {
    //     //
    // }


    //  public function index()
    // {
    //     return Produit::all();
    // }

    // public function store(Request $request)
    // {
    //     $produit = Produit::create($request->all());
    //     return response()->json($produit, 201);
    // }

    // public function show($id)
    // {
    //     return Produit::findOrFail($id);
    // }

    // public function update(Request $request, $id)
    // {
    //     $produit = Produit::findOrFail($id);
    //     $produit->update($request->all());

    //     return response()->json($produit);
    // }

    // public function destroy($id)
    // {
    //     $produit = Produit::findOrFail($id);
    //     $produit->delete();

    //     return response()->json(null, 204);
    // }

  
//     public function index(){
//         return Produit::all();
//     }

//     public function store(Request $request){
//         $produit= Produit::create($request->all());
//         return response()->json($produit,201);
//     }

//   public function show($id){
//     return Produit::findOrFail($id);
//   }

//     public function update(Request $request,$id){
//         $produit= Produit::findOrFail($id);
//         $produit->update($request->all());
//         return response()->json($produit);
//     }

//     public function destroy($id){
//         $produit= Produit::findOrFail($id);
//         $produit->delete();
//     }

  public function index(){
    return Produit::all();
  }

  public function show($id){
    $produit = Produit::findOrFail($id);
    return $produit;
  }

  public function store(Request $request){
   $produit= Produit::create($request->all());
  return response()->json($produit,201);

  }

  public function update(Request $request, $id){
    $produit= Produit::findOrFail($id);
    $produit->update($request->all());
    return response()->json($produit, 201);
  }

  public function destroy($id){
    $produit= Produit::findOrFail($id);
    $produit->delete();
  }

}
