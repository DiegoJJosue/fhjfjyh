<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    //
    public $timestamps=false;
    protected $table='facturas';
    protected $primaryKey='fac_id';

    protected $fillable=[
    	'prov_id',
    	'fac_vt',

    ];

}
