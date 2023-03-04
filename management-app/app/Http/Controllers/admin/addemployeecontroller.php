<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddEmployeeModel;

class addemployeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.addemployee');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation applied here
        $request->validate([
            "Name"=>'required',
            "mobile"=>'required',
            "post"=>'required',
            "Salary"=>'required',
            "details"=>'required'
            //database column name=> form name
        ]);

            //insert data in contact table
            date_default_timezone_set("Asia/calcutta");
            $data = array(
            "employee_name" => $request->Name,
            "mobile" => $request->mobile,
            "post" => $request->post,
            "salary" => $request->Salary,
            "details" => $request->details
            
            );

        // elequent query builder using ORM(object relational mapping model)
        AddEmployeeModel::create($data);
    // return view('admin.addemployee');
    return redirect('/admin-addemployee')->with('success', 'Employee added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = AddEmployeeModel::all();
        return view('admin.manageemployee',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //edit from tablename where id='id';
       $ed = AddEmployeeModel::where('id', $id)->first();
       return view('admin.admineditemployee',["ed"=>$ed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //Update data in categories table
     
        $ed = array(
            "employee_name" => $request->Name,
            "mobile" => $request->mobile,
            "post" => $request->post,
            "salary" => $request->Salary,
            "details" => $request->details
            );
   
            AddEmployeeModel::where('id', $id)->Update($ed);
            return redirect('/admin-manageemployee')->with('upd', 'Your Employee successfully Updated');   
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete from tablename where id='id';
        AddEmployeeModel::where('id', $id)->delete();
        return redirect('/admin-manageemployee')->with('del', 'Your Employee successfully deleted'); 
    }
}
