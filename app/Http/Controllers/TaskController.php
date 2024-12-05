<?php

namespace App\Http\Controllers;


use App\Models\File;
use app\Http\Models\Task;
// use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use app\Http\Models\TaskFile;
use app\Http\Models\TaskUser;
use Illuminate\Support\Facades\DB;



class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
//     public function upload(Request $request)
//     {
//         // $validated = $request->validate([
//         //     'files.*' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Adjust file types and size as needed
//         // ]);

//         $paths = [];

//         if ($request->hasFile('files')) {
//             foreach ($request->file('files') as $file) {
//                 $paths[] = $file->store('/public/storage/uploads/pro', 'public');
//             }
//         }
// // dd($paths);
//         return response()->json(['paths' => $paths]);
//     }

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
        // Validate the request
        // $validated = $request->validate([
        //     'projectName' => 'required',
        //     'task_description' => 'required',
        //     'start_date' => 'required|date',
        //     'end_date' => 'required|date',
        //     'users' => 'required|array',
        //     'file.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        // ]);
    
        // Store the task using an object
        // $task = new Task();
        // $task->work_space_id = $request->input('workspace_id'); // Add workspace ID if necessary
        // $task->board_id = $request->input('board_id'); // Add board ID if necessary
        // $task->project_id = $request['projectName'];
        // $task->card_title = $request->input('task_title');
        // $task->descriptions = $request['task_description'];
        // $task->process_status = $request->input('process_status');
        // $task->status = $request->input('status');
        // $task->start_date = $request['start_date'];
        // $task->end_date = $request['end_date'];
        // $task->save();
    
        // Assign users to the task
        // foreach ($request['users'] as $userId) {
        //     $taskUser = new TaskUser();
        //     $taskUser->task_id = $task->id;
        //     $taskUser->user_id = $userId;
        //     $taskUser->save();
        // }
    
        // Handle file uploads
        if ($request->hasFile('file') && is_array($request->file('file'))) {
            foreach ($request->file('file') as $file) {
                if ($file->isValid()) {
                    // Store the file and save its details
                    $filePath = $file->store('uploads', 'public');
    
                    // Create file record
                    $fileRecord = new File();
                    $fileRecord->file_name = $file->getClientOriginalName();
                    $fileRecord->file_size = $file->getSize();
                    $fileRecord->file_path = $filePath;
                    $fileRecord->save();
    
                    // Attach the file to the task
                    // $taskFile = new TaskFile();
                    // $taskFile->task_id = $task->id;
                    // $taskFile->file_id = $fileRecord->id;
                    // $taskFile->save();
                }
            }
        }
    
        // Return a response or redirect to another page
        // return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
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
