<?php

namespace App\Http\Controllers;
use App\Models\saleModel;
use App\Models\billModel;
use App\Models\clienteModel;
use App\Models\productModel;
use App\Models\ciudadModel;

use Illuminate\Http\Request;

class saleController extends Controller
{
    public function index()
    {
        $datosSale =  saleModel::all();
        $datosBill =  billModel::all();
        $datosCliente =  clienteModel::all();
        $datosProduct =  productModel::all();
        $datosCiudad =  ciudadModel::all();

        return view('sale.sale',compact('datosSale','datosBill','datosCliente','datosProduct','datosCiudad'));
    }
  
  
    public function edit($id)
    {
        $datosSale  = saleModel::findOrFail($id);
        $datosBill =  billModel::all();
        $datosCliente =  clienteModel::all();
        $datosProduct =  productModel::all();
        $datosCiudad =  ciudadModel::all();
        
        return view('sale.editarSale',compact('datosSale','datosBill','datosCliente','datosProduct','datosCiudad'));
    }

    public function create()
    {
        $datosBill =  billModel::all();
        $datosCliente =  clienteModel::all();
        $datosProduct =  productModel::all();
        $datosCiudad =  ciudadModel::all();
        return view('sale.crearSale',compact('datosBill','datosCliente','datosProduct','datosCiudad'));
    }
    public function store(Request $request){
        
         $datosSale = new saleModel;
        
          
            $datosSale->client_id=$request->input('client_id');
            $datosSale->product_id=$request->input('product_id');
            $datosSale->quantity=$request->input('quantity');
            $datosSale->address=$request->input('address');
            $datosSale->city_id=$request->input('city_id');
            $datosSale->valor=$request->input('valor');

            $datosSale->save();

        return redirect('Sale')->withStatus(__('Se creó correctamente.'));
}

public function  update(Request $request, $id)
{

    $datosSale = saleModel::findOrFail($id);
    
    $datosSale->client_id=$request->input('client_id');
    $datosSale->product_id=$request->input('product_id');
    $datosSale->quantity=$request->input('quantity');
    $datosSale->address=$request->input('address');
    $datosSale->city_id=$request->input('city_id');
    $datosSale->valor=$request->input('valor');
 

    $datosSale->save();
    return redirect('Sale')->withStatus(__('Se actualizó correctamente.'));
}

public function destroy($id)
{
    saleModel::destroy($id);
    return redirect('Sale')->withStatus(__('Se eliminó correctamente.'));
}

}
