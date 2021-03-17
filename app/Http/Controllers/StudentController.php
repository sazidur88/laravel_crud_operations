<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Student::all();
        //$students = DB::table('students')->get();
        return view('index',['students'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $this -> validate($request, [
            'name' => 'required',
            'cell' => 'required',
            'email' => 'required',
        ]);

        $student = new Student();
        $student->name=request('name');
        $student->cell=request('cell') ;
        $student->email=request('email') ;
        $student->save();
        return back()->with('success', 'Student created successfully');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single = Student::find($id);
        
        return view('show', [
            'single' => $single
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_student = Student::find($id);

        return view('student-edit', compact('edit_student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit_student = Student::find($id);

        $edit_student -> name = $request -> name; 
        $edit_student -> cell = $request -> cell; 
        $edit_student -> email = $request -> email; 

        $edit_student -> save();

        return redirect() -> back() -> with('success','Student data Update successfull !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_student = Student::find($id);
        $delete_student -> delete();
        //return redirect() -> back() -> with('success','Student data deleted !');
        return redirect() ->route('index');
    }
}
