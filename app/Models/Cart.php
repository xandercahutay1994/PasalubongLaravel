<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    public $pK = 'cart_id';
    public $timestamps = false;
}
