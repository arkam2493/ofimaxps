<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auditorias extends Model
{
    protected $table = 'Auditorias';
    protected $primaryKey = 'id_auditoria';
    public $timestamps = false;
}
