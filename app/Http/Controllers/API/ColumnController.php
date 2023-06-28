<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Column;

class ColumnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $columns = Column::all();
        return response()->json($columns);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $column = new Column;
        $column->name = $request->input('name');
        $column->order = $request->input('order');
        $column->board_id = $request->input('board_id');
        $column->save();
        return response()->json($column);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $column = Column::findOrFail($id);
        return response()->json($column);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $column = Column::findOrFail($id);
        $column->name = $request->input('name');
        $column->order = $request->input('order');
        $column->board_id = $request->input('board_id');
        $column->save();
        return response()->json($column);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $column = Column::findOrFail($id);
        $column->delete();
        return response()->json(null, 204);
    }

    public function getColumnsByBoard($boardId)
    {
        //
        $columns = Column::where('board_id', $boardId)->get();
        return response()->json($columns);
    }
}