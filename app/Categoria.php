<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nome'];
    protected $guarded = ['id'];
    protected $table = 'categoria';
}
