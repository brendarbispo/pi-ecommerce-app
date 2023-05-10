<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
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

    /*public function preco(){
        return number_format(($this->PRODUTO_PRECO - $this->PRODUTO_DESCONTO), 2, ',', '.');
    }*/

    public function estoque(): HasOne
    {
        return $this->hasOne(ProdutoEstoque::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}
