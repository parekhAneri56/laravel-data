<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contactmodel;
use Illuminate\support\Facades\mail;
use App\Mail\sendmail;

// Mail facades is used to import all services of Mail packages and send data information user email
  
class contactcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('systemapp.contact');
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

            "name" => "required",
            "email" => "required|email",
            "phone" => "required|min:10|max:10",
            "subject" => "required",
            "message" => "required"

        ]);

        //insert data in contact table
        date_default_timezone_set("Asia/calcutta");
        $data = array(
            "name" => $request->name,
            "email" => $request->email,
            "mobile" => $request->phone,
            "subject" => $request->subject,
            "message" => $request->message
        );

        // elequent query builder using ORM(object relational mapping model)
        contactmodel::create($data);
        //sending email from mail packages from package name
        Mail::to('parekhaneri56@gmail.com')->send(new sendmail($data));
       // return view('systemapp.contact');
        return redirect('contact-us')->with('success', 'Thanks for contact with us we will successfully Recived Your information on Our email');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = contactmodel::all();
        return view('systemapp.admin.managecontacts',["data"=>$data]);
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
       //delete from tablename where id='id';
        contactmodel::where('id', $id)->delete();
        return redirect('admin-login/managecontact')->with('del', 'Your contact successfully deleted'); 
    }
}
