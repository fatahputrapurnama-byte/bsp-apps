<?php

namespace App\Http\Controllers;

use App\Models\Auditing;
use App\Http\Requests\StoreAuditingRequest;
use App\Http\Requests\UpdateAuditingRequest;

class AuditingController extends Controller
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
     * @param  \App\Http\Requests\StoreAuditingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuditingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function show(Auditing $auditing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function edit(Auditing $auditing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuditingRequest  $request
     * @param  \App\Models\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuditingRequest $request, Auditing $auditing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auditing  $auditing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auditing $auditing)
    {
        //
    }
}
