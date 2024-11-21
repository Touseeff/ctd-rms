<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkspaceController extends Controller
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
        $url = 'add.workspace';
        $title = 'Create Workspace';
        return view('head_dashboard.add_workspace',compact('url','title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "fdf";
    }
    public function getUsers($sectionId)
    {
        // Fetch users for the given section_id using DB query
        $sectionUsers = DB::table('users')
            ->where('section_id', $sectionId)
            ->get();
    
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
