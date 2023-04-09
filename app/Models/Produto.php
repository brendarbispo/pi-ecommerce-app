<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produto extends Model
{
    use HasFactory;
    protected $table = "PRODUTO";
    protected $primaryKey = "PRODUTO_ID";

    public function ProdutoImagem()
    {
        $imagens = $this->hasMany(ProdutoImagem::class, 'PRODUTO_ID', 'PRODUTO_ID');

        return $imagens;
    }
}
