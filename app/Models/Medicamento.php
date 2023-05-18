<?php

namespace App\Models;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    
    use HasFactory;
   // use SoftDeletes;

    protected $fillable = ['nombre', 'clasificacion', 'potencia', 'precio', 'propiedades', 'laboratorio', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }

    public function responsables()
    {
        return $this->belongsToMany(Responsable::class);
    }

   // public $timestamps = false;
}
