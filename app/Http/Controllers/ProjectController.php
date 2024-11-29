<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('user')
            ->where('department_id', Auth::user()->department_id) // $departmentId is the ID you want to filter by
            ->orderBy('id', 'asc') // Order by 'id' in ascending order
            ->get();
        if ($projects) {
            return view('project.view_project', compact('projects'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add Project";
        $url = "add.project";
        return view('project.add_project', compact('title', 'url'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->user_id = $request->userId;
        $project->department_id = $request->departmentId;
        $project->section_id = $request->sectionId;
        $project->project_name = $request->projectTitle;
        $project->poject_description = $request->projectOwnerName;
        $project->status = $request->status;
        if ($project->save()) {
            return redirect()->route('view.project')
                ->with('success', 'project Update successfully!');
        } else {
            return redirect()->route('create.project')
                ->with('error', 'project could not be update. Please try again.');
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
    public function edit(Request $request, $id)
    {

        $url = 'update.project';
        $title = "Edit project";
        $project = project::where('id', $id)->first();
        return view('project.add_project', compact('url', 'title', 'project'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $project = Project::where('id',$request->id)->first();
        $project->user_id = $request->userId;
        $project->department_id = $request->departmentId;
        $project->section_id = $request->sectionId;
        $project->project_name = $request->projectTitle;
        $project->poject_description = $request->projectOwnerName;
        $project->status = $request->status;
        if ($project->save()) {
            return redirect()->route('view.project')
                ->with('success', 'project Update successfully!');
        } else {
            return redirect()->route('add.project')
                ->with('error', 'project could not be update. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
