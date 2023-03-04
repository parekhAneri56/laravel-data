<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\addblogmodel;
use DB;

class addblogcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //fetch Blog_category in addblogs views
         $category=DB::table('blog_categories')->select('id','category_name')->get();

        return view('admin.addblog',['category'=>$category]);
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
        $request->validate([
            "category_name" => 'required',
            "blogimage" => 'required',
            "Writer_name" => 'required',
            "title" => 'required',
            "description" => 'required'
            
        ]);


        // uploads file or images
         $path=rand().'.'.$request->blogimage->extension();
         $request->blogimage->move(public_path('assets/uploads/blogs/'),$path);

        $data=array(
            "blog_categories_id"=>$request->category_name,
            "blogimage"=>$path,
            "Writer_name"=>$request->Writer_name,
            "title"=>$request->title,
            "description"=>$request->description
        );

          addblogmodel::create($data);
         return redirect('/admin-addblog')->with('success','Your Blog Addedd successfully'); 

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
          //joins ain addblogs with blog_categories
        
          $data=DB::table('addblogs')->join('blog_categories','addblogs.blog_categories_id', '=', 'blog_categories.id')->select('addblogs.*','blog_categories.category_name')->get();

          return view('admin.manageblog',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //fetch Blog_category in addblogs views
        $category=DB::table('blog_categories')->select('id','category_name')->get();

        
        //edit from tablename where id='id';
       $ed = addblogmodel::where('id', $id)->first();
       return view('admin.admineditblog',["ed"=>$ed,"category"=>$category]);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // uploads file or images
        $path=rand().'.'.$request->blogimage->extension();
        $request->blogimage->move(public_path('assets/uploads/blogs/'),$path);

        //Update data in table
     
        $ed = array(
            "blog_categories_id"=>$request->category_name,
            "blogimage"=>$path,
            "Writer_name"=>$request->Writer_name,
            "title"=>$request->title,
            "description"=>$request->description
      
        );
   
            addblogmodel::where('id', $id)->Update($ed);
            return redirect('/admin-manageblog')->with('upd', 'Your Blog successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         //delete from tablename where id='id';
         addblogmodel::where('id', $id)->delete();
         return redirect('/admin-manageblog')->with('del', 'Your Blog successfully deleted');
    }
}
