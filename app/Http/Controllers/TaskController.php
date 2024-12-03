<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Project";
        $url = "add.tasks";
        return view('task.add_task', compact('title', 'url'));

    }
    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        dd($request->toArray());
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


  // TaskController.php

public function searchProjects(Request $request)
{

    $query = $request->get('q');
    $projects = DB::table('projects')
        ->where('project_name', 'LIKE', "%{$query}%")
        ->get(['id', 'project_name']);

    // Return the search results as JSON
    return response()->json($projects);
}



    /**
     * Remove the specified resource from storage.
     */


    public function assignTask(Request $request)
    {
        // dd('fdfd');
        // $task = Task::find($request->task_id);
        // // Assuming a many-to-many relationship exists between Task and User
        // $task->users()->sync($request->users);
        // return response()->json(['message' => 'Task successfully assigned to users!']);
    }
    public function destroy(string $id)
    {
        //
    }
}
