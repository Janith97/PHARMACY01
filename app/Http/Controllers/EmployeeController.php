<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
use Excel;
use App\imports\EmployeeImport;

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
        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
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
    public function show($id)
    {
        $employee = employee::find($id);
        return view('employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = employee::find($id);
        return view('employee.edit',compact('employee'));
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
            'firstname' => 'required',
            'lastname'  => 'required',
            'age'       => 'required',
            'address'   => 'required',  
            
        ]);
  
        $employee->update($request->all());
  
        return redirect()->route('employee.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employee  $employee
     * @return \Illuminate\Http\Response
     */

    public function destroy(employee $employee)
    {   
        
        //$employee->delete();
        $learnAjax = employee::where('id',$learnAjax->id)->delete();

    }

    function remove(Request $request)
    {

        $learnAjax = employee::where('id',$request->id)->delete();
        return response()->json(['status' => 'success', 'message' =>'Fucked']);
      
    }


    public function indexpagetable(){

        $ajaxdata = employee::all();
       
        return Datatables::of($ajaxdata)
        ->addColumn('action', function ($ajaxdata) {
            $buttons ='<a  class="fas fa-eye btn btn-sm btn-primary btn-rounded m-b-1 m-l-5" href="'.url('/employee/'.$ajaxdata->id.'/').'"></a> 
            <a class="far fa-edit btn btn-sm btn-success btn-rounded m-b-1 m-l-5" href="'.url('/employee/'.$ajaxdata->id.'/edit').'"></a>
            <input type="hidden" id="hiddenID" value="'.$ajaxdata->id.'">
           
            <button data-token="'. csrf_token() .'" class="far fa-trash-alt btn btn-sm btn-danger btn-rounded m-b-1 m-l-5" id="delete"></button>';

           
            return $buttons;
        })

        ->make(true);

    }
    public function showimportpage(){
        return view('export.import');
    }
    public function import(Request $request){
        $file = $request->file('file')->store('import');
        Excel::import(new EmployeeImport,$file);
        return redirect()->route('employee.index')->with('Success','Excel file imported successfully');
    }
}

