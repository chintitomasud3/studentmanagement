<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$showData=Student::all();
        $showData=Student::paginate(3);


        //return response()->json($showData);
        //print_r($showData);
        return view("students.student1",compact("showData"));
    }


    public function addData(){
 
         return view("students.adddata");
    }

    public function storeData(Request $request){
       $rules=[
           'FirstName'=>'required',
           'LastName'=>'required',
            'Gender'=>'required',
            'email'=>'required'

       ];

       $cm=[
        'FirstName.required'=>'Enter your First name',
        'LastName.required'=>'Enter your Last name',
        'Gender.required'=>'Enter your Gender',
        'email.required'=>'Enter your email'

       ];

       $this->validate($request,$rules,$cm);
              
       $student=new Student();
       $student->FirstName=$request->FirstName;
       $student->LastName=$request->LastName;
       $student->Gender=$request->Gender;
       $student->email=$request->email;
       $student->save();
       Session::flash('msg',"Data successfully Added");
         //return $request->all();
         return redirect("/student")
         ;
    }

     public function editData($id=null){

        $studentedit=Student::find($id);
        return view("students.edit-data",compact("studentedit"));

     }


     public function updateData(Request $request,$id){
        $rules=[
            'FirstName'=>'required',
            'LastName'=>'required',
             'Gender'=>'required',
            'email' => 'required'
 
        ];
 
        $cm=[
         'FirstName.required'=>'Enter your First name',
         'LastName.required'=>'Enter your Last name',
         'Gender.required'=>'Enter your Gender',
          'email.required' => 'Enter your email'
 
        ];
 
        $this->validate($request,$rules,$cm);
               
        // $student=new Student();
        $student=Student::find($id);
        $student->FirstName=$request->FirstName;
        $student->LastName=$request->LastName;
        $student->Gender=$request->Gender;
        $student->email = $request->email;
        $student->save();
        Session::flash('msg',"Data successfully Updated");
          //return $request->all();
          return redirect("/student")
          ;
     }
        public function deleteData($id=null){
            $student=Student::find($id);
            $student->delete();
            Session::flash('msg',"Data successfully deleted");
            return redirect("/student");

        }






























    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
