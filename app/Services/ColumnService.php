<?php

namespace App\Services;

use App\Repositories\ColumnRepository;

class ColumnService
{
    protected $column;

    public function __construct(ColumnRepository $column)
    {
        $this->column = $column ;
    }

    public function index()
    {
        return $this->column->all();
    }

    public function store($title)
    {
        return $this->column->store($title);
    }
}
