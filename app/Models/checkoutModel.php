<?php

namespace App\Models;
use App\Models\saleModel;
use App\Models\productModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkoutModel extends Model
{
    protected $table ="checkOuts";
    protected $primaryKey="id";
    public $timestamps = false;

    public function sales()
{
    return $this->hasMany(saleModel::class,'sale_id');
} 

public function producto()
{
    return $this->belongsTo(productModel::class,'product_id');
} 

}
