<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $table = 'participantes';
    protected $fillable = ['id', 'nome', 'apelidos', 'tipo_documento','numero', 'data_nacemento', 'mobil','email','actividade_id', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];

}
