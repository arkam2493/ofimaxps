<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimientos extends Model
{
    protected $table = 'seguimientos';
    protected $primaryKey = 'id_seguimiento';
    public $timestamps = false;
}
