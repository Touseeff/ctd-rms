<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $departments = Department::orderBy('id', 'DESC')->get();

        return view('department.show_department', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $url = "department.add";
        $title = "Add Department";
        return view('department.add_department', compact('url', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existingDepartment = Department::where('department_name', $request->department)->first();

        if ($existingDepartment) {
            return redirect()->route('deprtment.create')
                ->with('error', 'This department already exists. Please add a new department.');
        }

        // Create and save the new department
        $department = new Department();
        $department->department_name = $request->department;
        $department->department_head_name = $request->department_head_name;
        $department->regulating_authority = $request->regulatory_authority_name;
        $department->status = $request->status;

        if ($department->save()) {
            return redirect()->route('department.view')
                ->with('success', 'Department added successfully!');
        } else {
            return redirect()->route('department.add')
                ->with('error', 'Department could not be added. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $department = new Department();
        $department = Department::where('id', $id)->first();
        if ($department) {
            return view('department.show_department_details', compact('department'));
        } else {
            return redirect()->route('')->with('error', 'Rcord not found');
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Request $request, $id)
    {

        $url = 'update.department';
        $title = "Edit Department";
        $department = Department::where('id',$id)->first();
        return view('department.add_department',compact('url','title','department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $department = Department::where('id',$request->id)->first();
        $department->department_name = $request->department;
        $department->department_head_name = $request->department_head_name;
        $department->regulating_authority = $request->regulatory_authority_name;
        $department->status = $request->status;

        if ($department->save()) {
            return redirect()->route('department.view')
                ->with('success', 'Department Update successfully!');
        } else {
            return redirect()->route('department.add')
                ->with('error', 'Department could not be update. Please try again.');
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
