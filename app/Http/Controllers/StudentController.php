<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
use Excel;
use App\Exports\StudentExport;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::all();
        return view('student.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $student = Student::find($id);
        // return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = student::find($id);
        return view('student.edit',compact('student'));
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
        $student->update($request->all());
  
        return redirect()->route('student.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['status' => 'success', 'message' =>'Dan hari bang']);
    }


    public function pagetable(){
       
        $ajaxdata = Student::all();
       
        return Datatables::of($ajaxdata)
        ->addColumn('action', function ($ajaxdata) {
            $buttons ='<a  class="fas fa-eye btn btn-sm btn-primary btn-rounded m-b-1 m-l-5" href="'.url('/Student/'.$ajaxdata->id.'/show').'"></a> 
            <a class="far fa-edit btn btn-sm btn-success btn-rounded m-b-1 m-l-5" href="'.url('/student/'.$ajaxdata->id.'/edit').'">Edit</a>
            <input type="hidden" id="hiddenID" value="'.$ajaxdata->id.'">
           
            <button data-token="'. csrf_token() .'" class="far fa-trash-alt btn btn-sm btn-danger btn-rounded m-b-1 m-l-5" id="delete">Delete</button>';

           
            return $buttons;
        })

        ->make(true);

    }

    public function new3()
    {
        return view('abcd.medicine');
    }

  

    public function export()
    {
        return Excel::download(new StudentExport,'studentlist.xlsx');
    }

    





}


