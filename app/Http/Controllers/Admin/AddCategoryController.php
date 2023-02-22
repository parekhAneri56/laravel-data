<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddCategoryModel;
class AddCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('systemapp.admin.addcategory');
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
            "categoryname"=>"required",
            //database column name=> form name
        ]);

            //insert data in contact table
            date_default_timezone_set("Asia/calcutta");
            $data = array(
            "category_name" => $request->categoryname
            );

 // elequent query builder using ORM(object relational mapping model)
 AddCategoryModel::create($data);
 // return view('systemapp.admin.addcategory');
 return redirect('admin-login/admin-addcategory')->with('success', 'Category added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = AddCategoryModel::all();
        return view('systemapp.admin.managecategory',["data"=>$data]);
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
       $ed = AddCategoryModel::where('id', $id)->first();
        return view('systemapp.admin.admineditcategory',["ed"=>$ed]);
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
         //Update data in categories table
     
         $ed = array(
         "category_name" => $request->categoryname
         );

         AddCategoryModel::where('id', $id)->Update($ed);
         return redirect('admin-login/admin-managecategory')->with('upd', 'Your Category successfully Updated'); 
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
        AddCategoryModel::where('id', $id)->delete();
        return redirect('admin-login/admin-managecategory')->with('del', 'Your Category successfully deleted'); 
    }
}
