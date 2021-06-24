<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];
    

    public function path()
    {
        return route('clients.show', $this);
    }

    public function people()
    {
        return $this->hasMany(Person::class);
    }



}
