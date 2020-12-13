<?php

namespace App\Services;

use App\Repositories\CardRepository;

class CardService
{
    protected $cardRepository;

    public function __construct(CardRepository $cardRepository)
    {
        $this->cardRepository = $cardRepository ;
    }

    public function index()
    {
        return $this->cardRepository->all();
    }

    public function store(array $data)
    {
        return $this->cardRepository->store($data);
    }
}
