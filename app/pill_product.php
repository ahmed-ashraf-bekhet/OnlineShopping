<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pill_product extends Model
{
    protected $table='pill_products';
    public $primaryKey='id';
    public $timestamps=true;
}
