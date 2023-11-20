<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    protected $table = 'horas';
    protected $fillable = ['nombre','created_at', 'updated_at'];
    protected $guarded = ['id'];
}
