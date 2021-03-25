<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_reclamos extends Model
{
    protected $table = 'estado_reclamos';
    protected $primaryKey = 'id_reclamo';
    public $timestamps = false;
}
