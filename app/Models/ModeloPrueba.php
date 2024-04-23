<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloPrueba extends Model
{
    use HasFactory;
    protected $table = "prueba";
    protected $primaryKey="id";
}
