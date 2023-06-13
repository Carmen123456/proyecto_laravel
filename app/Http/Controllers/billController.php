<?php

namespace App\Http\Controllers;
use App\Models\billModel;
use App\Models\documentModel;
use App\Models\saleModel;
use Illuminate\Http\Request;

class billController extends Controller
{
    public function index()
    {
        $datosBill =  billModel::all();
        $datosDocument =  documentModel::all();
        $datosSale =  saleModel::all();
        return view('bill.bill',compact('datosBill','datosDocument','datosSale'));
    }
  
  
    public function edit($id)
    {
        $datosBill  = billModel::findOrFail($id);
        $datosDocument =  documentModel::all();
        $datosSale =  saleModel::all();
        return view('bill.editarBill',compact('datosBill','datosDocument','datosSale')
    );
    }

    public function create()
    {
        $datosDocument =  documentModel::all();
        $datosSale =  saleModel::all();
        return view('bill.crearBill',compact('datosDocument','datosSale'));
    }
    public function store(Request $request){
        
         $datosBill = new billModel;
        
            $datosBill->sale_id=$request->input('sale_id');
           

            $datosBill->save();

        return redirect('Bill')->withStatus(__('Se creó correctamente.'));
}

public function  update(Request $request, $id)
{

    $datosBill = BillModel::findOrFail($id);
    $datosBill->sale_id=$request->input('sale_id');
 

    $datosBill->save();
    return redirect('Bill')->withStatus(__('Se actualizó correctamente.'));

}

public function destroy($id)
{
    BillModel::destroy($id);
    return redirect('Bill')->withStatus(__('Se eliminó correctamente.'));
}

}
