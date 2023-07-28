<?php

namespace App\Http\Controllers\API;

use App\Models\Board;
use App\Models\Column;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        if ($user) {
            if ($user->hasRole('admin')){
                return Board::with('team')->get();
            }

            $boards = $user->teams->flatMap(function ($team) {
                return $team->boards;
            });

            return response()->json($boards);
        }
        /* $boards = Board::with('team')->get(); */
        return false;
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
        $board = new Board;
        $board->name = $request->input('name');
        $board->description = $request->input('description');
        $board->save();

        $column = new Column;
        $column->name = 'Backlog';
        $column->order = 10;
        $column->board_id = $board->id;
        $column->save();

        $column = new Column;
        $column->name = 'Doing';
        $column->order = 20;
        $column->board_id = $board->id;
        $column->save();

        $column = new Column;
        $column->name = 'Done';
        $column->order = 30;
        $column->board_id = $board->id;
        $column->save();

        return response()->json($board);
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
        $board = Board::findOrFail($id);
        return response()->json($board);
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
        $board = Board::findOrFail($id);
        $board->name = $request->input('name');
        $board->team_id = $request->input('team_id');
        $board->description = $request->input('description');
        $board->save();
        return response()->json($board);
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
        $board = Board::findOrFail($id);
        $board->delete();
        return response()->json(null, 204);
    }
}