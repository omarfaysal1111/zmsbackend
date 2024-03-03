<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\productsModel;
use Illuminate\Http\Request;

class productsController extends Controller
{


    public function createForm(){

        $infos = productsModel::latest()->get();

        return view ('products')->with('infos',$infos);
      }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = productsModel::all();
        return response()->json($products);

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'type' => 'required',
            'size' => 'required',
           
          ]);
          $newproduct = new productsModel([
           
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'type' => $request->get('type'),
            'size' => $request->get('size'),
            
  
        ]);

      
          $newproduct->save();
      
          return back();
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(productsModel $productsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productsModel $productsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productsModel $productsModel)
    {
        //
    }
}
