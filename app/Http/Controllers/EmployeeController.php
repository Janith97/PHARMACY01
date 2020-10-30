<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = employee::all();
        return view('index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'firstname' => 'required',
            'lastname' => 'required',

        ],
        [
            'firstname.required' => 'First name is required',
            'lastname.required' => 'Last name is required',
        ]

    );
    
    if ($validator->fails()) {
        return redirect('employee.create')
                    ->withErrors($validator)
                    ->withInput();
    }
  
        employee::create($request->all());
   
        return redirect()->route('employee.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        return view('show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        $employee->update($request->all());
  
        return redirect()->route('index')
                        ->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
  
        return redirect()->route('employee.index')
                        ->with('success',' deleted successfully');
    }


    public function indexpagetable(){

        $ajaxdata = LearnAjax::all();

        return Datatables::of($ajaxdata)
        ->make(true);


}
}

