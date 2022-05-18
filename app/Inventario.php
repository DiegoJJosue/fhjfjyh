<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    public $timestamps=false;
    protected $table='inventario';
    protected $primaryKey='inv_id';

    protected $fillable=[
    	'inv_cantidad','inv_precio','prod_id','bod_id','prov_id',
    	];
}
