<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddproductModel;

class AddproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('systemapp.admin.addproduct');
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
        //validation applied here
        $request->validate([
            "Productname"=>"required",
            //database column name=> form name
        ]);

            //insert data in subcategories table
            date_default_timezone_set("Asia/calcutta");
            $data = array(
            "product_name" => $request->Productname
            );

     // elequent query builder using ORM(object relational mapping model)
        AddproductModel::create($data);
    // return view('systemapp.admin.addproduct');
        return redirect('admin-login/admin-addproduct')->with('success', 'Product added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = AddproductModel::all();
        return view('systemapp.admin.manageproduct',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //edit from tablename where id='id';
       $ed = AddproductModel::where('id', $id)->first();
       return view('systemapp.admin.admineditproduct',["ed"=>$ed]);
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
          //Update data in addproduct table
     
          $ed = array(
            "product_name" => $request->Productname
            );
   
            AddproductModel::where('id', $id)->Update($ed);
            return redirect('admin-login/admin-manageproduct')->with('upd', 'Your product successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          //delete from tablename where id='id';
          AddproductModel::where('id', $id)->delete();
          return redirect('admin-login/admin-manageproduct')->with('del', 'Your Product successfully deleted');
    }
}
