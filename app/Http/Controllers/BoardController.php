<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //     public function index($id)
//     {
// //         $boards = Board::with('tasks')->where('work_space_id', $id)->get();
// // dd($boards->toArray());

    //         // $boards = Bo\DB::enableQueryLog();
//         $boards = Board::with('tasks')->where('work_space_id', $id)->get();
// // dd($boards->toArray());
// dd(DB::getQueryLog());



    //     }


    public function index($id)
    {
        // // $boards = Board::with('tasks')->where('work_space_id', $id)->get();
        // // dd($boards->toArray());


        // // Fetch workspaces with related boards, projects, and tasks
        // // Fetch the workspace with the first board and its tasks
        // $workspace = Workspace::with([
        //     'boards' => function ($query) {
        //         $query->orderBy('created_at', 'asc')->limit(1);  // First board
        //     },
        //     'boards.tasks' => function ($query) {
        //         $query->orderBy('start_date', 'asc');  // Fetch tasks for the first board
        //     }
        // ])
        //     ->where('id', $id)
        //     ->first();
// dd($id);


        // Fetch the board with its related tasks and projects (no workspace data)
        $boards = Board::with([
            'projects',        // Fetch tasks related to the board
            'tasks'      // Fetch projects related to the board
        ])
            ->where('work_space_id', $id)  // Filter by workspace id
            ->get();
        return view('board.dashboard', compact('id', 'boards'));
        // dd($boards->toArray()); // View the results
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
        $board->user_id = $request->userId;
        $board->work_space_id = $request->workspaceId;
        $board->borad_name = $request->boardName;
        // $board->status = $request->status;
        if ($board->save()) {
            return view('board.dashboard')
                ->with('success', 'Board Create successfully!');
        } else {
            return view('board.dashboard')
                ->with('error', 'Board no be Created.');
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
