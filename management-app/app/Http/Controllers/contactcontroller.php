<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contactmodel;
use Illuminate\support\Facades\mail;
use App\Mail\sendmail;

class contactcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('creative-agency.contact');
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
        //validation apply here
        $request -> validate ([

            "name"=>"required",
            "email"=>"required | email",
            "subject"=>"required",
            "message"=>"required"
        ]);

        //insert data into contact table
        date_default_timezone_set("Asia/calcutta");
        $data = array(
            "name"=>$request->name,
            "email"=>$request->email,
            "subject"=>$request->subject,
            "message"=>$request->message
        );

          // elequent query builder using ORM(object relational mapping model)
            contactmodel::create($data);
              //sending email from mail packages from package name
                Mail::to('parekhaneri56@gmail.com')->send(new sendmail($data));
                 // return view('creative-agency.contact');
                 return redirect('contact-us')->with('success','Thanks for contact with us we will successfully recived Your information on Our email');
      
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = contactmodel::all();
        return view('admin.managecontact',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //delete from tablename where id='id';
        contactmodel::where('id', $id)->delete();
        return redirect('admin-managecontact')->with('del', 'Your contact successfully deleted');
    }
}
