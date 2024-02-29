<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicles extends Model
{
    use SoftDeletes;

    protected $table = 'vehicles';
    protected $fillable = ['placa', 'renavam', 'modelo', 'marca', 'ano', 'proprietario'];
}
