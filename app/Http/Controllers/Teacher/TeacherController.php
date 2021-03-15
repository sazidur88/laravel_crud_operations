<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=Teacher::all();
        return view('teacher.teachers', ['teachers' => $teachers]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.teacher-register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher=new Teacher();
        $teacher->teacher_name=request("teacher_name");
        $teacher->teacher_dept=request("teacher_dept");
        $teacher->cell=request("cell");
        $teacher->email=request("email");
        $teacher->save();

        return back()->with('message', 'Teacher registration successfull');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $does_not_matter=Teacher::find($id);
        return view('teacher.teacher-show',[
            'ekla_teacher' =>$does_not_matter
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
        $kon_teacher = Teacher::find($id);
        
        return view('teacher.edit', [
            'edit_teacher' => $kon_teacher
        ]);

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
        //return $request-> all();
        $edit_teacher  = Teacher::find($id);

        //$teacher_update=new Teacher();
        $edit_teacher -> teacher_name = $request -> teacher_name;
        $edit_teacher -> teacher_dept = $request -> teacher_dept;
        $edit_teacher -> cell = $request -> cell;
        $edit_teacher -> email = $request -> email;

        //echo $id;
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
        $delete_teacher = Teacher::find($id); 
        $delete_teacher -> delete();
        return redirect()->route('teachers');
    }
}
