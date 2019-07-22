<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'name',
        'starts_on',
        'ends_on'
    ];

    public function looks()
    {
        return $this->hasMany(Look::class, 'event_id', 'id');
    }
}
