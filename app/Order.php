<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function path()
    {
        return route('orders.show', $this);
    }

    public function client()
    {
        return $this->belongsTo(\App\Client::class);
    }

    protected $guarded = [];
}
