<?php

namespace App\Http\Controllers;

use App\theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$themes = theme::all();
        return view('theme.medicine');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.purchase');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(theme $theme)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(theme $theme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, theme $theme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(theme $theme)
    {
        //
    }

    public function new2()
    {
        return view('theme.medicine');
    }
    public function new3()
    {
        return view('theme.dashboard');
    }

   

    

    


}
