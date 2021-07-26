<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects=Subject::all();
        return view('Backend.subject.list',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

     {
        $grades=Grade::all();
        return view('Backend.subject.new',compact('grades'));
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
            'name'=>['required'],
        
        
        ]);

        if($validator) {
            $name=$request->name;
            $grade=$request->grade;
           
           


       
       $subject= new Subject; 
       $subject->name=$name; 
       $subject->grade_id=$grade; 
       
       $subject->save();

       return redirect()->route('backside.subject.index')->with("successMsg","New Subject is Added to your data");
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
