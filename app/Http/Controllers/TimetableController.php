<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Subject;
use App\Classroom;
use App\Teacher;
use App\Timetable;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $timetables=Timetable::all();
        $classrooms=Classroom::all();
        $academics=Academic::all();
        return view('Backend.timetable.list',compact('timetables','academics','classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academics=Academic::all();
        $subjects=Subject::all();
        $classrooms=Classroom::all();
        $teachers=Teacher::all();
        return view('Backend.timetable.new',compact('academics','subjects','classrooms','teachers'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $day=$request->day;
         $start=$request->start;
         $end=$request->end;
         $academic=$request->academic;
         $subject=$request->subject;
         $teacher=$request->teacher;
         $class=$request->class;
           
           
        


       $timetable= new Timetable; 
       $timetable->academic_id=$academic; 
       $timetable->subject_id=$subject; 
       $timetable->classroom_id=$class; 
       $timetable->teacher_id=$teacher; 
       $timetable->day=$day; 
       $timetable->starttime=$start; 
       $timetable->endtime=$end; 
       
       $timetable->save();

       return redirect()->route('backside.timetable.index')->with("successMsg","New timetable is Added to your data");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

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
