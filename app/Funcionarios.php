<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model
{
    protected $table = 'funcionarios';
    protected $primaryKey = 'cedula';
    public $timestamps = false;
}
