<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Classroom;
use App\Grade;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::all();

        return view('Backend.classroom.list',compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $grades = Grade::all();
        return view('Backend.classroom.new',compact('grades'));
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
            'name'=>['required']       
        ]);

          if($validator) {
            $name=$request->name;
            $grade=$request->grade;     
            
            $classroom= new Classroom; 
            $classroom->name=$name; 
            $classroom->grade_id=$grade;

            $classroom->save();

            return redirect()->route('backside.classroom.index')->with("successMsg","New Classroom is Added to your data");
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
