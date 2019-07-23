<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\EventRepositoryInterface;
use App\Repositories\Contracts\LookRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    /**
     * @var EventRepositoryInterface
     */
    private $eventRepository;
    /**
     * @var LookRepositoryInterface
     */
    private $lookRepository;

    /**
     * EventController constructor.
     * @param EventRepositoryInterface $eventRepository
     * @param LookRepositoryInterface $lookRepository
     */
    public function __construct(EventRepositoryInterface $eventRepository, LookRepositoryInterface $lookRepository)
    {
        $this->eventRepository = $eventRepository;
        $this->lookRepository = $lookRepository;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $events = $this->eventRepository->getFutureEvents();

        if (!$events) {
            return response()->setError('No events found.')->setStatus(Response::HTTP_NOT_FOUND)->get();
        }

        return response()->json(['events' => $events], Response::HTTP_OK);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getEventLooks($id)
    {
        $looks = $this->lookRepository->getLooksByEventId($id);

        if (!$looks) {
            return response()->setError('No looks found for event ' . $id)->setStatus(Response::HTTP_NOT_FOUND)->get();
        }

        return response()->json(['looks' => $looks], Response::HTTP_OK);
    }
}
