<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class gallery extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $allData=\App\gallery::all();
        return view("gallery.show",compact("allData"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("gallery.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=$request->file("image");
        $image_name=uniqid()."_".$image->getClientOriginalName();
        $save_Path=public_path("/imgs");
        $image->move("$save_Path",$save_Path."/$image_name");
        $newgallery=new \App\gallery();
        $newgallery->image=$image_name;
        $newgallery->title=$request->title;
        $newgallery->price=$request->price;
        $newgallery->description=$request->description;
        $newgallery->save();
        return redirect("/show");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $edit_data=\App\gallery::findOrFail($id);

    return view("gallery.edit",compact("edit_data"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function update(Request $request, $id)
    {
        $update_data=\App\gallery::findOrFail($id);
        $update_data->title=$request->title;
        $update_data->description=$request->description;
        $update_data->price=$request->price;
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/imgs'), $filename);
            $update_data->image = $request->file('image')->getClientOriginalName();
        }
        $update_data->update();
        return redirect("/show");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data=\App\gallery::findOrFail($id);
        $delete_data->delete();
        return redirect("/show");
    }
}
