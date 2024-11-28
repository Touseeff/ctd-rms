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

    public function index($id)
    {
        // dd($id);
        // $workspaces = DB::table('work_space')
        // ->join('users', 'work_space.user_id', '=', 'users.id')
        // ->where('work_space.section_id', $id)
        // ->get();
        $workspaces = DB::table('work_space')
        ->join('users', 'work_space.user_id', '=', 'users.id')
        ->where('work_space.section_id', $id)
        ->select(
            'work_space.id as workspace_id', 
            'work_space.department_id',    
            'work_space.section_id',    
            'work_space.work_space_name',   
            'work_space.status',    
            'users.id as user_id',           
            'users.first_name as first_name',      
            'users.last_name as last_name',       
            'users.email'                    
        )
        ->get();
    

        // dd($workspaces->toArray());
        // dd($sections->toArray());
        return view('workspace.dashboard', compact('workspaces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $url = 'add.workspace';
        $title = 'Create Workspace';
        return view('workspace.add_workspace', compact('url', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        // dd($request->toArray());
        $workspace = new WorkSpace();
        $workspace->department_id = $request->department_id;
        $workspace->section_id = $request->section_id;
        $workspace->user_id = $request->userSelect;
        $workspace->work_space_name = $request->workspaceTitle;
        $workspace->status = $request->status;
        if ($workspace->save()) {
            echo "successs";
        } else {
            echo "not store";
        }

        // echo "workspace";
    }

    public function getUsers($sectionId)
    {
        // Fetch users for the given section_id using DB query
        $sectionUsers = DB::table('users')
            ->where('section_id', $sectionId)
            ->get();
        // dd($sectionUsers->toArray());
        // Check if users are found
        if ($sectionUsers->isEmpty()) {
            return response()->json(['message' => 'No users found for the given section.'], 404);
        }
        // Return users as a JSON response
        return response()->json($sectionUsers);
    }
    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        //
    }
    public function userWorkSpace($sec_id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "ws id";
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
