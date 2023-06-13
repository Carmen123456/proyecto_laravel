<?php

namespace App\Http\Controllers;
use App\Models\clienteModel;
use App\Models\documentModel;
use App\Models\ciudadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class clienteController extends Controller
{
    public function index()
    {
        $datosCliente =  clienteModel::all();
        $datosCiudad =  ciudadModel::all();
        $datosDocument =  documentModel::all();

        return view('cliente.cliente',compact('datosCliente','datosCiudad','datosDocument'));
    }
  
  
    public function edit($id)
    {
        $datosCiudad =  ciudadModel::all();
        $datosDocument =  documentModel::all();
        $datosCliente  = clienteModel::findOrFail($id);
        
        return view('cliente.editarCliente',compact('datosCliente','datosCiudad','datosDocument'));
    }

    public function create()
    {
        $datosCiudad =  ciudadModel::all();
        $datosDocument =  documentModel::all();
       
        return view('cliente.crearCliente',compact('datosCiudad','datosDocument'));
    }
    public function store(Request $request){
        
         $datosCliente = new clienteModel;
        

            $datosCliente->name_client=$request->input('name_client');
            $datosCliente->city_id=$request->input('city_id');
            $datosCliente->address=$request->input('address');
            $datosCliente->email=$request->input('email');
            $datosCliente->phone=$request->input('phone');
            $datosCliente->document_id=$request->input('document_id');
            $datosCliente->number_document=$request->input('number_document');


            $datosCliente->save();

        return redirect('Cliente')->withStatus(__('Se creó correctamente.'));
}

public function  update(Request $request, $id)
{

    $datosCliente = clienteModel::findOrFail($id);
    $datosCliente->name_client=$request->input('name_client');
    $datosCliente->city_id=$request->input('city_id');
    $datosCliente->address=$request->input('address');
    $datosCliente->email=$request->input('email');
    $datosCliente->phone=$request->input('phone');
    $datosCliente->document_id=$request->input('document_id');
    $datosCliente->number_document=$request->input('number_document');


    $datosCliente->save();
    return redirect('Cliente')->withStatus(__('Se actualizó correctamente.'));

}

public function destroy($id)
{
    clienteModel::destroy($id);
    return redirect('Cliente')->withStatus(__('Se eliminó correctamente.'));
}

    }

