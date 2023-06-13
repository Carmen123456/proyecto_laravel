<?php

namespace App\Models;
use App\Models\categorieModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorieModel extends Model
{
    protected $table ="categories";
    protected $primaryKey="id";
    public $timestamps = false;

    public function categorias(){
        return $this->hasMany(categorieModel::class,'categorie_id');
    }

}
