<?php

namespace App\models\site;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'mensagem','arquivo'];
}
