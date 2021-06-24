<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function path()
    {
        return route('tasks.show', $this);
    }

    public function assigned_to()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function task_creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    protected $guarded = [];
}
