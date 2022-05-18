<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provedor extends Model
{
    public $timestamps=false;
    protected $table='provedor';
    protected $primaryKey='prov_id';
    protected $fillable=['prov_nombre','prov_direccion','prov_telefono' ];
}
