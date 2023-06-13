<?php

namespace App\Http\Controllers;
use App\Models\providerModel;
use App\Models\ciudadModel;
use Illuminate\Http\Request;

class providerController extends Controller
{
    public function index()
    {
        $datosProvider =  providerModel::all();
        $datosCiudad =  ciudadModel::all();

        return view('provider.provider',compact('datosProvider','datosCiudad'));
    }
  
  
    public function edit($id)
    {
        $datosProvider  = providerModel::findOrFail($id);
         $datosCiudad =  ciudadModel::all();

        return view('provider.editarProvider',compact('datosProvider','datosCiudad'));
    }

    public function create()
    {
        $datosCiudad =  ciudadModel::all();
        return view('provider.crearProvider',compact('datosCiudad'));
    }
    public function store(Request $request){
        
         $datosProvider = new providerModel;
        
            $datosProvider->name_provider=$request->input('name_provider');
            $datosProvider->nit=$request->input('nit');
            $datosProvider->phone=$request->input('phone');
            $datosProvider->city_id=$request->input('city_id');
            $datosProvider->responsible=$request->input('responsible');
            $datosProvider->email=$request->input('email');

            $datosProvider->save();

        return redirect('Provider')->withStatus(__('Se creó correctamente.'));
}

public function  update(Request $request, $id)
{

    $datosProvider = providerModel::findOrFail($id);
    $datosProvider->name_provider=$request->input('name_provider');
    $datosProvider->nit=$request->input('nit');
    $datosProvider->phone=$request->input('phone');
    $datosProvider->city_id=$request->input('city_id');
    $datosProvider->responsible=$request->input('responsible');
    $datosProvider->email=$request->input('email');

    $datosProvider->save();
    return redirect('Provider')->withStatus(__('Se actualizó correctamente.'));

}

public function destroy($id)
{
    providerModel::destroy($id);
    return redirect('Provider')->withStatus(__('Se eliminó correctamente.'));
}

}
