<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome','preco','id_sub_categoria'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'produto';
}
