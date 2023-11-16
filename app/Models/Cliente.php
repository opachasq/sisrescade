<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //use HasFactory;
    protected $table = 'clientes';

    protected $fillable = ['dni','nombres','apellidos','celular','correo','direccion','activo', 'created_at', 'updated_at'];
    protected $guarded = ['id'];

    public function generos()
    {
        return $this->belongsTo('App\Models\Genero', 'genero_id');
    }
}
