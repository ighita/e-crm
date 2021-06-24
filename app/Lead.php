<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    public function path()
    {
        return route('leads.show', $this);
    }

    protected $guarded = [];
}
