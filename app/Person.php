<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('people.show', $this);
    }
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }


    // public function rezet()
    // {
    //     $this->position = 'RESETED';
    //     $this->save();
    // }

    // protected $fillable = ['name', ]
    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }
}
