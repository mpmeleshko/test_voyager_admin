<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Look extends Model
{
    protected $table = 'looks';

    protected $fillable = [
        'name',
        'order',
        'image_url',
//        'event_id'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
