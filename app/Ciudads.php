<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudads extends Model
{
    protected $table = 'ciudads';
    protected $primaryKey = 'id_ciudad';
    public $timestamps = false;
}
