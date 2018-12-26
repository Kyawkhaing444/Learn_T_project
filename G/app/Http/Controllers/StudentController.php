<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $student = Student::all();
       return view('AdminDashboard.student.index',compact('student'));
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
        $this->validate($request,[

            'name'=>'required',


          ]);

        $input = $request->all();
        if($file = $request->file('photoURL')){

            $name = $file->getClientOriginalName();
            $file->move('images',$name);
            $input['photoURL'] = $name;

         }

         student::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone_number' => $input['phone_number'],
            'student_no' => $input['student_no'],
            'specification' => $input['specification'],
            'address' => $input['address'],
            'photoURL' => $input['photoURL'],
            'password' => Hash::make($input['password']),
        ]);

        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $student = Student::find($student);
        return view('AdminDashboard.student.edit' , compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $input = $request->all();

        if($file = $request->file('photoURL')){

            $name = $file->getClientOriginalName();
            $file->move('images',$name);
            $input['photoURL'] = $name;

        }

        Student::whereId($student->id)->first()->update($input);

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($student)
    {
       $s = Student::findOrfail($student);
       $s->delete();

       return redirect('student');
    }
}
