<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    use HasFactory;
    protected $table = 'PEDIDO_ITEM';
    protected $primaryKey = ['PRODUTO_ID', 'PEDIDO_ID'];
    public $incrementing = false;

    protected $fillable = [
        'PRODUTO_ID',
        'PEDIDO_ID',
        'ITEM_QTD',
        'ITEM_PRECO',
    ];
    public $timestamps = false;

    public function Produto()
    {
        $produtos = $this->hasMany(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');

        return $produtos;
    }

    public function ProdutoImagem()
    {
        $imagens = $this->hasMany(ProdutoImagem::class, 'PRODUTO_ID', 'PRODUTO_ID');

        return $imagens;
    }
}
