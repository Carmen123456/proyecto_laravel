<?php

namespace App\Models;
use App\Models\clienteModel;
use App\Models\ciudadModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alianzaModel extends Model
{
    protected $table ="alliances";
    protected $primaryKey="id";
    public $timestamps = false;

    public function cliente()
{
    return $this->belongsTo(clienteModel::class,'client_id');
} 

public function ciudad()
{
    return $this->belongsTo(ciudadModel::class,'city_id');
} 

}

