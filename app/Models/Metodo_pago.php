<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodo_pago extends Model
{
    protected $table = 'metodo_pagos';
    protected $fillable = ['nombre','created_at', 'updated_at'];
    protected $guarded = ['id'];
}
