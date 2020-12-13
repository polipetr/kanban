<?php

namespace App\Repositories;

use App\Models\Card;

class CardRepository
{
    protected $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }

    public function all()
    {
        return $this->card->all();
    }

    public function store(array $data)
    {
        $this->card::create($data);
    }
}
