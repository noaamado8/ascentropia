<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;


    protected $table = 'eventos';
    protected $fillable = ['id', 'titulo','datas', 'descripcion', 'aforo','prezo','imaxe', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];

}
