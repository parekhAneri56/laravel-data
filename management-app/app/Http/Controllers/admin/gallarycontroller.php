<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallarymodel;
 
class gallarycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.addgallary');
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
            "galleryimage"=>'required',
            "name"=>'required'
            //database column name=> form name
        ]);

         // uploads file or images
         $path=rand().'.'.$request->galleryimage->extension();
         $request->galleryimage->move(public_path('assets/uploads/gallaries/'),$path);

          //insert data in contact table
          date_default_timezone_set("Asia/calcutta");
          $data = array(
          "galleryimage" => $path,
          "name" => $request->name
      
          );

          gallarymodel::create($data);
          return redirect('/admin-addgallary')->with('success','Your image Addedd successfully'); 
      

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = gallarymodel::all();
        return view('admin.managegallary',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //edit from tablename where id='id';
       $ed = gallarymodel::where('id', $id)->first();
       return view('admin.admineditgallary',["ed"=>$ed]);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // uploads file or images
        $path=rand().'.'.$request->galleryimage->extension();
        $request->galleryimage->move(public_path('assets/uploads/gallaries/'),$path);

        //Update data in table
     
        $ed = array(
            "galleryimage" => $path,
            "name" => $request->name
        );
   
            gallarymodel::where('id', $id)->Update($ed);
            return redirect('/admin-managegallary')->with('upd', 'Your Gallary successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         //delete from tablename where id='id';
         gallarymodel::where('id', $id)->delete();
         return redirect('/admin-managegallary')->with('del', 'Your Gallary successfully deleted'); 
    }
}
