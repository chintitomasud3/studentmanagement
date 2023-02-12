<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showData=Teacher::paginate(5);

        return view("teachers.index",compact('showData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            "name"=>"required",
            "department"=>"required"
           ];
           $cm=[
            'name.required'=>'Enter Teacher Name',
            'department.required'=>'Enter your Department'
            
    
           ];
    
           $this->validate($request,$rules,$cm);
                  
           $teacher=new Teacher();
           $teacher->name=$request->name;
           $teacher->department=$request->department;
           
           $teacher->save();
           Session::flash('msg',"Data successfully Added");
             //return $request->all();
             return redirect("/teacher") ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($course=null)
    {
        $teacheredit=Teacher::find($course);
        return view("teachers.edit",compact('teacheredit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rules=[
            "name"=>"required",
            "department"=>"required"
           ];
           $cm=[
            'name.required'=>'Enter Teacher Name',
            'department.required'=>'Enter department',
            
    
           ];
    
           $this->validate($request,$rules,$cm);
          
           $teacher=Teacher::find($id);
           $teacher->name=$request->name;
           $teacher->department=$request->department;
           $teacher->save();
           Session::flash('msg',"Data successfully Added");
             //return $request->all();
             return redirect("/teacher") ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id=null)

    {
      $teacher=Teacher::find($id);
      $teacher->delete();
      Session::flash('msg',"Data successfully deleted");
            
            return redirect("/teacher");    
    }
}
