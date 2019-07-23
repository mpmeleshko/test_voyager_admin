<?php

namespace App\Repositories\Contracts;


interface LookRepositoryInterface
{
    /**
     * @param $eventId
     * @return mixed
     */
    public function getLooksByEventId($eventId);
}