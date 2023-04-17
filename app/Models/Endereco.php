<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'ENDERECO';
    protected $primaryKey = 'ENDERECO_ID';

    protected $fillable = [
        'USUARIO_ID',
        'ENDERECO_ID',
        'ENDERECO_NOME',
        'ENDERECO_LOGRADOURO',
        'ENDERECO_NUMERO',
        'ENDERECO_CIDADE',
        'ENDERECO_ESTADO',
        'ENDERECO_CEP',
        'ENDERECO_COMPLEMENTO'

    ];
    public $timestamps = false;
}