<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::orderBy('student_id','desc')->get();

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $students = new Student();
            $students->name = $request->name;
            $students->date_of_birth = $request->date_of_birth;
            $students->yearEnrolled = $request->yearEnrolled;
            $students->save();

        return redirect('students')->with('success','Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::where('student_id', $id)->get();

        return view('students.detail', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students = Student::where('student_id', $id)->get();

        return view('students.update', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::where('student_id', $id)->update([
            'name' => $request ->name,
            'date_of_birth' => $request ->date_of_birth,
            'yearEnrolled' => $request-> yearEnrolled,
        ]);

        return redirect('students')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::where('student_id',$id)->delete();

        return redirect()->route('students.index')->with('success','Company has been deleted successfully: '.$id);
    }
}

