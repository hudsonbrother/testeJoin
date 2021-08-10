<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    protected $table = 'tb_categoria_produto'; // The table associated with the model.
    protected $primaryKey = 'id_categoria_produto'; //The primary key associated with the table.
    public $timestamps = false; // Indicates if the model should be timestamped.

    protected $fillable = ['nome_categoria'];
}
