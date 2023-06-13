<?php

namespace App\Models;
use App\Models\clienteModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documentModel extends Model
{
    protected $table ="documents";
    protected $primaryKey="id";
    public $timestamps = false;

    public function clientes(){
        return $this->hasMany(clienteModel::class,'client_id');
    }
}

