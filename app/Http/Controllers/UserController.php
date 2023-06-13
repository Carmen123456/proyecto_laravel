<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{



    public function index(User $model)
    {

        $datosUser = User::all();
        return view('users.index', ['users' => $model->paginate(5)], compact('datosUser'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $tipoUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('Usuario')->withStatus(__('Se eliminó correctamente.'));
    }
    
}


