<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_deporte extends Model
{
    protected $table = 'tipo_deportes';
    protected $fillable = ['nombre','activo','created_at', 'updated_at'];
    protected $guarded = ['id'];
}
