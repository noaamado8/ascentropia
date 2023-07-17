<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socix extends Model
{
    use HasFactory;

    protected $table = 'socixs';
    protected $fillable = ['id', 'nome', 'apelidos', 'tipo_documento','numero', 'data_nacemento', 'mobil','email','tipo', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];


}
