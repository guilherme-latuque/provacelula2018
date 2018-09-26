<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategoria extends Model
{
    protected $fillable = ['nome','id_categoria']
    protected $guarded = ['id'];
    protected $table = 'sub_categoria';
}
