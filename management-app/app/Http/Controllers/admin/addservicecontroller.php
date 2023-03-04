<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addservicemodel;


class addservicecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.addservice');
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
            "title"=>'required',
            "description"=>'required'
            //database column name=> form name
        ]);

            //insert data in contact table
            date_default_timezone_set("Asia/calcutta");
            $data = array(
            "title" => $request->title,
            "description" => $request->description
        
            );

        // elequent query builder using ORM(object relational mapping model)
        addservicemodel::create($data);
    // return view('admin.addservice');
    return redirect('/admin-addservice')->with('success', 'Service added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = addservicemodel::all();
        return view('admin.manageservice',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //edit from tablename where id='id';
       $ed = addservicemodel::where('id', $id)->first();
       return view('admin.admineditservice',["ed"=>$ed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         //Update data in table
     
         $ed = array(
            "title" => $request->title,
            "description" => $request->description
        );
   
            addservicemodel::where('id', $id)->Update($ed);
            return redirect('/admin-manageservice')->with('upd', 'Your Service successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete from tablename where id='id';
        addservicemodel::where('id', $id)->delete();
        return redirect('/admin-manageservice')->with('del', 'Your Service successfully deleted'); 
    }
}
