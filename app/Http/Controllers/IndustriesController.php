<?php

namespace App\Http\Controllers;

use App\Models\Industries;
use Illuminate\Http\Request;

class IndustriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('industries');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Industries  $industries
     * @return \Illuminate\Http\Response
     */
    public function show(Industries $industries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industries  $industries
     * @return \Illuminate\Http\Response
     */
    public function edit(Industries $industries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Industries  $industries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Industries $industries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industries  $industries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Industries $industries)
    {
        //
    }
}
