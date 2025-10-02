<?php

namespace App\Http\Controllers;

use App\Models\Bimtek;
use App\Http\Requests\StoreBimtekRequest;
use App\Http\Requests\UpdateBimtekRequest;

class BimtekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBimtekRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBimtekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bimtek  $bimtek
     * @return \Illuminate\Http\Response
     */
    public function show(Bimtek $bimtek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bimtek  $bimtek
     * @return \Illuminate\Http\Response
     */
    public function edit(Bimtek $bimtek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBimtekRequest  $request
     * @param  \App\Models\Bimtek  $bimtek
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBimtekRequest $request, Bimtek $bimtek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bimtek  $bimtek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bimtek $bimtek)
    {
        //
    }
}
