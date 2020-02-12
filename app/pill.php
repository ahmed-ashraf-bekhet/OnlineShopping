<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pill extends Model
{
    protected $table='pills';
    public $primaryKey='id';
    public $timestamps=true;
}
