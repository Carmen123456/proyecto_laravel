<?php

namespace App\Http\Controllers;
use App\Models\ciudadModel;
use Illuminate\Http\Request;

class ciudadController extends Controller
{
    public function index()
    {
        $datosCiudad =  ciudadModel::all();

        return view('ciudad.ciudad',compact('datosCiudad'));
    }
  
  
    public function edit($id)
    {
        $datosCiudad  = ciudadModel::findOrFail($id);
        
        return view('ciudad.editarCiudad',compact('datosCiudad'));
    }

    public function create()
    {
        return view('ciudad.crearCiudad');
    }
    public function store(Request $request){
        
         $datosCiudad = new ciudadModel;
        
            $datosCiudad->name_cities=$request->input('name_cities');
            $datosCiudad->country=$request->input('country');
           

            $datosCiudad->save();

        return redirect('Ciudad')->withStatus(__('Se creó correctamente.'));
}

public function  update(Request $request, $id)
{

    $datosCiudad = ciudadModel::findOrFail($id);
    $datosCiudad->name_cities=$request->input('name_cities');
    $datosCiudad->country=$request->input('country');
 

    $datosCiudad->save();
    return redirect('Ciudad')->withStatus(__('Se actualizó correctamente.'));;

}

public function destroy($id)
{
    ciudadModel::destroy($id);
    return redirect('Ciudad')->withStatus(__('Se eliminó correctamente.'));
}

    }
