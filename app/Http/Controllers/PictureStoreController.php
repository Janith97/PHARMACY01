<?php

namespace App\Http\Controllers;

use App\PictureStore;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PictureStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images= Picturestore::all();
        return view('picturestore.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pictureStore.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return($request->image); 
        if($request->hasFile('image')){
            //dd($request->image);
            //$request->image->store('image');
            //dd($request->image->getClientOriginalName());
            $fileName = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$fileName,'public');

            $picture = new picturestore();
            $picture->image= $fileName;
            $picture->save();
            return('Done!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PictureStore  $pictureStore
     * @return \Illuminate\Http\Response
     */
    public function show(PictureStore $pictureStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PictureStore  $pictureStore
     * @return \Illuminate\Http\Response
     */
    public function edit(PictureStore $pictureStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PictureStore  $pictureStore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PictureStore $pictureStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PictureStore  $pictureStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(PictureStore $pictureStore)
    {
        //
    }
}
