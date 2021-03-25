<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamos extends Model
{
    protected $table = 'reclamos';
    protected $primaryKey = 'id_reclamo';
    public $timestamps = false;
}
