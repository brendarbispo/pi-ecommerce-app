<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    use HasFactory;
    protected $table = 'PEDIDO_ITEM';
    //protected $primaryKey;

    protected $fillable = [
        'PRODUTO_ID',
        'PEDIDO_ID',
        'ITEM_QTD',
        'ITEM_PRECO',
    ];
    public $timestamps = false;

    public function Produto()
    {
        $imagens = $this->hasMany(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');

        return $imagens;
    }

    public function ProdutoImagem()
    {
        $imagens = $this->hasMany(ProdutoImagem::class, 'PRODUTO_ID', 'PRODUTO_ID');

        return $imagens;
    }
}
