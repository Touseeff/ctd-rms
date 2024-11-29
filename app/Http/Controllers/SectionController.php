<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sections = Section::with(['department', 'users'])
            ->where('department_id', Auth::user()->department_id)
            ->get();


        // dd($sections->toArray());
        // return view('section.dashboard');
        return view('section.dashboard', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $url = 'section.store';
        $title = 'Add Section';
        return view('section.add_section', compact('url', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function viewSections(Request $request)
    {
        $sections = Section::with('department')->get();
        dd($sections->toArray());
    }
    public function store(Request $request)
    {

        $sections = new Section();
        $exist_section = Section::where('section_name', $request->section)->first();
        if (!$exist_section) {
            $sections->department_id = $request->departmentId;
            $sections->section_name = $request->section;
            $sections->section_lead_name = $request->sectionLeadName;
            $sections->status = $request->status;
            if ($sections->save()) {
                return redirect()->route('section.dashboard')->with('success', 'Record added successfully.');
            } else {
                return redirect()->route('section.create')->with('error', 'Record could not be stored. Please try again.');
            }
        } else {
            return redirect()->route('section.create')->with('error', 'This section already exists. Please try again.');
        }
    }


    /**
     * Display the specified resource.
     */


    public function show(string $id)
    {
        // echo $id;
        $section  = new Section();
        $section = Section::find($id);
        return view('section.show_section_details',compact('section'));
    }


    /**
     * Show the form for editing the specified resource.
     */


    public function edit(string $id)
    {
        $url = 'section.update';
        $title = "Edit Section";
        $section = Section::where('id',$id)->first();
        return view('section.add_section',compact('url','title','section'));
    }


    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request)
    {

        $section = Section::find($request->id);

        if ($section) {
            // Update the section attributes
            $section->section_name = $request->section;
            $section->section_lead_name = $request->sectionLeadName;
            $section->status = $request->status;

            // Save changes and handle response
            if ($section->save()) {
                return redirect()->route('section.dashboard')
                    ->with('success', 'Section updated successfully!');
            } else {
                return redirect()->route('section.dashboard')
                    ->with('error', 'Section could not be updated. Please try again.');
            }
        } else {
            return redirect()->route('section.dashboard')
                ->with('error', 'Section not found.');
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
