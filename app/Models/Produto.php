<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'tb_produto'; // The table associated with the model.
    protected $primaryKey = 'id_produto'; //The primary key associated with the table.
    public $timestamps = false; // Indicates if the model should be timestamped.

    protected $fillable = ['id_categoria_produto', 'data_cadastro', 'nome_produto', 'valor_produto'];

    public function CategoriaProdutos()
    {
        return $this->hasMany(CategoriaProduto::class, 'id_categoria_produto', 'id_categoria_produto');
    } 
}
 