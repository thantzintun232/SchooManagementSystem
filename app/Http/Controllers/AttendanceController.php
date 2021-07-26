<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Student;
use App\Classroom;
use App\Academic;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances=Attendance::all();
        $academics=Academic::all();
        $classrooms=Classroom::all();
        return view('Backend.attendance.list',compact('attendances','academics','classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academics=Academic::all();
        $students=Student::all();
        $classrooms=Classroom::all();
        return view('Backend.attendance.new',compact('academics','students','classrooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validator=$request->validate([
        'academic'=>['required'],
        'classroom'=>['required'],
        'student'=>['required'],
        'date'=>['required'],
        'status'=>['required'],        
        
    ]);

       if($validator) {
        $academic=$request->academic;
        $classroom=$request->classroom;
        $student=$request->student;
        $date=$request->date;
        $status=$request->status;      

        $attendance= new attendance; 
        $attendance->academic_id=$academic;
        $attendance->classroom_id=$classroom;
        $attendance->student_id=$student;
        $attendance->date=$date;  
        $attendance->status=$status; 

        $attendance->save();

        return redirect()->route('backside.attendance.index')->with("successMsg","New Attendance is Added to your data");
    }
    else{
       return redirect::back()->withErrors($validator); 
   }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
