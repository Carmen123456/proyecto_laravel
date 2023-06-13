<?php

namespace App\Http\Controllers;
use App\Models\checkoutModel;
use App\Models\saleModel;
use App\Models\productModel;
use App\Models\clienteModel;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function index()
    {
        $datosCheckout =  checkoutModel::all();
        $datosProduct =  productModel::all();
        $datosSale =  saleModel::all();
        $datosCliente =  clienteModel::all();
        return view('checkout.checkout',compact('datosCheckout','datosProduct','datosSale','datosCliente'));
    }
  
  
    public function edit($id)
    {
        $datosCheckout  = checkoutModel::findOrFail($id);
        $datosProduct =  productModel::all();
        $datosSale =  saleModel::all();
        $datosCliente =  clienteModel::all();

        return view('checkout.editarCheckout',compact('datosCheckout','datosProduct','datosSale','datosCliente'));
    }

    public function create()
    {
        $datosProduct =  productModel::all();
        $datosSale =  saleModel::all();
        $datosCliente =  clienteModel::all();
        return view('checkout.crearCheckout',compact('datosProduct','datosSale','datosCliente'));
    }
    public function store(Request $request){
        
         $datosCheckout = new checkoutModel;
        
            $datosCheckout->sale_id=$request->input('sale_id');
            $datosCheckout->product_id=$request->input('product_id');
            $datosCheckout->quantity=$request->input('quantity');
            $datosCheckout->client_id=$request->input('client_id');

            $datosCheckout->save();

        return redirect('Checkout')->withStatus(__('Se creó correctamente.'));
}

public function  update(Request $request, $id)
{

    $datosCheckout = checkoutModel::findOrFail($id);
    
    $datosCheckout->sale_id=$request->input('sale_id');
    $datosCheckout->product_id=$request->input('product_id');
    $datosCheckout->quantity=$request->input('quantity');
    $datosCheckout->client_id=$request->input('client_id');

    $datosCheckout->save();
    return redirect('Checkout')->withStatus(__('Se actualizó correctamente.'));

}

public function destroy($id)
{
    checkoutModel::destroy($id);
    return redirect('Checkout')->withStatus(__('Se eliminó correctamente.'));
}

}
