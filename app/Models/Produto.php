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

    public function estoque(): HasOne
    {
        return $this->hasOne(ProdutoEstoque::class, 'PRODUTO_ID', 'PRODUTO_ID')
            ->selectRaw('(PRODUTO_ESTOQUE.PRODUTO_QTD - SUM(PEDIDO_ITEM.ITEM_QTD)) AS PRODUTO_QTD')
            ->leftJoin('PEDIDO_ITEM', 'PEDIDO_ITEM.PRODUTO_ID', '=', 'PRODUTO_ESTOQUE.PRODUTO_ID')
            ->groupBy('PRODUTO_ESTOQUE.PRODUTO_QTD');
    }
}
