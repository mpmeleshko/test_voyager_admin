<?php

namespace App\Repositories\Eloquents;

use App\Event as Model;
use App\Repositories\Contracts\EventRepositoryInterface;
use Carbon\Carbon;

class EventRepository implements EventRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getFutureEvents()
    {
        return Model::where('starts_on', '>', Carbon::now()->timestamp)->get();
    }
}