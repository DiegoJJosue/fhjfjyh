<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bodega extends Model
{
    public $timestamps=false;
    protected $table='bodega';
    protected $primaryKey='bod_id';
    protected $fillable=['bod_nombre', ];
}
