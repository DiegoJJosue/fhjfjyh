<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodegas extends Model
{
    public $timestamps=false;
    protected $table='bodegas';
    protected $primaryKey='bod_id';
    protected $fillable=['bod_cantida','bod_tipo' ];
}
