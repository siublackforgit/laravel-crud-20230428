<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student=Student::all();
        return view ('student.index')->with('student',$student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Student::create($input);
        $student=Student::all();
        return redirect('/student')->with('student',$student);
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
        $student=Student::find($id);
        return view ('student.edit')->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request=$request->all();
        $student=Student::find($id);
        $student->update($request);
        $student=Student::all();
        return view('student.index')->with('student',$student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Student::destroy($id);
        $student=Student::all();
        return redirect('student')->with('student',$student);
    }
}
