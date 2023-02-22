<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\RegisterModel;
use Illuminate\Support\Facades\mail;
use App\Mail\registermail;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('systemapp.register');
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
        //validation applied
        $request->validate([
            "customer_name"=>"required",
            "email"=>"required | email",
            "mobile"=>"required | min:10 | max:10",
            "pass"=>"required",
            "cpass"=>"required",
            "DOB"=>"required | date",
            "address"=>"required"
        ]);
        
        //insert data in customer table
        date_default_timezone_set("Asia/calcutta");
        $data = array(
            "customers_name" => $request->customer_name,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "password" => $request->pass,
            "DOB" => $request->DOB,
            "address" => $request->address
        );

        //elequent query builder using ORM(object relational mapping model)
        RegisterModel::create($data);
        //sending email from mail packages from package name
        Mail::to('parekhaneri56@gmail.com')->send(new registermail($data));
        return redirect('register-us')->with('success','Thanks for register with us!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = RegisterModel::all();
        return view('systemapp.admin.manageCustomers', ["data" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete from tablename where id='id'
        RegisterModel::where('id', $id)->delete();
        return redirect('admin-login/manageCustomers')->with('del','Your Registered Account Successfully Deleted');
    }
}
