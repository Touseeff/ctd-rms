<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Section;
use App\Models\WorkSpace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkspaceController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function index($sectionId = null, $departmentId = null)
    {
        // dd($id);
        // $workspaces = DB::table('work_space')
        // ->join('users', 'work_space.user_id', '=', 'users.id')
        // ->where('work_space.section_id', $id)
        // ->get();
        // $workspaces = DB::table('work_space')
        // ->join('users', 'work_space.user_id', '=', 'users.id')
        // ->where('work_space.section_id', $id)
        // ->select(
        //     'work_space.id as workspace_id', 
        //     'work_space.department_id',    
        //     'work_space.section_id',    
        //     'work_space.work_space_name',   
        //     'work_space.status',    
        //     'users.id as user_id',           
        //     'users.first_name as first_name',      
        //     'users.last_name as last_name',       
        //     'users.email'                    
        // )
        // ->get();

        $workspaces = DB::table('work_space')->where('section_id', $sectionId)->get();
        // dd($workspces->toArray());


        // dd($workspaces->toArray());
        // dd($sections->toArray());
        return view('workspace.dashboard', compact('workspaces', 'sectionId', 'departmentId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($sectionId = null, $departmentId = null)
    {
        // dd($sId);
        $section_users = DB::table('users')
            ->where('department_id', $departmentId)
            ->orderBy('id', 'asc')
            ->get();


        // dd($section_users);
        $url = 'add.workspace';
        $title = 'Create Workspace';
        return view('workspace.add_workspace', compact('url', 'title', 'section_users', 'sectionId', 'departmentId'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        // dd($request->toArray());
        $workspace = new WorkSpace();
        $workspace->department_id = $request->departmentId;
        $workspace->section_id = $request->sectionId;
        $workspace->user_id = $request->userSelect;
        $workspace->work_space_name = $request->workspaceTitle;
        $workspace->status = $request->status;

        if ($workspace->save()) {
            return redirect()->route('workspace.dashboard', [
                'sectionId' => $workspace->section_id,
                'departmentId' => $workspace->department_id
            ])->with('success', 'Workspace created successfully!');
        } else {
            echo "not be success";
            // return redirect()->route('workspace.create')
            //     ->with('error', 'workspace not be created.');
        }
    }

    // echo "workspace";


    // public function getUser($sectionId)
    // {
    //     // Fetch users for the given section_id using DB query
    //     $sectionUsers = DB::table('users')
    //         ->where('section_id', $sectionId)
    //         ->get();
    //     // dd($sectionUsers->toArray());
    //     // Check if users are found
    //     if ($sectionUsers->isEmpty()) {
    //         return response()->json(['message' => 'No users found for the given section.'], 404);
    //     }

    //     // Return users as a JSON response
    //     return response()->json($sectionUsers);
    // }


    // public function getSection($departmentId)
    // {
    //     // Fetch users for the given section_id using DB query
    //     $departmentUsers = DB::table('users')
    //         ->where('section_id', $departmentId)
    //         ->get();
    //     // dd($sectionUsers->toArray());
    //     // Check if users are found
    //     if ($departmentUsers->isEmpty()) {
    //         return response()->json(['message' => 'No users found for the given section.'], 404);
    //     }

    //     // Return users as a JSON response
    //     return response()->json($departmentUsers);
    // }





    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $workspace = new WorkSpace();
        $workspace = WorkSpace::find($id);
        // dd($workspace->toArray());
        return view('workspace.show_workspace_details', compact('workspace'));


    }

    public function userWorkSpace($sec_id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        $url = 'update.workspace';
        $title = "Edit Workspace";
        // $workspace = WorkSpace::where('id',$id)->first();
        $workspace = WorkSpace::with('user')->where('id', $id)->first();
        // dd($workspace->toArray());
        return view('workspace.add_workspace', compact('url', 'title', 'workspace'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Find the workspace by ID
        $workspace = WorkSpace::find($request->id);
    
        if ($workspace) {
            // Update workspace properties
            $workspace->section_id = $request->sectionId;
            $workspace->department_id = $request->departmentId;
            $workspace->user_id = $request->userSelect;
            $workspace->work_space_name = $request->workspaceTitle;
            $workspace->status = $request->status;
    
            // Save the workspace and check if successful
            if ($workspace->save()) {
                return redirect()->route('workspace.dashboard', [
                    'sectionId' => $workspace->section_id,
                    'departmentId' => $workspace->department_id
                ])->with('success', 'Workspace updated successfully!');
            } else {
                return redirect()->back()->with('error', 'Workspace could not be updated.');
            }
        } else {
            return redirect()->back()->with('error', 'Workspace not found.');
        }
    }
    
    /**
     * Remove the specified resource fro    m storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
