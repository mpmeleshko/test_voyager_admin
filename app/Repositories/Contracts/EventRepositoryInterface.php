<?php

namespace App\Repositories\Contracts;


interface EventRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getFutureEvents();
}