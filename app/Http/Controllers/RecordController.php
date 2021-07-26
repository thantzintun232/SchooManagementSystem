<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Student;
use App\Classroom;
use App\Academic;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academics=Academic::all();
        $classrooms=Classroom::all();
        $records=Record::all();
        return view('Backend.record.list',compact('records','classrooms','academics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students=Student::all();
        $classrooms=Classroom::all();
        $academics=Academic::all();
        return view('Backend.record.new',compact('students','classrooms','academics'));
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
            'student'=>['required']
        
        
        ]);

        if($validator) {
            $student=$request->student;
            $academic=$request->academic;
            $classroom=$request->class;
            $status=$request->status;           
           


       
       $record= new Record; 
       $record->student_id=$student; 
       $record->academic_id=$academic; 
       $record->class_id=$classroom;
       $record->status=$status; 
       
       $record->save();

       return redirect()->route('backside.record.index')->with("successMsg","New record is Added to your data");
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
