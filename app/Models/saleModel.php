<?php

namespace App\Models;
use App\Models\clienteModel;
use App\Models\ciudadModel;
use App\Models\productModel;
use App\Models\billModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saleModel extends Model
{
    protected $table ="sales";
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

    public function bills(){
        return $this->hasMany(billModel::class,'client_id');
    }
    
    public function producto(){
        return $this->belongsTo(productModel::class,'product_id');
    }
    
}
