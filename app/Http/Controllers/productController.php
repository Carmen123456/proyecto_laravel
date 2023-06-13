<?php

namespace App\Http\Controllers;
use App\Models\productModel;
use App\Models\providerModel;
use App\Models\categorieModel;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $datosProduct =  productModel::all();

        $datosCategorie =  categorieModel::all();
        $datosProvider =  providerModel::all();

        return view('product.product',compact('datosProduct','datosProvider','datosCategorie'));
    }
  
  
    public function edit($id)
    {
        $datosProduct  = productModel::findOrFail($id);
        $datosCategorie =  categorieModel::all();
        $datosProvider =  providerModel::all();

        
        return view('product.editarProduct',compact('datosProduct','datosProvider','datosCategorie'));
    }

    public function create()
    { 
        $datosCategorie =  categorieModel::all();
        $datosProvider =  providerModel::all();

        return view('product.crearProduct',compact('datosProvider','datosCategorie'));
    }
    public function store(Request $request){
        
         $datosProduct = new productModel;
        
            $datosProduct->name_product=$request->input('name_product');
            $datosProduct->description_product=$request->input('description_product');
            $datosProduct->quantity=$request->input('quantity');
            $datosProduct->categorie_id=$request->input('categorie_id');
            $datosProduct->provider_id=$request->input('provider_id');

           

            $datosProduct->save();

        return redirect('Product')->withStatus(__('Se creó correctamente.'));
}

public function  update(Request $request, $id)
{

    $datosProduct = productModel::findOrFail($id);
    
    $datosProduct->name_product=$request->input('name_product');
            $datosProduct->description_product=$request->input('description_product');
            $datosProduct->quantity=$request->input('quantity');
            $datosProduct->categorie_id=$request->input('categorie_id');
            $datosProduct->provider_id=$request->input('provider_id');
 

    $datosProduct->save();
    return redirect('Product')->withStatus(__('Se actualizó correctamente.'));

}

public function destroy($id)
{
    productModel::destroy($id);
    return redirect('Product')->withStatus(__('Se eliminó correctamente.'));
}

}
