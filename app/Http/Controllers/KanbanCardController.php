<?php

namespace App\Http\Controllers;

use App\Models\Column;
use App\Models\Card;
use App\Services\CardService;
use Illuminate\Http\Request;

class KanbanCardController extends Controller
{
    protected $cardService;

    public function __construct(CardService $cardService)
    {
        $this->cardService = $cardService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create', ['cards' => $this->cardService->index()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->cardService->store($request->all());
        return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Column  $column
     * @param  Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Column $column, Card $card)
    {
        $data = $request->all();
        $data['column_id'] = $column->id;
        $card->update($data);
        return response()->json(['success' => 'success'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Column  $column
     * @param  Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Column $column, Card $card)
    {
        $card->delete();
        return response()->json(['success' => 'success'], 200);
    }
}
