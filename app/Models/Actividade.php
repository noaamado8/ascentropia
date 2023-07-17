<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{
    use HasFactory;


    protected $table = 'actividades';
    protected $fillable = ['id', 'titulo', 'categoria', 'horario', 'descripcion', 'aforo','prezo','imaxe', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];

}
