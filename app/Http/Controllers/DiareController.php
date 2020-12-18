<?php

namespace App\Http\Controllers;

use App\Diare;
use Illuminate\Http\Request;

class DiareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Laporan.LB1.diare');
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
     * @param  \App\Diare  $diare
     * @return \Illuminate\Http\Response
     */
    public function show(Diare $diare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diare  $diare
     * @return \Illuminate\Http\Response
     */
    public function edit(Diare $diare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diare  $diare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Diare $diare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diare  $diare
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diare $diare)
    {
        //
    }
}
