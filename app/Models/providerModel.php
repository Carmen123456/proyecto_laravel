<?php

namespace App\Models;
use App\Models\ciudadModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class providerModel extends Model
{
    protected $table ="Providers";
    protected $primaryKey="id";
    public $timestamps = false;

public function ciudad()
{
    return $this->belongsTo(ciudadModel::class,'city_id');
} 
}