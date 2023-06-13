<?php

namespace App\Models;
use App\Models\documentModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\alianzaModel;
use App\Models\saleModel;
use App\Models\ciudadModel;
class clienteModel extends Model
{
  
    protected $table ="clients";
    protected $primaryKey="id";
    public $timestamps = false;

    public function documento()
{
    return $this->belongsTo(documentModel::class,'document_id');
} 
public function ciudad()
{
    return $this->belongsTo(ciudadModel::class,'city_id');
} 
public function alianzas(){
    return $this->hasMany(alianzaModel::class,'client_id');
}

public function sales(){
    return $this->hasMany(saleModel::class,'client_id');
}

}
