<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'pessoas';

    protected $primaryKey = 'pessoa_id';

    protected $fillable = ['nome', 'cpf', 'data_nascimento', 'email', 'status', 'logradouro', 'cidade', 'estado'];
}
