<?php

namespace App\Models;
use App\Models\saleModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billModel extends Model
{
    protected $table ="bills";
    protected $primaryKey="id";
    public $timestamps = false;

    public function sale()

    {
        return $this->belongsTo(saleModel::class,'sale_id');
    } 
    
}
