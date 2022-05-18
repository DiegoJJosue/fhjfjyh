<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    public $timestamps=false;
    protected $table='productos';
    protected $primaryKey='prod_id';
    protected $fillable=['prod_nombre','prod_codigo','prod_precio' ];
    
}
