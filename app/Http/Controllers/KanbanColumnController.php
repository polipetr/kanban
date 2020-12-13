<?php

namespace App\Http\Controllers;

use App\Services\ColumnService;
use App\Http\Resources\Column;
use App\Http\Requests\ColumnCreateRequest;
use Illuminate\Http\Request;

class KanbanColumnController extends Controller
{
    protected $columnService;

    public function __construct(ColumnService $columnService)
    {
        $this->columnService = $columnService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new Column($this->columnService->index());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('column.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColumnCreateRequest $columnCreateRequest)
    {
       $this->columnService->store($columnCreateRequest->get('title'));
       return redirect()->route('home');
    }
}
