<?php

namespace App\Http\Controllers;




// use Log;
use App\Models\File;
use App\Models\Task;
use App\Models\TaskFile;

use App\Models\TaskUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
         // Validate the form data
         // $request->validate([
         //     'task_title' => 'required|string|max:255',
         //     'task_description' => 'required|string',
         //     'start_date' => 'nullable|date',
         //     'end_date' => 'nullable|date',
         //     'file' => 'nullable|array',
         //     'file.*' => 'file|max:10240', // Max file size of 10MB for each file
         // ]);
     
         // Create a task
         $task = Task::create([
             // 'user_id' => auth()->id(), // Assuming user is logged in
             'work_space_id' => $request->workspace_id,
             'board_id' => $request->board_id,
             'project_id' => $request->project_id,
             'task_title' => $request->task_title,
             'task_description' => $request->task_description,
             'start_date' => $request->start_date,
             'end_date' => $request->end_date,
         ]);
     if($task){
        foreach ($request->users as $userId) {
            $taskUser = new TaskUser();
            $taskUser->task_id = $task->id;
            $taskUser->user_id = Auth::user()->id;
            $taskUser->save();
        }
     }
         // Process files and store them
         if ($request->hasFile('file')) {
             foreach ($request->file('file') as $file) {
                 // Store the file in the 'tasks' directory
                 $path = $file->store('tasks');

                 // Optionally, save file data in the database (TaskFile model)
                 TaskFile::create([
                     'task_id' => $task->id,
                     'file_path' => $path,
                 ]);
             }
         }
         return response()->json(['success' => true, 'message' => 'Task created successfully!']);
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
