<?php

namespace App\Repositories;

use App\Models\Column;

class ColumnRepository
{
    protected $column;

    public function __construct(Column $column)
    {
        $this->column = $column;
    }

    public function all()
    {
        return $this->column->with('cards')->get();
    }

    public function store($title)
    {
        $this->column->title = $title;
        return $this->column->save();
    }
}
