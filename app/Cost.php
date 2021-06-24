<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    public function path()
    {
        return route('costs.show', $this);
    }

    protected $guarded = [];
}
