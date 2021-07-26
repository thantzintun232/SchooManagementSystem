<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\User;

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
        $users=User::all();  

        return view('Backend.teacher.list',compact('teachers','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.teacher.new');
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
            'email'=>['required','string','max:255','min:3','unique:users']

        ]);

        if($validator) {
           $name=$request->name;
           $phone=$request->phone;
           $email=$request->email;
           $password=$request->password;
           $address=$request->address;
           $age=$request->age;


       // insert date_add()
           $user= new User; 
           $user->name=$name; 
           $user->email=$email;
           $user->password=$password;
           $user->save();
           $uid=$user->id;

           $teacher=new Teacher;
           $teacher->user_id=$uid;  
           $teacher->address=$address; 
           $teacher->phone=$phone;
           $teacher->age=$age;  


           $teacher->save();




           return redirect()->route('backside.teacher.index')->with("successMsg","New Teacher is Added to your data");
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
