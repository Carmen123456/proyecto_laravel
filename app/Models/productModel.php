<?php

namespace App\Models;
use App\Models\categorieModel;
use App\Models\providerModel;
use App\Models\checkoutModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table ="products";
    protected $primaryKey="id";
    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo(categorieModel::class,'categorie_id');
    } 
    public function proveedor()
    {
        return $this->belongsTo(providerModel::class,'provider_id');
    } 

    public function checkouts(){
        return $this->hasMany(checkoutModel::class,'product_id');
    }
}
