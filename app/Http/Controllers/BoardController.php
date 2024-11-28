<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // echo $id;
        // die();
        $board = DB::table('work_space')->where('id', $id)->first();
        // dd($board->toArray());
        return view('board.dashboard', compact('board'));
    }

    /**
     * Show the form for creating a new resource.
     */

    // public function create(Request $request)
    // {
    //     $userId = $request->userId;
    //     $workspaceId = $request->workspaceId;
    //     return view('board.dashboard', compact('userId', 'workspaceId'));
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo "fdfdf";
        // dd($request->toArray());
        $board = new Board();
        $board->user_id = $request->userId    ;
        $board->work_space_id = $request->workspaceId;
        $board->borad_name = $request->boardName;
        // $board->status = $request->status;
        if ($board->save()) {
            echo "ok";
        } else {
            echo "not ok";
        }

    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
