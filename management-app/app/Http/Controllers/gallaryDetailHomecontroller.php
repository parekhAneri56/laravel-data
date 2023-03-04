<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\gallaryDetailHomemodel;

class gallaryDetailHomecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('creative-agency.photo-detail');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = gallaryDetailHomemodel::all();
        $rd = gallaryDetailHomemodel::where('id',$id)->first();
        return view('creative-agency.photo-detail',["rd"=>$rd,"data"=>$data]);

   
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
    public function destroy(string $id)
    {
        //
    }
}
