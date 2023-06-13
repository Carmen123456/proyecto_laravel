<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alianzaModel;
use App\Models\clienteModel;
use App\Models\ciudadModel;
use Illuminate\Support\Facades\Storage;
class alianzaController extends Controller
{
    public function index()
    {
        $datosAlianza =  alianzaModel::all();
        $datosCliente =  clienteModel::all();
        $datosCiudad =  ciudadModel::all();
        return view('alianza.alianza',compact('datosAlianza','datosCliente','datosCiudad'));
    }
  
  
    public function edit($id)
    {
        $datosAlianza  = alianzaModel::findOrFail($id);
        $datosCliente =  clienteModel::all();
        $datosCiudad =  ciudadModel::all();
        return view('alianza.editarAlianza',compact('datosAlianza','datosCliente','datosCiudad'));
    }

    public function create()
    {
        $datosCliente =  clienteModel::all();
        $datosCiudad =  ciudadModel::all();
        return view('alianza.crearAlianza',compact('datosCliente','datosCiudad'));
    }
    public function store(Request $request){
        
         $datosAlianza = new alianzaModel;
    

            $datosAlianza->client_id=$request->input('client_id');
            $datosAlianza->name_alliance=$request->input('name_alliance');
            $datosAlianza->city_id=$request->input('city_id');
            $datosAlianza->phone=$request->input('phone');
            $datosAlianza->email=$request->input('email');
            $datosAlianza->nit=$request->input('nit');
            $datosAlianza->responsible=$request->input('responsible');
           

            $datosAlianza->save();

        return redirect('Alianza')->withStatus(__('Se creó correctamente.'));;
}

public function  update(Request $request, $id)
{
    $datosAlianza = alianzaModel::findOrFail($id);
    $datosAlianza->client_id=$request->input('client_id');
    $datosAlianza->name_alliance=$request->input('name_alliance');
    $datosAlianza->city_id=$request->input('city_id');
    $datosAlianza->phone=$request->input('phone');
    $datosAlianza->email=$request->input('email');
    $datosAlianza->nit=$request->input('nit');
    $datosAlianza->responsible=$request->input('responsible');
   
    $datosAlianza->save();
    return redirect('Alianza')->withStatus(__('Se actualizó correctamente.'));

}

public function destroy($id)
{
    alianzaModel::destroy($id);
    return redirect('Alianza')->withStatus(__('Se eliminó correctamente.'));
}

}
