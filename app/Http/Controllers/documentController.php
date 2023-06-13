<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documentModel;
class documentController extends Controller
{
    public function index()
    {
        $datosDocument =  documentModel::all();

        return view('document.document',compact('datosDocument'));
    }
  
  
    public function edit($id)
    {
        $datosDocument  = documentModel::findOrFail($id);
        
        return view('document.editarDocument',compact('datosDocument'));
    }

    public function create()
    {
        return view('document.crearDocument');
    }
    public function store(Request $request){
        
         $datosDocument = new documentModel;
        
            $datosDocument->name_document=$request->input('name_document');
    
            $datosDocument->save();

        return redirect('Document')->withStatus(__('Se creó correctamente.'));
}

public function  update(Request $request, $id)
{

    $datosDocument = documentModel::findOrFail($id);
    $datosDocument->name_document=$request->input('name_document');
 
    $datosDocument->save();
    return redirect('Document')->withStatus(__('Se actualizó correctamente.'));

}

public function destroy($id)
{
    documentModel::destroy($id);
    return redirect('Document')->withStatus(__('Se eliminó correctamente.'));
}

}
