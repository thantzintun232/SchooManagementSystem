<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Academic;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academics=Academic::all();    
        return view('Backend.academic.list',compact('academics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.academic.new');
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
        'year'=>['required'],
        'start'=>['required'],
        'end'=>['required']
        
         ]);

      if($validator) {
        $year=$request->year;
        $start=$request->start;
        $end=$request->end;

        $academic= new Academic; 
        $academic->year=$year; 
        $academic->startdate=$start; 
        $academic->enddate=$end; 

        $academic->save();

        return redirect()->route('backside.academic.index')->with("successMsg","New Academic Year is Added to your data");
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
