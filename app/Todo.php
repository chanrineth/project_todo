<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status_id'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
