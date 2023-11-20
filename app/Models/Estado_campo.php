<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado_campo extends Model
{
    protected $table = 'estado_campos';
    protected $fillable = ['nombre','created_at', 'updated_at'];
    protected $guarded = ['id'];
}
