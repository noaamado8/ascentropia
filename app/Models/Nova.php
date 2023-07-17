<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nova extends Model
{
    use HasFactory;

    protected $table = 'novas';
    protected $fillable = ['id', 'titulo','resumo', 'contido','imaxe', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
}
