<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showData=Course::paginate(5);
        //print_r($showData);
        return view('course.index',compact('showData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('course.create');
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
        "description"=>"required"
       ];
       $cm=[
        'Course.required'=>'Enter your Course',
        'description.required'=>'Enter your description',
        

       ];

       $this->validate($request,$rules,$cm);
              
       $student=new Course();
       $student->name=$request->name;
       $student->description=$request->description;
       
       $student->save();
       Session::flash('msg',"Data successfully Added");
         //return $request->all();
         return redirect("/course") ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($course=null)
    {
        $courseedit=Course::find($course);
        return view("course.edit",compact('courseedit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rules=[
            "name"=>"required",
            "description"=>"required"
           ];
           $cm=[
            'Course.required'=>'Enter your Course',
            'description.required'=>'Enter your description',
            
    
           ];
    
           $this->validate($request,$rules,$cm);
          
           $course=Course::find($id);
           $course->name=$request->name;
           $course->description=$request->description;
           
           $course->save();
           Session::flash('msg',"Data successfully Added");
             //return $request->all();
             return redirect("/course") ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id=null)
    {
        $course=Course::find($id);
        $course->delete();
        Session::flash('msg',"Data successfully deleted");
            return redirect("/course");
    }
}
