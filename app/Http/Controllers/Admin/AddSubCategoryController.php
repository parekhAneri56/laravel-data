<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddSubcategoryModel;

class AddSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('systemapp.admin.addSubcategory');
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
            "Subcategoryname"=>"required",
            //database column name=> form name
        ]);

            //insert data in subcategories table
            date_default_timezone_set("Asia/calcutta");
            $data = array(
            "Subcategory_name" => $request->Subcategoryname
            );

     // elequent query builder using ORM(object relational mapping model)
        AddSubcategoryModel::create($data);
    // return view('systemapp.admin.addSubcategory');
        return redirect('admin-login/admin-addSubcategory')->with('success', 'SubCategory added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = AddSubcategoryModel::all();
        return view('systemapp.admin.managesubcategory',["data"=>$data]);
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
       $ed = AddSubcategoryModel::where('id', $id)->first();
       return view('systemapp.admin.admineditsubcategory',["ed"=>$ed]);
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
         //Update data in subcategories table
     
         $ed = array(
            "Subcategory_name" => $request->Subcategoryname
            );
   
            AddSubcategoryModel::where('id', $id)->Update($ed);
            return redirect('admin-login/admin-managesubcategory')->with('upd', 'Your SubCategory successfully Updated'); 
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
           AddSubcategoryModel::where('id', $id)->delete();
           return redirect('admin-login/admin-managesubcategory')->with('del', 'Your SubCategory successfully deleted'); 
    }
}
