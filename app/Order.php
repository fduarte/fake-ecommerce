<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function inventory()
    {
        return $this->belongsTo('App\Inventory');
    }

}
