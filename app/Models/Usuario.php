<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use HasFactory;
    protected $table = 'USUARIO';
    protected $primaryKey = 'USUARIO_ID';

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'USUARIO_NOME', 
        'USUARIO_EMAIL',
        'USUARIO_SENHA', 
        'USUARIO_CPF',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'USUARIO_SENHA',
    ];

    public $timestamps = false;
}

