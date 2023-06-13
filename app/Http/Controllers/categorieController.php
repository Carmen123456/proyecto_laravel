<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorieModel;
class categorieController extends Controller
{
    public function index()
    {
        $datosCategorie =  categorieModel::all();

        return view('categorie.categorie',compact('datosCategorie'));
    }
  
  
    public function edit($id)
    {
        $datosCategorie  = categorieModel::findOrFail($id);
        
        return view('categorie.editarCategorie',compact('datosCategorie'));
    }

    public function create()
    {
        return view('categorie.crearCategorie');
    }
    public function store(Request $request){
        
         $datosCategorie = new categorieModel;
        
            $datosCategorie->name_categorie=$request->input('name_categorie');
            $datosCategorie->description_categorie=$request->input('description_categorie');
            
            $datosCategorie->save();

        return redirect('Categorie')->withStatus(__('Se creó correctamente.'));
}

public function  update(Request $request, $id)
{

    $datosCategorie = categorieModel::findOrFail($id);
    $datosCategorie->name_categorie=$request->input('name_categorie');
    $datosCategorie->description_categorie=$request->input('description_categorie');
    
    $datosCategorie->save();
    return redirect('Categorie')->withStatus(__('Se actualizó correctamente.'));

}

public function destroy($id)
{
    categorieModel::destroy($id);
    return redirect('Categorie')->withStatus(__('Se eliminó correctamente.'));
}

}
