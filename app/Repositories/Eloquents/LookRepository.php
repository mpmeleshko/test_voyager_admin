<?php

namespace App\Repositories\Eloquents;

use App\Look as Model;
use App\Repositories\Contracts\LookRepositoryInterface;

class LookRepository implements LookRepositoryInterface
{
    /**
     * @param $eventId
     * @return mixed
     */
    public function getLooksByEventId($eventId)
    {
        return Model::where('event_id', $eventId)->whereNotNull('order')->get();
    }
}