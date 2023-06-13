<?php

namespace App\Models;
use App\Models\saleModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciudadModel extends Model
{
    protected $table ="cities";
    protected $primaryKey="id";
    public $timestamps = false;
  
     public function sales()
    {
        return $this->hasMany(saleModel::class, 'sale_id');
    } 
    
}
